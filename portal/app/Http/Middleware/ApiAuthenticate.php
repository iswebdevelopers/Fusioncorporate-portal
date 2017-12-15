<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Support\Facades\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException as Exception;

/**
* ApiAuthenticatecheck as route middleware
*/
class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if(Request::ajax()){
            $return = response()->json(['Session_error'=>'Session Expired','code' => '401' ], 401);
        } else {
            $return = redirect('login');
        }

        if ($token = $request->session()->get('token')) {
            try {

                $client = new Client(['base_uri' => config('services.api.url')]);
                $response = $client->request('GET', 'auth/user', [
                                'query' => ['token' => $token]
                            ]);
                if ($response->getstatusCode() == 200) {
                    $result = json_decode($response->getBody()->getContents(), true);
                    if (!$result['authuser']) {
                        return $return;
                    }
                } else {
                    return $return;
                }
            } catch (Exception $e) {
                return $return;
            }
        } else {
            return $return;
        }

        $request->session()->put('user_id', $result['authuser']['id']);
        
        \View::share('user', $result['authuser']);
        return $next($request);
    }
}

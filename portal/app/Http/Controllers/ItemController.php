<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Setting;
use GuzzleHttp\Exception\ClientException as Exception;

class ItemController extends FrontController
{
    /**
     * list of items 
     * @param  Request $request
     * @return data array of items data
     */
    public function itemlist(Request $request)
    {
        try {
            $token = $request->session()->get('token');

            if ($request->isMethod('post')) {
                if ($request->item) {
                    $response = $this->client->request('GET', 'item/'.$request->item, ['query' => ['token' => $token]]);
                } elseif ($request->barcode) {
                    $response = $this->client->request('GET', 'item/barcode/'.$request->barcode, ['query' => ['token' => $token]]);
                }

                if ($response->getstatusCode() == 200) {
                    $result = json_decode($response->getBody()->getContents(), true);
                }

                return view('labels.itemlist', ['items' => $result['data']])->withTitle('items')->withInput($request->all());
            }    
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
            
            return view('labels.itemlist')->withErrors($errors)->withTitle('items')->withInput($request->all());
        }

        return view('labels.itemlist')->withTitle('items');
    }
}

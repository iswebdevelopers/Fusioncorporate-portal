<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLabelPrint;
use Config;
use App\UserPrinterSetting;
use App\Http\Requests;
use GuzzleHttp\Exception\ClientException as Exception;

class PrintController extends FrontController
{
    /**
     * Print shop page details
     * @return user label prints list and printer settings of the user
     */
    public function index(Request $request)
    {
        $cartons = UserLabelPrint::Print()->OfType('carton')->orderBy('order_id','id','type')->get(['order_id','type','quantity','description','id','updated_at']);
        $stickies = UserLabelPrint::Print()->OfType('sticky')->orderBy('order_id','id','type')->get(['order_id','type','quantity','description','id','updated_at']);
        $archives = UserLabelPrint::Archived()->orderBy('order_id','id','type')->get(['order_id','type','quantity','description','id','updated_at']);
        $setting = UserPrinterSetting::all()->first();
        $printer_settings = Config::get('user.settings.printer');

        $request->session()->flash('message', "In order to print files to local printer, it is necessary to install a print client on your local machine. Print Shop client can be downloaded from <a class='btn btn-default btn-xs' target='_blank' href =".Config::get('services.print.client').">Download Print Client</a>.");
        $request->session()->flash('class', 'alert-info');

        return view('print.home', ['cartons' => $cartons,'archives' => $archives, 'stickies' => $stickies,'user_setting' => $setting,'printer_settings' => $printer_settings])->withTitle('print-shop');
    }

    /**
     * send rawdata for the label requested in print shop
     * @param  id $id
     * @return rawdata from user label prints
     */
    public function rawdata(int $id)
    {
        $user_label_print = UserLabelPrint::findOrFail($id);

        if ($user_label_print) {
            return json_encode(['data' => $user_label_print->raw_data]);
        }
    }

    /**
     * archive label in print shop
     * @param  id $id
     * @return archived label object
     */
    public function archive(int $id)
    {
        $user_label_print = UserLabelPrint::findOrFail($id);

        if ($user_label_print) {
            $user_label_print->printed = 1;
            $user_label_print->save();

            return json_encode(['data' => $user_label_print]);
        }
    }

    /**
     * Saving printer settings for user printer
     * @param Request $request
     * @param settings object
     */
    public function printersetting(Request $request)
    {
        if ($request->isMethod('post')) {
            $printer = UserPrinterSetting::first();

            if(!$printer){
                $printer = New UserPrinterSetting();
                $printer->user_id = $request->id;
            }

            $setting['carton'] = $request->carton;
            $setting['sticky'] = $request->sticky;

            $printer->settings = $setting;

            $printer->save();

            return $printer;
        } else{
            $setting = UserPrinterSetting::all()->first();
            $printer_settings = Config::get('user.settings.printer');
            
            return view('print.setting', ['user_setting' => $setting,'printer_settings' => $printer_settings])->withTitle('setting');            
        }    
    }

    /**
     * Sign qz client using the certificate
     * @return certificate
     */
    public function promise_certificate()
    {
        $certificate = file_get_contents(resource_path('assets/qz/digital-certificate.txt'));

        return $certificate;
    }

    /**
     * Sign qz client using the certificate sign with private key
     * @return signature
     */
    public function promise_signature(Request $request)
    {
        
        $key = resource_path('assets/qz/private-key.pem');

        $req = $request->sign;

        $privateKey = openssl_get_privatekey(file_get_contents($key));

        $signature = null;
        openssl_sign($req, $signature, $privateKey);

        if ($signature) {
           header("Content-type: text/plain");
           return base64_encode($signature);
           exit(0);
        }

        echo '<h1>Error signing message</h1>';
        exit(1);
    }
}

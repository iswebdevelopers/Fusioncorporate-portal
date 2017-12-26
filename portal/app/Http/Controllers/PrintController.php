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
        $cartons = UserLabelPrint::Print()->OfType('carton')->latest()->get(['order_id','type','quantity','id','updated_at']);
        $stickies = UserLabelPrint::Print()->OfType('sticky')->latest()->get(['order_id','type','quantity','id','updated_at']);
        $archives = UserLabelPrint::Archived()->latest()->get(['order_id','type','quantity','id','updated_at']);
        $setting = UserPrinterSetting::all()->first();
        $printer_settings = Config::get('user.settings.printer');

        $request->session()->flash('message', "In order to print files to local printer, it is necessary to install a print client on your local machine. Print Shop client can be downloaded from <a target='_blank' href =".Config::get('services.print.client').">Download Print Client</a>.");
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
            $user_label_print->printed = 1;
            $user_label_print->save();

            return json_encode(['data' => $user_label_print->raw_data]);
        }
    }

    /**
     * Saving host settings for user printer
     * @param Request $request
     * @param settings object
     */
    public function setHost(Request $request, int $id)
    {
        $setting = UserPrinterSetting::firstOrCreate(['user_id' => $id]);
        $setting->host = $request->host;
        $setting->port = $request->port;
        $setting->save();

        return $setting;
    }

    /**
     * Saving printer settings for user printer
     * @param Request $request
     * @param settings object
     */
    public function PrinterSetting(Request $request)
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
}

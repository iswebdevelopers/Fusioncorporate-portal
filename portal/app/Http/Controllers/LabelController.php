<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TicketRequest;
use Setting;
use View;
use App\Jobs\processCartonLabels;
use App\Jobs\processStickyLabels;
use GuzzleHttp\Exception\ClientException as Exception;
use App\UserPrinterSetting;
use App\UserLabelPrint;

class LabelController extends FrontController
{
    /**
     * Tickets Creation for warehouse users only
     * @param  Request $request
     * @return label print data array
     */
    public function createticket(Request $request)
    {
        $authUser = $this->getAuthUser($request);
        
        try {
            $token = $request->session()->get('token');
            foreach ($request->data as $data) {
                $data['ticket_type'] = $request->type;
                $order_no = $data['order_no'];

                $response = $this->client->request('POST', 'ticket/create/tips/request?token='.$token, [
                    'form_params' => $data
                       ]);
            }
            
            if ($response->getstatusCode() == 200) {
                $ticket_list = $this->getCreatedTickets($request, $request->type);
            }
            
            if (count($ticket_list) > 0) {
                // $data = array_map([$this, 'getTipsTicketData'], $ticket_list['data'], $request);
                $tipsdata = array_map(function ($ticket) use ($request) {
                    return $this->getTipsTicketData($ticket, $request);
                }, $ticket_list);
            }

            foreach ($tipsdata as $key => $label) {
                foreach ($label as $labelkey => $labeldata) {
                    if(!empty($labeldata)){
                        if (strtolower($labelkey) == 'sticky') {
                            processStickyLabels::dispatch($authUser, $label, $this->getUserPrinterSettings('sticky'));
                        } else {
                            processCartonLabels::dispatch($authUser, $label, $this->getUserPrinterSettings('carton'));
                        }
                    }
                }
            }

            $request->session()->flash('message', 'All Labels has been added to Print Shop');
            $request->session()->flash('class', 'alert-info');
            
            return redirect('label/order/'.$order_no);
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
            return view('labels.list')->withErrors($errors)->withTitle('label_history');
        }
    }

    /**
     * printcartons cartonpack and cartonloose data
     * @param  Request $request
     * @param  int     $order_no
     * @return data array
     */
    public function printcartons(Request $request, int $order_no)
    {
        $authUser = $this->getAuthUser($request);
        
        try {
            $token = $request->session()->get('token');
            $data = array();
            
            $response = $this->client->request('GET', 'order/'.$order_no.'/cartonpack', ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $data['cartonpack'] = $result['data'];
            }
            
            $response =  $this->client->request('GET', 'order/'.$order_no.'/cartonloose', ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $data['cartonloose'] = $result['data'];
            }

            //add it to the queue job
            processCartonLabels::dispatch($authUser, $data,  $this->getUserPrinterSettings('carton'));
            
            $request->session()->flash('message', 'Carton Labels has been added to Print Shop');
            $request->session()->flash('class', 'alert-info');
            
            return redirect('label/order/'.$order_no);
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
                
            return Redirect('label/carton')->withErrors($errors)->withTitle('label_carton')->withInput($request->all());
        }
    }

    /**
     * printstickies print sticky labels
     * @param  Request $request
     * @param  int     $order_no
     * @return data array
     */
    public function printstickies(Request $request, int $order_no)
    {
        $authUser = $this->getAuthUser($request);
        $sticky = array();
        try {
            $token = $request->session()->get('token');
            $data = array();
            
            $response =  $this->client->request('GET', 'order/'.$order_no.'/ratiopack', ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $sticky = array_merge($sticky,$result['data']);
            }
            
            $response =  $this->client->request('GET', 'order/'.$order_no.'/simplepack', ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $sticky = array_merge($sticky,$result['data']);
            }
            
            $response =  $this->client->request('GET', 'order/'.$order_no.'/looseitem', ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $sticky = array_merge($sticky,$result['data']);
            }

            $data['sticky'] = $sticky;

            processStickyLabels::dispatch($authUser, $data,  $this->getUserPrinterSettings('sticky'));
            $request->session()->flash('message', 'Carton Labels has been added to Print Shop');
            $request->session()->flash('class', 'alert-info');

            return redirect('label/order/'.$order_no);
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
                
            return Redirect('label/carton')->withErrors($errors)->withTitle('label_carton')->withInput($request->all());
        }
    }

    /**
     * Specific carton type printing pack or loose
     * @param  Request  $request
     * @param  string   $cartontype
     * @param  int      $order_no
     * @param  int|null $item_number
     * @return data array
     */
    public function printcartontype(Request $request, string $cartontype, int $order_no, int $item_number = null)
    {
        $authUser = $this->getAuthUser($request);
        $token = $request->session()->get('token');

        try {
            $response = $this->client->request('GET', 'order/'.$order_no.'/'.$cartontype.'/'.$item_number, ['query' => ['token' => $token]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
                $data[$cartontype] = $result['data'];
            }

            processCartonLabels::dispatch($authUser, $data,  $this->getUserPrinterSettings('carton'));
            
            $request->session()->flash('message', 'Carton Labels has been added to Print Shop');
            $request->session()->flash('class', 'alert-info');
            
            return redirect('label/order/'.$order_no);
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
            
            return Redirect('label/carton')->withErrors($errors)->withTitle('label_carton')->withInput($request->all());
        }
    }

    /**
     * printed ticket history listing
     * @param  Request $request
     * @return data array
     */
    public function history(Request $request)
    {
        try {
            $token = $request->session()->get('token');
            $page = $request->page ? $request->page : 1;
            
            $response = $this->client->request('GET', 'ticket/tips/printed', ['query' => ['token' => $token,'page'=>$page]]);
            
            if ($response->getstatusCode() == 200) {
                $result = json_decode($response->getBody()->getContents(), true);
            }
        } catch (Exception $e) {
            $error = json_decode((string) $e->getResponse()->getBody(), true);
            $errors = [$error['message']];
            
            return view('labels.history')->withErrors($errors)->withTitle('label_history');
        }

        return view('labels.history', ['labels' => $result['data'],'nav' => true])->withTitle('label_history');
    }

    /**
     * list of cartons for order searched
     * @param  Request $request
     * @return data array of cartons
     */
    public function search(Request $request)
    {
        $token = $request->session()->get('token');

        if ($request->isMethod('post')) {
            try {
                $response = $this->client->request('POST', 'order/'.$request->carton_type.'?token='.$token, ['form_params' => ['order_no'=>$request->order_no,'item_number' => $request->item_number]]);
                
                if ($response->getstatusCode() == 200) {
                    $result = json_decode($response->getBody()->getContents(), true);
                }
                
                return view('labels.search', ['orders' => $result['data']])->withTitle('label_carton')->withInput($request->all());
            } catch (Exception $e) {
                $error = json_decode((string) $e->getResponse()->getBody(), true);
                $errors = [$error['message']];
                
                return Redirect('label/carton')->withErrors($errors)->withTitle('label_carton')->withInput($request->all());
            }
        } else {
            return view('labels.search')->withTitle('label_carton')->withInput($request->all());
        }
    }

    /**
     * list of cartons for order searched
     * @param  Request $request
     * @return data array of cartons
     */
    public function printmixed(Request $request)
    { 
        $authUser = $this->getAuthUser($request);

        if ($request->isMethod('post')) {

            $view = View::make('labels.templates.mixedcarton', ['settings' => $this->getUserPrinterSettings('carton'), 'quantity' => $request->quantity]);
            
            $raw_data = (string) $view;

            $labelprint = New UserLabelPrint();
            $labelprint->user_id = $authUser['id'];
            $labelprint->order_id = $request->order_no;
            $labelprint->type = $request->type;
            $labelprint->raw_data = $raw_data;
            $labelprint->printed = 0;
            $labelprint->creator = $authUser['email'];
            $labelprint->quantity = $request->quantity;

            $labelprint->save();

            $request->session()->flash('message', 'Carton Mixed Labels has been added to Print Shop');
            $request->session()->flash('class', 'alert-info');

            return redirect('label/order/'.$request->order_no);
        }

    }
}

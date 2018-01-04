<?php

namespace App\Jobs;

use App\Traits\CreateLabelPrint;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use View;
use Log;
use Config;

class processCartonLabels implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels,CreateLabelPrint;

    public $cartondata;
    public $user;
    public $printer_settings;
    public $type;
    public $pagebreak;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $cartondata, $type, $user_printer_setting)
    {
        $this->cartondata = $cartondata;
        $this->user = $user;
        $this->printer_settings = $user_printer_setting;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!empty($this->cartondata)) {
            foreach ($this->cartondata as $index => $carton) {
                if ($carton) {
                    if($index == 0) {
                        $pagebreak = true;
                    } else {
                        $pagebreak = false;
                    }
                    $view = View::make('labels.templates.'.$this->type, ['carton' => $carton, 'settings' => $this->printer_settings, 'pagebreak' => $pagebreak]);
                    $raw_data = (string) $view;

                    try {
                        //add it to user label print
                        $this->addLabelPrint($carton, $raw_data, $this->type);
                    } catch (Exception $e) {
                        Log::info('Exception running queue job processCartonLabels '. $e->getMessage());
                    }
                }
            }
        }
    }
}

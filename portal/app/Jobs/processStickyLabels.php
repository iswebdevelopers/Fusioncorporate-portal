<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Traits\CreateLabelPrint;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\UserLabelPrint;
use View;
use Log;

class processStickyLabels implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, CreateLabelPrint;
    public $data;
    public $user;
    public $printer_settings;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $data, $user_printer_setting)
    {
        $this->data = $data;
        $this->user = $user;
        $this->printer_settings = $user_printer_setting;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!empty($this->data)) {
            foreach ($this->data as $type => $sticky) {
                if ($sticky) {
                    
                    $view = View::make('labels.templates.sticky', ['data' => $sticky, 'settings' => $this->printer_settings]);
                    $raw_data = (string) $view;

                    try {
                        //add it to user label print
                        $this->addLabelPrint($sticky, $raw_data, $type);
                    } catch (Exception $e) {
                        Log::info('Exception running queue job processCartonLabels '. $e->getMessage());
                    }
                }
            }
            
        }
    }
}

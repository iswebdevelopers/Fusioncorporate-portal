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
use Config;

class processStickyLabels implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, CreateLabelPrint;
    public $stickydata;
    public $user;
    public $printer_settings;
    public $type;
    public $pagebreak;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $stickydata, $type, $user_printer_setting)
    {
        $this->stickydata = $stickydata;
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
        try {
            if (!empty($this->stickydata)) {
                foreach ($this->stickydata as $sticky) {
                    $view = View::make('labels.templates.'.$this->type, ['sticky' => $sticky, 'settings' => $this->printer_settings]);
                    $raw_data = (string) $view;
                    //add it to user label print
                    $this->addLabelPrint($sticky, $raw_data, config::get('ticket.process.'.$this->type));    
                }
                
            }
        } catch (Exception $e) {
            Log::info('Exception running queue job processCartonLabels '. $e->getMessage());
        }
    }
}

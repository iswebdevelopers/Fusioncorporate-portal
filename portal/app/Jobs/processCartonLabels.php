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

    public $carton;
    public $user;
    public $printer_settings;
    public $pagebreak;
    public $type;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $carton, $type, $pagebreak, $user_printer_setting)
    {
        $this->carton = $carton;
        $this->user = $user;
        $this->printer_settings = $user_printer_setting;
        $this->type = $type;
        $this->pagebreak = $pagebreak;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->carton) {
            try {
                $view = View::make('labels.templates.'.$this->type, ['carton' => $this->carton, 'settings' => $this->printer_settings, 'pagebreak' => $this->pagebreak]);
                $raw_data = (string) $view;
                //add it to user label print
                $this->addLabelPrint($this->carton, $raw_data, $this->type);
            } catch (Exception $e) {
                Log::info('Exception running queue job processCartonLabels '. $e->getMessage());
            }
        }
    }
}

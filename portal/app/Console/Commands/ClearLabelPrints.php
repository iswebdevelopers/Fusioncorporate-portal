<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UserLabelPrint;
use Log;
use Illuminate\Support\Facades\DB;

class ClearLabelPrints extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'label:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear user label prints table everyday of labels older than a month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // DB::enableQueryLog();
        $labels = UserLabelPrint::withoutGlobalScopes()->MonthOld()->get();
// dd(DB::getQueryLog());
        foreach ($labels as $label) {
            $label->delete();
        }

        Log::info('Cleared label prints '. date('dd/mm/yyyy'));
    }
}

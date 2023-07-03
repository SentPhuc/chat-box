<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AskDatabases;
use App\Models\DailyLog;

class removeAskDatabaseDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remove-ask-database-daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command remove ask database daily';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = AskDatabases::where('id','<>',0)->delete();
        app(DailyLog::class)->save();
    }
}

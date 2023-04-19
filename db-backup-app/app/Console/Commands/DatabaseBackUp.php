<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";
  
        $command = "pg_dump --user=" . env('DB_USERNAME') ." --password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " " . env('DB_DATABASE') . "  | gzip > " . public_path() . "/backup-files/" . $filename;
  
        $returnVar = NULL;
        $output  = NULL;
  
        exec($command, $output, $returnVar);
    }
}

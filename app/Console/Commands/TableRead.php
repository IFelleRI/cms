<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TableRead extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:read {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Read table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $values = DB::table($this->argument('table'))->get();
        foreach ($values as $val) {
            echo'<pre>';
            print_r($val);
            echo'</pre>';
        }
        $this->newLine();
    }
}

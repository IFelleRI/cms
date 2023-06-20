<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TableCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //$this->argument('table')

        $table = DB::table($this->argument('table'))->get();
        echo'<pre>';
        print_r($table);
        echo'</pre>';
    }
}

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
    protected $signature = 'app:create';

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
        $caption = $this->ask('Caption');
        $url = $this->ask('Url');
        DB::table('section')->insert([
           'parent_id' => '0',
           'caption' => $caption,
           'url' => $url
        ]);
        $this->info("Created.");
    }
}

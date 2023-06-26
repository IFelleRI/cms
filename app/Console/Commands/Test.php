<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test {t}';

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
        if($this->argument('t') == 'delete'){
            $idV = $this->ask('delete ID table');
            DB::table('sections')
              ->where('id','=',$idV)
              ->delete();
            $this->info('Deleted');
        }

        if($this->argument('t') == 'update'){
            $idV = $this->ask('update ID table');
            $col = $this->ask('Name column');
            $colVal = $this->ask('Column value');
            DB::table('sections')
              ->where('id','=',$idV)
              ->update([$col=>$colVal]);
            $this->info('Saved');
        }

        if($this->argument('t') == 'create'){
            DB::table('sections')->insert([
               'parent_id'=>'0',
               'body'=>'created_body',
               'url'=>'created_url',
               'caption'=>'caption_id'
            ]);
            $this->info('Created');
        }

    }
}

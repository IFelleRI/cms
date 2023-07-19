<?php

namespace App\Console\Commands;

use App\Models\Section;
use Illuminate\Console\Command;


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
        $r = new Section();
        if($this->argument('t') == 'c'){
            $r->parent_id = '2';
            $r->body = 'test2';
            $r->caption = 'test2';
            $r->url = 'test2';
            $r->save();
            $this->info('Create success');
        }
        if($this->argument('t') == 'u'){
            $u = Section::find(3);
            $u->parent_id = '1';
            $u->caption = 'update';
            $u->save();
            $this->info('Update success');
        }
        if($this->argument('t') == 'd'){
            $d = Section::find(3);
            $d->delete();
            $this->info('Delete success');
        }
        if($this->argument('t') == 'f'){
            Section::find(1);
        }
    }
}

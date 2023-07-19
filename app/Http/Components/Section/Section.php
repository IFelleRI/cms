<?php
namespace App\Http\Components\Section;

use App\Http\Components\Section\Models\Actions;
use App\Http\Components\Section\Models\SectionListWidget;
use App\Http\Components\Section\Models\Sections;
use App\Http\Components\Section\Models\SectionsActions;
use Illuminate\Support\Facades\DB;

class Section{

    public function getSections(): SectionListWidget
    {
        $sections = DB::table('sections')->get();

        $arrSections = [];
        $arrActions = [
            array(
                'name'=>'Редактировать','action'=>'edit/'
            ),
            array(
                'name'=>'Удалить','action'=>'delete/'
            )
        ];

        $actions[] = new Actions('Добавить раздел','create/section');

        foreach($sections as $key => $sec){
            $arrSections['list'][$key] = new Sections($sec->caption);
            foreach ($arrActions as $action){
                $arrSections['list'][$key]->actions[] = new SectionsActions($action['name'],$action['action'].$sec->id);
            }
        }
        return new SectionListWidget($arrSections,$actions);
    }
}
<?php

namespace App\Widgets;

use App\Http\Components\Section\Section;
use Arrilot\Widgets\AbstractWidget;

class SectionsList extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(Section $section)
    {
        return view('widgets.sections_list', [
            'sections' => $section->getSections(),
        ]);
    }
}

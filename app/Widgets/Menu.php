<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Http\Components\Layout\Layout;
class Menu extends AbstractWidget
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
    public function run(Layout $layout)
    {
        return view('widgets.menu', [
            'menu' => $layout->getMenu(),
        ]);
    }
}

<ul>
    <?foreach ($menu->menu as $item):?>
        <li>
            <a href="<?=$item->link;?>"><?=$item->name;?></a>
            <?if(isset($item->items)):?>
                <ul class="level-two">
                    <?foreach ($item->items as $child):?>
                        <li><a href="<?=$child->link?>"><?=$child->name?></a></li>
                    <?endforeach;?>
                </ul>
            <?endif;?>
        </li>
    <?endforeach;?>
</ul>

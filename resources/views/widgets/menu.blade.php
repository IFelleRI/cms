<ul>
    <?foreach ($menu as $item):?>
        <li>
            <a href="<?=$item['link'];?>"><?=$item['name'];?></a>
        </li>
    <?endforeach;?>
</ul>
<div class="section-wrapper">
    <div class="sections-actions">
        <?foreach($sections->actions as $actions):?>
            <a href="<?=$actions->action?>" class="section-actions_link">
                    <?=$actions->name?>
            </a>
        <?endforeach?>
    </div>
    <div class="sections-items">
        <?foreach($sections->sections['list'] as $item):?>
        <div class="sections-item">
            <div class="section-item_name">
                    <?=$item->caption?>
            </div>
            <div class="section-item_actions">
                <?foreach($item->actions as $val):?>
                    <div class="item-action">
                        <a href="<?=$val->action?>"><?=$val->name?></a>
                    </div>
                <?endforeach?>
            </div>
        </div>
        <?endforeach?>
    </div>
</div>
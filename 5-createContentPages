<?php
$ctxs = array(
'lipetsk',
'tambov'
);
$resources = array(
    'Лечение наркомании' => 0,
    'Лечение алкоголизма' => 0,
    'Реабилитация наркозависимых' => 0,
    'Реабилитация алкоголиков' => 0,
    'Статьи' => 0,
    'Контакты' => 0,
    
    'Лечение на дому' => 1,
    'Лечение в стационаре' => 1,
    'Экстренная наркологическая помощь' => 1,
    'Принудительное лечение' => 1,
    'Отзывы' => 1,
);

foreach ($ctxs as $ctx) {
    foreach ($resources as $pagetitle => $hidemenu) {
        $modx->runProcessor('resource/create', array('pagetitle' => $pagetitle,
                                'hidemenu' => $hidemenu, 'context_key' => $ctx));
    }
    return;
}

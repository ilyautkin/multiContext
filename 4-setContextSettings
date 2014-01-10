<?php
$ctxs = array(
'lipetsk',
'tambov'
);
foreach ($ctxs as $ctx) {
    $mainpage = $modx->getObject('modResource',
        array('context_key' => $ctx, 'pagetitle' => 'Главная страница'))->get('id');
    $notfound = $modx->getObject('modResource',
        array('context_key' => $ctx, 'pagetitle' => 'Страница не найдена'))->get('id');
    $modx->runProcessor('context/setting/create', array('fk' => $ctx, 'key' => 'site_start', 'value' => $mainpage));
    $modx->runProcessor('context/setting/create', array('fk' => $ctx, 'key' => 'error_page', 'value' => $notfound));
    return;
}

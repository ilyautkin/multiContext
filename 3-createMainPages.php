<?php
$ctxs = array(
'lipetsk',
'tambov'
);
$resources = array(
    0 => array(
            'pagetitle' => 'Главная страница',
            'longtitle' => 'Главная страница',
            'menutitle' => 'Главная страница',
            'content'   => '',
            'alias'     => 'index'
        ),
    1 => array(
            'pagetitle' => 'Карта сайта',
            'longtitle' => 'Карта сайта',
            'menutitle' => 'Карта сайта',
            'content'   => $modx->getObject('modResource',6)->get('content'),
            'alias'     => 'sitemap',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1000
        ),
    2 => array(
            'pagetitle' => 'Заказать звонок',
            'longtitle' => 'Заказать звонок',
            'menutitle' => 'Заказать звонок',
            'content'   => $modx->getObject('modResource',4)->get('content'),
            'alias'     => 'callme',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1001
        ),
    3 => array(
            'pagetitle' => 'Спасибо. Ваша заявка принята',
            'longtitle' => 'Спасибо. Ваша заявка принята',
            'content'   => '',
            'alias'     => 'ok',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1002
        ),
    4 => array(
            'pagetitle' => 'Страница не найдена',
            'longtitle' => '&nbsp;',
            'content'   => $modx->getObject('modResource',10)->get('content'),
            'alias'     => '404',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1003
        ),
    5 => array(
            'pagetitle' => 'robots.txt',
            'longtitle' => 'robots.txt',
            'content'   => $modx->getObject('modResource',2)->get('content'),
            'introtext'   => $modx->getObject('modResource',2)->get('introtext'),
            'content_type'   => $modx->getObject('modResource',2)->get('content_type'),
            'alias'     => 'robots',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1004,
            'template'  => 0
        ),
    6 => array(
            'pagetitle' => 'sitemap.xml',
            'longtitle' => 'sitemap.xml',
            'content'   => $modx->getObject('modResource',3)->get('content'),
            'introtext'   => $modx->getObject('modResource',3)->get('introtext'),
            'content_type'   => $modx->getObject('modResource',3)->get('content_type'),
            'alias'     => 'sitemap',
            'searchable' => 0,
            'hidemenu'  => 1,
            'richtext'  => 0,
            'menuindex' => 1005,
            'template'  => 0
        ),
);

foreach ($ctxs as $ctx) {
    foreach ($resources as $res) {
        $res['context_key'] = $ctx;
        $modx->runProcessor('resource/create', $res);
    }
    return;
}

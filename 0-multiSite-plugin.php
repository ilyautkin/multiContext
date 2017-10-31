<?php
if ($modx->event->name != "OnHandleRequest"
    || $modx->context->key == 'mgr') {
       return;
    }

$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
if ($setting = $modx->getObject('modContextSetting', array('key' => 'site_url', 'value' => $host))) {
    $ctx = $setting->get('context_key');
} else {
    $ctx = 'web';
}

if ($ctx != $modx->context->key){
    $modx->switchContext($ctx);
}

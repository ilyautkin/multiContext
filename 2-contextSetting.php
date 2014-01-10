<?php
$ctxs = array(
'lipetsk',
'tambov'
);
foreach ($ctxs as $ctx) {
    $modx->runProcessor('context/setting/create',
                  array('fk' => $ctx,
                        'key' => 'site_url',
                        'value' => 'http://narkologiya-'.$ctx.'.ru/'));
    return;
}

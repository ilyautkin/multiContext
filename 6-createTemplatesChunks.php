<?php
$ctxs = array(
'centr-dlja-narkomanov',
'centr-dlya-narkomanov'
);
foreach ($ctxs as $ctx) {
    $ch = $modx->newObject('modChunk', array('name' => $ctx, 'category' => 19, 'description' => ' '));
    $code = file_get_contents('http://centr-dlja-narkomanov.ru/assets/templates/'.$ctx.'.ru/index.html');
    if (!$code) return $ctx.' - нет кода';
    $ch->set('snippet',$code);
    $ch->save();
    return;
}

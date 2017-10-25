<?php

require('/include/setup.php');

$smarty = new smarty_setup();

$smarty->assign('nome','fabio');
$smarty->assign('idade','27');

$smarty->display('index.tpl');

?>
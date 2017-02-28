<?php

require('/include/setup.php');

$smarty = new smarty_setup();

$smarty->assign('nome','fabio');

$smarty->display('index.tpl');


<?php

    require('/include/smarty.php');
    require('/include/pdoconn.php');

    $smarty = new smarty_setup();



    class myclass
    {
        // declaração de propriedade
        public $var = 'um valor padrão';

        // declaração de método
        public function metodo() {
            return '<br>ok<br>';
        }
    }



    $exemplo = new myclass;



    $sql = "SELECT id, name FROM profile";

    $array = array();

    foreach ($bdconnect->query($sql) as $row) {
        array_push($array, $row['name']);
    }

    $smarty->assign('nomes',$array);
    $smarty->assign('exemplo',$exemplo->metodo());

    $bdconnect = null;
                   
                   
    $smarty->display('index.tpl');

?>
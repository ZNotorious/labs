<?php

use Zhukov\MyLog;
use Zhukov\QuadEquation;
use Zhukov\ZhukovException;

require __DIR__ . '/vendor/autoload.php';

$b = new QuadEquation();

MyLog::log("Версия программы ".file_get_contents("./version"));
try {
    $values = array();
    for($i=1; $i<4; $i++){
        echo "Enter ".$i." argument: ";
        $values[]=floatval(readline());
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Introduced equation ".$va."x^2 + ".$vb."x + ".$vc." = 0\n");
    $x = $b->equationTwo($va,$vb,$vc);

    $str = implode(", ", $x);
    MyLog::log("\nEquation roots: ".$str."\n");
    }catch(ZhukovException $e){
        MyLog::log($e->getMessage());
    }

    MyLog::write();
?>
<?php

use Zhukov\MyLog;
use Zhukov\QuadEquation;
use Zhukov\ZhukovException;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "Zhukov/MyLog.php";
include "Zhukov/Equation.php";
include "Zhukov/QuadEquation.php";
include 'Zhukov/ZhukovException.php';

$b = new QuadEquation();

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
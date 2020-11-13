<?php

use chebakova\ChebakovaException;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "chebakova/MyLog.php";
include "chebakova/Line.php";
include "chebakova/Sqr.php";
include "chebakova/ChebakovaException.php";

ini_set("display_errors", 1);
error_reporting (-1);

$b = new \chebakova\Sqr();

try{

    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    \chebakova\MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc);
    $x = $b->solve($va,$vb,$vc);

    $str = implode(", ", $x);
    \chebakova\MyLog::log("Корни уравнения: ".$str);
}catch(ChebakovaException $e){
    \chebakova\MyLog::log($e->getMessage());
}

\chebakova\MyLog::write();

?>
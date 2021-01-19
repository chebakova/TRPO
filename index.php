<?php

use chebakova\ChebakovaException;
use chebakova\MyLog;
use chebakova\Sqr;

require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting (-1);

$b = new \chebakova\Sqr();

try{
    $version =  file_get_contents("version");
    MyLog::log("Версия программы ".$version);

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
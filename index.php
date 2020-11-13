<?php
use chebakova\MyLog; 

include './core/EquationInterface.php'; 
include './core/LogAbstract.php'; 
include './core/LogInterface.php'; 
include './chebakova/Line.php'; 
include './chebakova/Sqr.php'; 
include './chebakova/MyLog.php'; 

$a = MyLog::Instance(); 
$b = MyLog::Instance(); 

$a->log('1'); 
$a->log('2'); 
$a->log('3'); 
$a->log('4'); 
$b->write();
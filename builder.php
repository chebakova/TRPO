<?php

$filename = "version";
$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
file_put_contents($filename, $version, FILE_APPEND);

$dirname = "core";

if(!(is_dir($dirname))){
    $query = 'composer install';
    $tmp = exec($query);
}
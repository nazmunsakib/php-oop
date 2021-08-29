<?php

//File Autoloding For small Project
function autoload($name){
    $fileName = strtolower($name);
    include "{$fileName}.php";
}
spl_autoload_register('autoload');
echo (new Planet)->earth();
echo (new Galaxy)->sayHi();

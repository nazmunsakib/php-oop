<?php 
namespace CloudStorage;

spl_autoload_register(function($fileName){
    $path = strtolower(str_replace("CloudStorage\\", "",$fileName ).".php");
    $path = str_replace("\\","/", $path);
    include_once($path);
});

use CloudStorage\mail\Mailer;

class Storage{
    function __construct()
    {
        $Email = new Mailer();
        $Email->Send();
    }
}

new Storage();
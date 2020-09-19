<?php
    spl_autoload_register(function ($classname){
        $filename =  ROOT ."/".$classname.".php";
        $filename = str_replace('\\', '/', $filename);
        echo $filename;
        require_once($filename);
    });
?>
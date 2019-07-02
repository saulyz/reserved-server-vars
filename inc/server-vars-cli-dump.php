<?php
    $i = 0;
    foreach($_SERVER as $paramName => $varServer) {
        $i++;
        if (isset($_SERVER[$paramName])) { 
            ob_start();
            var_dump($varServer);
            $varDump = ob_get_clean();
            echo "#$i / \e[1;32;40m$paramName\e[0m = $varDump \n"; 
        } 
        else { 
            echo "#$i / \e[1;32;40m$paramName\e[0m = --- \n"; 
        } 
    }
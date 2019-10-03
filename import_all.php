<?php
    function importPath($path){
        foreach (glob("$path/*.php") as $filename){
            include $filename;
        }
    }
?>
<?php
class MY_Composer
{
    function __construct()
    {
        if(file_exists('./vendor/autoload.php')) {
            include("./vendor/autoload.php");
        }
    }
}
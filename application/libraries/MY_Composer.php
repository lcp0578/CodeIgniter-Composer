<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Composer
{
    function __construct()
    {
        if(file_exists('./vendor/autoload.php')) {
            include("./vendor/autoload.php");
        }
    }
}
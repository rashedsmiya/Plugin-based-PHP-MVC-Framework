<?php 
    
    function load_plugin($func_name){

       if(file_exists('plugins/plugin.php')){   

       require 'plugins/plugin.php';
       $$func_name();
    }

}
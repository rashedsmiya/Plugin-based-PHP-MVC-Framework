<?php 
   
    $ACTIONES = [];
    function add_action($action_name, $func){
    global $ACTIONES;
    $ACTIONES[$action_name] = $func;
    }

    function do_action($action_name) {
        global $ACTIONES;
        $ACTIONES[$action_name]();
    }

    function load_plugins($func_name)
    {
        $folder = 'plugins/';
        $files = glob($folder . "*.php");


        if(is_array($files)){
            foreach($files as $file)
            {
                require $file;
            }
        }
    }
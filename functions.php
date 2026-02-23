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

    function load_plugins()
    {
        $folder = 'plugins/';
        $files = glob($folder . "*.php");
        foreach ($files as $file) {
            require_once $file;
        }
    }
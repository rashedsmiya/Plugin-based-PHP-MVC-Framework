<?php 
   
    $ACTIONES = [];
    function add_action($action_name, $func){
    global $ACTIONES;
    $ACTIONES[$action_name] = $func;
    }

    function do_action($action_name) {
        global $ACTIONES;
        
        if(!empty($ACTIONES[$action_name])){
            $ACTIONES[$action_name]();
        }
    }

    function add_filter($filter_name, $func){
    global $ACTIONES;
    $ACTIONES[$filter_name] = $func;
    }

    function do_filter($filter_name, $data) {
        global $ACTIONES;
        
        if(!empty($ACTIONES[$filter_name])){
            return $ACTIONES[$filter_name]($data);
        }
        return $data;
    }


    load_plugins(); 
    function load_plugins()
    {
        $folder = 'plugins/';
        $files = glob($folder . '*.php');

        if(is_array($files)) {
            foreach($files as $file) {
                // code ....
                if(file_exists($file)) {
                    require_once $file;
                }
            }
        }
    }


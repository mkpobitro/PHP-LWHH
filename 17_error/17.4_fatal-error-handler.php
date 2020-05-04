<?php 

ini_set("display_errors", 0);
function fatal_error_handler(){
    $error = error_get_last();
    if($error){
        // developer er kase mail korte pari
        echo "Fatal Error";
    }else{
        echo "noting error found";
    }
}
register_shutdown_function("fatal_error_handler");
//register_shutdown_function — Register a function for execution on shutdown

no_function();

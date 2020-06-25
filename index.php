<?php 
     define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
     require_once('Controlers/controlerParrent.php') ;
    
    // save etudiant ou chambre
    if (isset($_POST['saveEtu']) || isset($_POST['saveCham']))
    {
        require_once('Controlers/AdminControler.php') ;
        $controler = new AdminControler() ;
        $controler->setClassName($_POST['className']);
        $controler->enregistre('madou');
    }

    if ($_GET['url']) {
    $params = explode('/',$_GET['url']) ;
    if (isset($params[0])) {
        $controler = ucfirst(strtolower($params[0])) ;
        $controler = file_exists('controlers/'.$controler.'Controler.php') ? $controler.'Controler' : "ErrorControler" ;
        require_once('Controlers/'.$controler.'.php') ;
        $controler = new $controler() ;
        $action = method_exists($controler,$params[1]) ? $params[1] : "error" ;
        $controler->$action() ;
    }
    }

?>
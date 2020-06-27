<?php 
    //define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
    //define('ROOT','');
    define('ROOT','../');

    require_once('models/Manager.php');
    require_once('models/InterfaceModel.php');
    require_once('models/Personnes.php');
    require_once('controlers/controlerParrent.php') ;


    // save etudiant ou chambre
    if (isset($_POST['saveEtu']) || isset($_POST['saveCham']))
    {
        $params = explode('/',$_GET['url']) ;
        $controler = getControler($params[0]) ;
        $controler->enregistre($_POST) ;
    }

    if ($_GET['url']) 
    {
        $params = explode('/',$_GET['url']) ;
        if (isset($params[0])) 
        {
            $controler =getControler($params[0]) ;
            $action = method_exists($controler,$params[1]) ? $params[1] : "error" ;
            $controler->$action() ;
        }
    }


    function getControler($pos)
    {
        $controler = ucfirst(strtolower($pos)) ;
        $controler = file_exists('controlers/'.$controler.'Controler.php') ? $controler.'Controler' : "ErrorControler" ;
        require_once('controlers/'.$controler.'.php') ;
        return new $controler() ;
    }

?>
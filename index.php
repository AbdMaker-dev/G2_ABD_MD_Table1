<?php 
    define('ROOT', 'http://localhost/git/G2_ABD_MD_Table1/');
    //define('ROOT','');
    //define('ROOT','../../');

    require_once('models/Manager.php');
    require_once('models/InterfaceModel.php');
    require_once('models/Personnes.php');
    require_once('controlers/controlerParrent.php') ;

    // save etudiant ou chambre
    if (isset($_POST['saveEtu']) || isset($_POST['saveCham']) || isset($_POST['saveModifEtu']) || isset($_POST['rech']))
    {
        $_POST['types'] = isset($_POST['types']) ? intval($_POST['types']) : "";
        $params = explode('/',$_GET['url']) ;
        $controler = getControler($params[0]) ;
        if (isset($_POST['saveModifEtu']) && isset($params[2])) 
        {
            $controler->saveModification($params[2],$_POST) ;    
        }else if(isset($_POST['rech']))
        {
            $controler->recheche($_POST['recherche'],$_POST['type']);
        }
        else
        {
            $controler->enregistre($_POST) ;
        }
    }
    
    if (isset($_GET['url'])) 
    {
        $params = explode('/',$_GET['url']) ;
        if (isset($params[0])) 
        {
            $controler =getControler($params[0]) ;
            $action = method_exists($controler,$params[1]) ? $params[1] : "error" ;
            if (isset($params[2]))
            {
                $controler->$action($params[2]) ;    
            }else
            {
                 $controler->$action() ;
            }
        }
    }else
    {
        $controler = getControler("admin") ;
        $controler->etudiants();
    }

    function getControler($pos)
    {
        $controler = ucfirst(strtolower($pos)) ;
        $controler = file_exists('controlers/'.$controler.'Controler.php') ? $controler.'Controler' : "ErrorControler" ;
        require_once('controlers/'.$controler.'.php') ;
        return new $controler() ;
    }
?>
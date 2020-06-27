<?php 

    abstract class controlerParrent
    {
        protected $className ;

        public function setclassName ($class)
        {
            $this->className = $class ;
        }
        public function error()
        {
            echo 'Error Page 404' ;
        }


        public function render(string $tamplate, array $datas = [])
        {
         extract($datas);
         // On démarre le buffer de sortie
         ob_start();
         // On génère la vue
         require_once('views/'.$tamplate.'.php');
         // On stocke le contenu dans $content
         $contues = ob_get_clean();
         // On fabrique le "template"
         require_once('views/layouts/default.php');
      }

      public function loadModel($mod,$obj=[])
      {
          require_once("models/".$mod.".php");
          if (count($obj)>0) {
              $this->model = new $mod($obj) ;
          }else{
              $this->model = new $mod() ;
          }
      }
    }


?>
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


        public function render(string $tamplate, array $data = [])
        {
         extract($data);
         // On démarre le buffer de sortie
         ob_start();
         // On génère la vue
         require_once(ROOT.'views/'.$tamplate.'.php');
         // On stocke le contenu dans $content
         $contues = ob_get_clean();
         // On fabrique le "template"
         require_once(ROOT.'views/layouts/default.php');
      }


        public function loadModel(string $model)
         {
            require_once(ROOT.'models/'.$model.'.php');
            $this->model = new $model() ;
         }
    }


?>
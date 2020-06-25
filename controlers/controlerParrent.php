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
    }


?>
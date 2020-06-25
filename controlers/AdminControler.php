<?php 

    class AdminControler extends controlerParrent
    {
        
        public function enregistre($name)
        {
            echo $this->className .'<br>';
            echo 'enregistrement de ' . $name ;
        }

        public function etudiants()
        {
            echo 'liste etudiants' ;
        }

        public function chambres()
        {
            echo 'liste chambres' ;
        }
    }


?>
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
           $this->render('tabEtudiant');
        }

        public function chambres()
        {
            $this->render('tabChambre');
        }
    }


?>
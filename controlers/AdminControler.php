<?php 

    class AdminControler extends controlerParrent
    {
        
        public function enregistre($objet)
        {
            
            if ($objet['typeEtu']=='b') {
                $this->className ='EtudiantsBoursier';
            }else{
                $this->className ='EtudiantsNonBoursier';
            }
           // 0 inclusiom du medel
           // 1 cree un objet etudiant
           $this->loadModel($this->className,$objet) ;
           // 2 appel methode add()
           var_dump($this->model);
           $this->model->add() ;
           
        }

        public function etudiants()
        {
            $this->loadModel("EtudiantsBoursier") ;
            $datas =  $this->model->getAll();
            $this->render('tabEtudiant',compact('datas'));
        }

        public function chambres()
        {
            $this->render('tabChambre');
        }
    }


?>
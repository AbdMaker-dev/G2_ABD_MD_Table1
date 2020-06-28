<?php 

    class AdminControler extends controlerParrent
    {
        
        public function enregistre($objet)
        {
            if(isset($objet['typeEtu'])){
                if ($objet['typeEtu']=='b') {
                    $this->className ='EtudiantsBoursier';
                }else{
                    $this->className ='EtudiantsNonBoursier';
                }
           }else{
                $this->className = "Chambres" ;
            }
            
           // 0 inclusiom du medel
           // 1 cree un objet etudiant
           $this->loadModel($this->className,$objet) ;
           // 2 appel methode add()
           var_dump($this->model);
           $this->model->add() ;
           
        }

        public function saveModification($id,$objet)
        {
            var_dump($id) ;
            if(isset($objet['typeEtu'])){
                if ($objet['typeEtu']=='b') {
                    $this->className ='EtudiantsBoursier';
                }else{
                    $this->className ='EtudiantsNonBoursier';
                }
           }else{
                $this->className = "Chambres" ;
            }
            var_dump($this->className);
           // 0 inclusiom du medel
           // 1 cree un objet etudiant
           $this->loadModel($this->className,$objet) ;
           var_dump($this->model) ;
           // 2 appel methode add() 
           var_dump($this->model->update($id,$objet)) ;
        }
        public function etudiants()
        {
            $this->loadModel("EtudiantsBoursier") ;
            $datas =  $this->model->getAll();
            $this->render('tabEtudiant',compact('datas'));
        }

        public function modifier($id)
        {
            $this->loadModel("EtudiantsBoursier") ;
            $datas =  $this->model->getById($id);
            $this->render('modifierEtu',compact('datas'));
        }
        public function chambres()
        {
            $this->loadModel("Chambres") ;
            $datas =  $this->model->getAll();
            $this->render('tabChambre',compact('datas'));
        }

        public function recheche($value,$type)
        {
          var_dump($value);
          var_dump($type);
        }
    }


?>
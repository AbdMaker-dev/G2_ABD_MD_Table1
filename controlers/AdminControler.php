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
            if(isset($objet['typeEtu'])){
                if ($objet['typeEtu']=='b')
                {
                    $this->className ='EtudiantsBoursier';
                }else
                {
                    $this->className ='EtudiantsNonBoursier';
                }
           }else
           {
                $this->className = "Chambres" ;
            }
           // 0 inclusiom du medel
           // 1 cree un objet etudiant
           $this->loadModel($this->className,$objet) ;
           // 2 appel methode add() 
           var_dump($this->model->update($id,$objet)) ;
        }
        public function etudiants($objet=[])
        {
            $this->loadModel("EtudiantsBoursier") ;
            
            if (count($objet)>0) 
            {
                $datas = $this->model->getByType($objet['value'],$objet['type']) ;
            }else
            {
                $datas =  $this->model->getAll();
            }
            $this->render('tabEtudiant',compact('datas'));
        }

        public function modifier($id)
        {
            $this->loadModel("EtudiantsBoursier") ;
            $datas =  $this->model->getById($id);
            $this->render('modifierEtu',compact('datas'));
        }
        
        public function supprimer($id)
        {
            $this->loadModel("EtudiantsBoursier") ;
            $datas =  $this->model->delete($id);
            $this->etudiants();
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
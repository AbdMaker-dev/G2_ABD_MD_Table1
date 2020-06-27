<?php
   class EtudiantsBoursier extends Personnes 
   {
        public function __construct($datas=[])
        {
            $this->tabName = 'etudiants' ;
            if (count($datas)>0) 
            {
                parent::__construct($datas) ;
                $this->bourse = $datas['bourse'] ;
             }
        }



   }
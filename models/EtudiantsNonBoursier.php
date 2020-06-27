<?php
   class EtudiantsNonBoursier extends Personnes
   {
        public function __construct($datas=[])
        {
            $this->tabName = 'etudiants' ;
            if (count($datas)>0) {
                parent::__construct($datas) ;
                $this->bourse = 0 ;
            }
        }
   }
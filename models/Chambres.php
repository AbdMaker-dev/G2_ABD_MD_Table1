<?php
   class Chambres extends Maneger implements InterfaceModel
   {
        private $id;
        private $numChambre;
        private $numBatiment;
        private $types;
        public function __construct($datas=[])
        
        {
            $this->tabName = 'chambres' ;
            if (count($datas)>0) 
            {
                $this->id  = isset($datas['id'])? $datas['id']: 0 ;
                $this->numChambre = $datas['numChambre'] ;
                $this->numBatiment = $datas['numBatiment'] ;
                $this->types = $datas['types'] ;

             }
        }
        public function add()
        {
          $this->getConnection() ;
            $sql = "INSERT INTO " .$this->tabName . " VALUES(null,:numChambre,:numBatiment,:types)" ;
            $query = $this->connexion->prepare($sql) ;
            $query->bindParam(':numChambre ',$this->numChambre) ;
            $query->bindParam(':numBatiment',$this->numBatiment) ;
            $query->bindParam(':types',$this->types) ;
           return  $query->execute();    

        }
        public function getAll()
        {
          $this->getConnection() ;
          $sql = "SELECT * FROM " .$this->tabName ;
          $query = $this->connexion->prepare($sql) ;
          $query->execute();
         return $query->fetchAll() ;
        }



   }
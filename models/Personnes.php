<?php
    class Personnes extends Manager implements InterfaceModel
    {
        protected $id ;
        protected $nom ;
        protected $prenom ;
        protected $matricule ;
        protected $bourse ;
        protected $adresse ;
        protected $num_log ;
        protected $tel ;
        protected $email ;
        protected $dateNaiss ;

        public function __construct($datas=[])
        {
            if (count($datas)>0) 
            {
                $this->id = isset($datas['id']) ? $datas['id'] : 0 ;
                $this->nom = $datas['nom'] ;
                $this->prenom = $datas['prenom'] ;
                $this->tel = $datas['tel'] ;
                $this->email = $datas['email'] ;
                $this->dateNaiss = $datas['dateNaiss'] ;
                $this->adresse = isset($datas['adresse']) && $datas['adresse'] != ''  ? $datas['adresse'] : "NEAN" ;
                $this->num_log = isset($datas['num_log']) && $datas['num_log'] != '' ? $datas['num_log'] : "NEAN" ;
                $this->matricule =  $this->generMatricule() ;
            }
        }

        public function add()
        {
            $this->getConnection() ;
            $sql = "INSERT INTO " .$this->tabName . " VALUES(null,:nom,:prenom,:matricule,:bourse,:adresse,:num_log,:tel,:email,:dateNaiss)" ;
            $query = $this->connexion->prepare($sql) ;
            $query->bindParam(':nom',$this->nom) ;
            $query->bindParam(':prenom',$this->prenom) ;
            $query->bindParam(':matricule',$this->matricule) ;
            $query->bindParam(':bourse',$this->bourse) ;
            $query->bindParam(':adresse',$this->adresse) ;
            $query->bindParam(':num_log',$this->num_log) ;
            $query->bindParam(':tel',$this->tel) ;
            $query->bindParam(':email',$this->email) ;
            $query->bindParam(':dateNaiss',$this->dateNaiss) ;
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

        public function getById($id)
        {
            $this->getConnection() ;
            $sql = "SELECT * FROM " .$this->tabName . " WHERE id = '".$id."'";
            $query = $this->connexion->prepare($sql) ;
            $query->execute();
            return $query->fetch() ;
        }

        public function update($id,$objet)
        {
            var_dump(intval($id)) ;
            $this->getConnection() ;
            $sql = "UPDATE " . $this->tabName . " SET nom=:nom,prenom=:prenom,matricule=:matricule,bourse=:bourse,adresse=:adresse,num_log=:num_log,tel=:tel,email=:email,dateNaiss=:dateNaiss WHERE id =:id" ;
            $query = $this->connexion->prepare($sql) ;
            $query->bindParam(':id',intval($id)) ;
            $query->bindParam(':nom',$objet['nom']) ;
            $query->bindParam(':prenom',$objet['prenom']) ;
            $query->bindParam(':matricule',$objet['matricule']) ;
            $query->bindParam(':bourse',intval($objet['bourse'])) ;
            $query->bindParam(':adresse',$objet['adresse']) ;
            $query->bindParam(':num_log',$objet['num_log']) ;
            $query->bindParam(':tel',$objet['tel']) ;
            $query->bindParam(':email',$objet['email']) ;
            $query->bindParam(':dateNaiss',$objet['dateNaiss']) ;
            
            return  $query->execute();
        }

        //  les fonction pour genere le matricule
       public function generMatricule()
       {
           $anne = date('Y');
           $CC = $this->nom[0].''.$this->nom[1] ;
           $LL = $this->prenom[(strlen($this->prenom)-1)].$this->prenom[(strlen($this->prenom)-2)] ;
           $seri =$this->Genere_code(4) ;
           return $anne . ' ' . $CC . ' ' . $LL . ' ' . $seri;
       }

       public function Genere_code($size)
       {
           // Initialisation des caractères utilisables
           $characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
           $code = null;
           for($i=0;$i<$size;$i++)
           {
               $code .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
           }
           return $code;
       }
       public function delete($id)
       {
        $this->getConnection() ;
        $sql = "DELETE  FROM " .$this->tabName . " WHERE id = '".$id."'";
        $query = $this->connexion->prepare($sql) ;
        return $query->execute();
        

       }

    }
    


<?php 
   
   class Manager 
   {
           // Connexion à la base de données
    private $host = "localhost";
    private $db_name = "G2_ABD_MD_Table1";
    private $username = "root";
    private $password = "";
    
    protected $connexion;
    protected $tabName ;
    
    // Methode pour getter pour la connexion
    public function getConnection(){
        $this->connexion = null;
        try{
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->connexion->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }   

   
}
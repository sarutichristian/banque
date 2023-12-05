<?php
class compte{
    // private $numcompte;
    private $nomcompte;
    private $prenomcompte;
    private $nom_famillecompte;
    private $adressecompte;
    private $datenaissance;
    private $villecompte;
    private $numtelcompte;
    private $emailcompte;

    
    public function __construct($nomcompte,$prenomcompte,$nom_famillecompte,$adressecompte,$datenaissance,$numtelcompte,$villecompte,$emailcompte)
    {
        // $this->numcompte = $numcompte;
        $this->nomcompte = $nomcompte;
        $this->prenomcompte = $prenomcompte;
        $this->nom_famillecompte = $nom_famillecompte;
        $this->adressecompte = $adressecompte;
        $this->datenaissance = $datenaissance;
        $this->villecompte = $villecompte;
        $this->numtelcompte = $numtelcompte;
        $this->emailcompte = $emailcompte;
    }
    public function creerCompte()
    {
        global $db;
        $result = false;

        // $numcompte = $this->numcompte;
        $nomcompte = $this->nomcompte;
        $prenomcompte = $this->prenomcompte;
        $Nom_famillecompte = $this->nom_famillecompte;
        $Adressecompte = $this->adressecompte;
        $villecompte = $this->villecompte;
        $Numtelcompte = $this->numtelcompte;
        $Datenaissance = $this->datenaissance;
        $emailcompte = $this->emailcompte;

        $requete = "INSERT INTO compte (nomcompte, prenomcompte, Nom_famillecompte, Adressecompte, villecompte, Numtelcompte, Datenaissance, emailcompte) VALUES (:nomcompte, :prenomcompte, :Nom_famillecompte, :Adressecompte, :villecompte, :Numtelcompte, :Datenaissance, :emailcompte)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute( 
         [
        // ':numcompte' => $numcompte,
        ':nomcompte' => $nomcompte,
        ':prenomcompte' => $prenomcompte,
        ':Nom_famillecompte' => $Nom_famillecompte,
        ':Adressecompte' => $Adressecompte,
        ':villecompte' => $villecompte,
        ':Numtelcompte' => $Numtelcompte,
        ':Datenaissance' => $Datenaissance,
        ':emailcompte' => $emailcompte
    ]
    );

          
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
     public static function getcompte(){
        global $db;
        $requete = 'SELECT * FROM compte WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $comptes = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $compte = new compte ($data['nomcompte'],$data['prenomcompte'],$data['nom_famillecompte'],$data['adressecompte'],$data['villecompte'],$data['numTelcompte'],$data['dateNaissance'],$data['emailcompte']);
                array_push($comptes,$compte);
            }
            return $comptes;
        }
        else return [];
    }

    public function getIdCompte(){
      global $db;
      $requete = 'SELECT idCompte FROM compte WHERE idcompte = ?';
      $statment = $db->prepare($requete);
      $execute = $statment->execute(array($this->getcompte()));


      if($execute){
        if($data = $statment ->fetch()){
          $idcompte = $data ['idcompte'];
          return $idcompte;
        }else return null;
        
      }else return null;

    }
    

    /**
     * Get the value of nomcompte
     */ 
    public function getNomcompte()
    {
        return $this->nomcompte;
    }

    /**
     * Set the value of nomcompte
     *
     * @return  self
     */ 
    public function setNomcompte($nomcompte)
    {
        $this->nomcompte = $nomcompte;

        return $this;
    }

    /**
     * Get the value of prenomcompte
     */ 
    public function getPrenomcompte()
    {
        return $this->prenomcompte;
    }

    /**
     * Set the value of prenomcompte
     *
     * @return  self
     */ 
    public function setPrenomcompte($prenomcompte)
    {
        $this->prenomcompte = $prenomcompte;

        return $this;
    }

    /**
     * Get the value of Nom_familleCompte
     */ 
    public function getNom_familleCompte()
    {
        return $this->nom_famillecompte;
    }

    /**
     * Set the value of Nom_familleCompte
     *
     * @return  self
     */ 
    public function setNom_familleCompte($nom_familleCompte)
    {
        $this->nom_familleCompte = $nom_familleCompte;

        return $this;
    }

    /**
     * Get the value of AdresseCompte
     */ 
    public function getAdresseCompte()
    {
        return $this->adressecompte;
    }

    /**
     * Set the value of AdresseCompte
     *
     * @return  self
     */ 
    public function setAdresseCompte($adresseCompte)
    {
        $this->adresseCompte = $adresseCompte;

        return $this;
    }

    
    /**
     * Get the value of villecompte
     */ 
    public function getVillecompte()
    {
        return $this->villecompte;
    }

    /**
     * Set the value of villecompte
     *
     * @return  self
     */ 
    public function setVillecompte($villecompte)
    {
        $this->villecompte = $villecompte;

        return $this;
    }

    /**
     * Get the value of NumtelCompte
     */ 
    public function getNumtelCompte()
    {
        return $this->numtelcompte;
    }

    /**
     * Set the value of NumtelCompte
     *
     * @return  self
     */ 
    public function setNumtelCompte($numtelCompte)
    {
        $this->numtelCompte = $numtelCompte;

        return $this;
    }

    /**
     * Get the value of DateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set the value of DateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

   

    /**
     * Get the value of emailcompte
     */ 
    public function getEmailcompte()
    {
        return $this->emailcompte;
    }

    /**
     * Set the value of emailcompte
     *
     * @return  self
     */ 
    public function setEmailcompte($emailcompte)
    {
        $this->emailcompte = $emailcompte;

        return $this;
    }
}
?>





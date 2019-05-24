<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PDONesti
 *
 * @author Elrick
 */
class PDONesti {
    private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=Nesti';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoNesti = null;
                
        private function __construct()
	{
    		PdoNesti::$monPdo = new PDO(PdoNesti::$serveur.';'.PdoNesti::$bdd, PdoNesti::$user, PdoNesti::$mdp); 
			PdoNesti::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoNesti::$monPdo = null;
	}
        
        public  static function getPdoNesti()
	{
		if(PdoNesti::$monPdoNesti == null)
		{
			PdoNesti::$monPdoNesti= new PdoNesti();
		}
		return PdoNesti::$monPdoNesti;  
	}
        public function createUser($prenom, $nom, $dateDeNaissance, $adresse, $mail, $login, $mdp, $ville, $codePostal, $droit){ 
            
            $req = "INSERT INTO `utilisateur` (`idUser`, `nomUser`, `prenom`, `ddnUser`, `adresse`, `mail`, `Droits_idDroits`, `login`, `mdp`, `CodePostal_Ville_idVille`, `CodePostal_CodePostal_cp`) "
                    . "VALUES (NULL, '$nom', '$prenom', '$dateDeNaissance', '$adresse', '$mail', '$droit', '$login', '$mdp', '$ville', '$codePostal')";
            $res = PDONesti::$monPdo->query($req);
            $lesLignes = $res->fetchAll();
            return $lesLignes;
            
        } // Create Les utilisateurs
        
        public function deleteUser($login, $mdp){ 
            $idUser = "SELECT idUser from utilisateur where login = '$login' AND mdp = '$mdp'";
            if ($idUser != ""){
                $req = "DELETE FROM utilisateur where utilisateur.idUser = '$idUser'";
                $res = PDONesti::$monPdo->query($req);
                var_dump("Retour après suppression = ".$res);
                $lesLignes = $res->fetchAll();
                return $lesLignes;
            }
            else{
                return "L'utilisateur n'a pas été trouvé, veuillez réessayer.";   
            }
        } // Supprime un utilisateur
        
        public function getLesUtilisateurs() {
		$req = "select * from utilisateur";
		$res = PdoNesti::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}// Read les utilisateurs
    
        public function getUnUtilisateur($idUser){
            $req = "SELECT * from utilisateur where idUser = '$idUser";
            $res = PDONesti::$monPdo->query($req);
            $lesLignes = $res->fetchAll();
            return $lesLignes;
        } // Read un utilisateur
        
        public function updateUser($prenom, $nom, $dateDeNaissance, $adresse, $mail, $login, $ville, $codePostal,$mdp){
            "UPDATE `utilisateur` "
            . "SET `nomUser` = '$nom', `prenom` = '$prenom', `adresse` = '$adresse', `mail` = '$mail', ddnUser = '$dateDeNaissance', CodePostal_Ville_idVille = '$ville', CodePostal_CodePostal_cp = '$codePostal'"
                    . "WHERE utilisateur.login = '$login' AND utilisateur.mdp = '$mdp"; // A revoir au niveau des villes.
            
        }
    
    public function getLesRecettes(){
        $req = "SELECT theme.descript, nom, description FROM recette JOIN theme ON recette.Theme_idTheme = idTheme";
	$res = PdoNesti::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
    }
    public function getUneRecette(){
        
    }
}

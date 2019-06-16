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
        
        public static function getPdoNesti()
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
    public function getLesRecettesSelonTheme($idCategorie)
	{
	    $req="select idRec, nom, description from recette join theme on recette.Theme_idTheme = theme.idTheme WHERE theme.descript = '$idCategorie'";
            $res = PdoNesti::$monPdo->query($req);
            $lesLignes = $res->fetchAll();
            return $lesLignes; 
	}
        
    public function getLesThemes(){
        $req = "SELECT descript FROM theme";
	$res = PdoNesti::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
    }
    public function getUneRecette($var){
        $req = "SELECT idRec, nom, description FROM recette WHERE idRec = '$var'";
	$res = PdoNesti::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
    }
    public function verifPassword($login, $mdp){
        $query = "SELECT idUser, nomUser, mail

            FROM utilisateur WHERE login = '$login' AND mdp ='$mdp'";

        $res = PdoNesti::$monPdo->query($query);

        $data = $res->fetchColumn();

        return $data;

    }
    public function verifPseudo($pseudo){
    $query = "SELECT COUNT(*) AS nbr FROM utilisateur WHERE login = ''";
    $res = PdoNesti::$monPdo->query($query);
    $pseudo_free = ($res->fetchColumn() == 0) ? 1 : 0;
    return $pseudo_free;
    }
    public function créeUsager(){
        
    }
    }

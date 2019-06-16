<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
<?php
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoLafleur.inc.php");
include("vues/v_entete.php") ;
include("vues/v_bandeau.php") ;
include("PDO/PDONesti.php");

if(!isset($_REQUEST['uc'])){
$uc = 'accueil';}
else{
$uc = $_REQUEST['uc'];}

$pdo = PDONesti::getPdoNesti();	 
switch($uc)
{
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	case 'voirProduits' :
		{include("controleurs/c_voirRecettes.php");break;}
	case 'gererPanier' :
		{ include("controleurs/c_gestionPanier.php");break; }
	case 'administrer' :
	  { include("controleurs/c_gestionProduits.php");break;  }
        case 'espaceClient':
            include("controleurs/c_userSpace.php");
}
include("vues/v_pied.php") ;
?>

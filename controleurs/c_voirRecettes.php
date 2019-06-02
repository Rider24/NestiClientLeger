

<?php
$action = $_REQUEST['action'];
switch($action)
{
	case 'voirCategories':
	{
  		$lesThemes = $pdo->getLesThemes();
		include("vues/v_themes.php");
  		break;
	}
	case 'voirProduits' :
	{
		$lesThemes = $pdo->getLesThemes();
		include("vues/v_themes.php");
  		$categorie = $_REQUEST['categorie'];
		$lesRecettes = $pdo->getLesRecettesSelonTheme($categorie);
		include("vues/v_lesRecettes.php");
		break;
	}
	case 'ajouterAuPanier' :
	{
		$idProduit=$_REQUEST['produit'];
		$categorie = $_REQUEST['categorie'];
		$ok = ajouterAuPanier($idProduit);
		if(!$ok)
		{
			$message = "Cet article est déjà dans le panier !!";
			include("vues/v_message.php");
		}
		$lesCategories = $pdo->getLesCategories();
		include("vues/v_themes.php");
  		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_uneRecette.php");
		break;
	}
        case 'voirRecette' :
            $lesThemes = $pdo->getLesThemes();
            include("vues/v_themes.php");
            $categorie = $_REQUEST['categorie'];
            $produit = $_REQUEST['produit'];
            $uneRecette = $pdo->getUneRecette($produit);
            include("vues/v_uneRecette.php");
}
?>


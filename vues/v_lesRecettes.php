<div id="produits">
<?php
	
foreach( $lesRecettes as $uneRecette) 
{
	$nom = $uneRecette['nom'];
        $id = $uneRecette['idRec'];
	?>	
	<ul>
            <!-- Ajouter ici l'image de la recette -->
                        <li><a href=index.php?uc=voirProduits&action=voirRecette&categorie=<?php echo $categorie?>&produit=<?php echo $id?>><?php echo $nom ?></a></li>
			
	</ul>
			
			
			
<?php			
}
?>
</div>

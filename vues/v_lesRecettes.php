<br><br>
<div class="container">
    <div class="row">
<?php
	
foreach( $lesRecettes as $uneRecette) 
{
	$nom = $uneRecette['nom'];
        $id = $uneRecette['idRec'];
	?>	
        <div class="col-3">
            <!-- Ajouter ici l'image de la recette -->
            <a href=index.php?uc=voirProduits&action=voirRecette&categorie=<?php echo $categorie?>&produit=<?php echo $id?>>
                <img src="images/Recettes/<?php echo $nom ?>.jpg" width="160" height="100" alt="<?php echo $nom ?>"/>
                <br>
                <?php echo $nom ?>
            </a>
        </div>		
	
			
			
			
<?php			
}
?>
    </div>
</div>

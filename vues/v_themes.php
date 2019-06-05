<div class="container">
    <div id="produits" class="col-12">Selection de Recettes !</div><br>
        <span class="col-1"></span>
            <div class="row">
      
<?php
$compteur = 0;
foreach( $lesThemes as $unTheme) 
{
	$descriptTheme = $unTheme['descript'];
	?>

        <span id="produits" class="col-sm-">
        
		<a href=index.php?uc=voirProduits&categorie=<?php echo $descriptTheme ?>&action=voirProduits>
                    <img src="images/Categories/<?php echo $descriptTheme ?>.jpg" width="160" height="100" alt="<?php echo $descriptTheme ?>"/>
                    <br>
                    <span><?php echo $descriptTheme;?></span>
                </a>
        
    </span>
<span class="col-1"></span>
      
      
<?php /* Cette page affiche les themes après un clic sur "voir les recettes" il faut faire la mise en forme avec bootstrap ici */
}
?> 
    <div class="col-12">
        -----------------------------------------------------------------------------------------------------------------------------------------------
        -----------------------------------------------------------------------------------------------------------------------------------------------
    </div>
  </div>
</div>


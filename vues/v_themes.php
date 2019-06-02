<ul id="categories">
<?php
foreach( $lesThemes as $unTheme) 
{
	$descriptTheme = $unTheme['descript'];
	?>
	<li>
            

		<a href=index.php?uc=voirProduits&categorie=<?php echo $descriptTheme ?>&action=voirProduits>
                    <img src="images/Categories/<?php echo $descriptTheme ?>.jpg" width="120" height="80" alt="<?php echo $descriptTheme ?>"/>
                    <?php echo $descriptTheme?>
                </a>
	</li>
<?php /* Cette page affiche les themes après un clic sur "voir les recettes" il faut faire la mise en forme avec bootstrap ici */
}
?> 
</ul>


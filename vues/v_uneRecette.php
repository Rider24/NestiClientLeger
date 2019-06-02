<div id="recette"  style="margin-left : 250px;">
<?php
	foreach ($uneRecette as $laRecette){
            
	$nom = $laRecette['nom'];
        $description = $laRecette['description'];
        $id = $laRecette['idRec'];
        
	?>	
    <img src="images/Recettes/<?php echo $nom ?>.jpg" width="368" height="245" alt="<?php echo $nom ?>"/>
 
    <div>
    	Vous consultew la wrecette <?php echo $nom ?>	
    </div><br>
    <div>
        <?php echo $description ?>
    </div>
<?php			
}
?>		
</div>

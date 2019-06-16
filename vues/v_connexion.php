<br><br><br>
<form method="post" action="index.php?uc=espaceClient&co=connexion" style="margin-left: 40%; width: 500px;">
    <div style="color: red;"><?php 
  if(isset($message)){
    echo $message;} ?></div>
    <div class="form-group">
    <label for="formGroupExampleInput">Login :</label>
    <input name="champLogin" type="text" class="form-control" id="champLogin" placeholder="Tapez votre identifiant ici">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mot de passe :</label>
    <input name="champMdp" type="text" class="form-control" id="champMdp" placeholder="Tapez votre mot de passe ici">
  </div>
    <div class="form-group">
        <input type="submit" value="connexion" class="btn btn-primary">
        <button action="button" class="btn btn-primary"><a href="index.php?uc=espaceClient&co=reset" style="color: white;">Mot de passe oublié</a></button>
  </div>
    
</form>

<?php


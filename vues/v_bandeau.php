<!--  Menu haut-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php?uc=accueil"><img src="images/nestiLogo.png"	width="170" height="120" alt="Nesti" title="Nesti"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?uc=accueil">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?uc=voirProduits&action=voirCategories">Liste des recettes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Connexion
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?uc=espaceClient">Se connecter</a>
          <a class="dropdown-item" href="index.php?uc=espaceClient&co=creation">S'inscrire</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input style="margin-left: -10px;"class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

<!--<ul id="menu">

	<li><a href="index.php?uc=gererPanier&action=voirPanier"> Voir son panier </a></li>
	<li><a href="index.php?uc=administrer"> Administrer </a></li>
</ul>-->

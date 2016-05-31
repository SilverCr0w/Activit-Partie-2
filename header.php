
	<!-- L'EN-TETE-->


	<header>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span class="color_title">Thury-Harcourt</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="color"><i class="fa fa-home "></i> Accueil</span></a></li>
        <li><a href="articles.php"><span class="color">Actualités</span></a></li>
        <li><a href="plus-infos.php"><span class="color">Plus d'infos</span></a></li>
		<li><a href="activite_mois.php"><span class="color">Activités du mois</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      	<form class="navbar-form navbar-left" role="search" action="rechercher.php" method="GET">
        <div class="form-group">
          <input type="search" name="q" size="20" placeholder="Rechercher" id="texte" class=" form-control">
        </div>
        <button type="submit" id="recherche" class="btn btn-default"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
      </form>
        <li><a href="formulaire_de_contact.php"><span class="color"><i class="fa fa-envelope"></i> Contact</a></span></li>
        <li><?php if (isset($_SESSION['id']))
			{
  				$requser = $db->prepare("SELECT grade FROM membres WHERE id = ?");
 				$requser->execute(array($_SESSION['id']));
  				$user = $_SESSION['grade']; 
  		?>
      			<a   href="profil.php?id=<?= $_SESSION['id'] ?>"><span class="color"><i class="fa fa-user" aria-hidden="true"></i> Connecté</span></a>

		<?php

			}
				else{?>

						<a  href="connexion.php"><span class="color"><i class="fa fa-user" aria-hidden="true"></i> Connexion</span></a>
					<?php
					} ?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	</header>
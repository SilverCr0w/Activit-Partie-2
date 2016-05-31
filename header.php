
	<!-- L'EN-TETE-->
	<style type="text/css">
	@font-face {
    font-family: 'caviar_dreamsregular';
    src: url('CaviarDreams-webfont.eot');
    src: url('CaviarDreams-webfont.eot?#iefix') format('embedded-opentype'),
         url('CaviarDreams-webfont.woff') format('woff'),
         url('CaviarDreams-webfont.ttf') format('truetype'),
         url('CaviarDreams-webfont.svg#caviar_dreamsregular') format('svg');
    font-weight: normal;
    font-style: normal;

	}	

	@font-face {
    font-family: 'black_jackregular';
    src: url('blackjack-webfont.eot');
    src: url('blackjack-webfont.eot?#iefix') format('embedded-opentype'),
         url('blackjack-webfont.woff2') format('woff2'),
         url('blackjack-webfont.woff') format('woff'),
         url('blackjack-webfont.ttf') format('truetype'),
         url('blackjack-webfont.svg#black_jackregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
.navbar-header button
{
	margin-top: 30px;
}
.navbar
{
	background-color: rgb(53,53,53);
}
.navbar-brand
{
	font-family: 'black_jackregular';
	font-size: 2.5em; 
	margin: 20px;

}
.color_title
{
	color: rgb(228,181,112);	
}
.nav li a
{
	font-family: 'caviar_dreamsregular';
	font-size: 1.5em;
	
}

.nav li:hover
{
	background-color: rgb(228,181,112);
	margin-top: -20px;
	margin-bottom:-20px; 
	padding-top: 20px;
	padding-bottom: 26px;
	transition: all 500ms linear; -webkit-transition: all 300ms linear;
}
.color
{
	color: white;
}

.nav 
{
	margin: 20px;
}

form .btn, form .form-control
{
	background-color: rgb(53,53,53);
	border:none;
}

.btn i, form .form-control
{
	color: rgb(77,89,91);
	
}

form .form-control
{
	font-family: 'caviar_dreamsregular';
	font-size: 1.3em;
	
}


	</style>

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
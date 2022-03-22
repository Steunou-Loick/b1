<div class="LesLiens">
	<h3> les résidences </h3>
	<a href="index.php?page=accueil">Accueil
		<span>Bienvenue sur notre site qui vous présente les trois résidences</span>
	</a>
	<a href="index.php?page=Ampere">Ampere<img src="Photos/Ampere/Ampere-vue.jpg" alt="Ampere"></a>
	<a href="index.php?page=Fresnel">Fresnel<img src="Photos/Fresnel/Fresnel-vue.jpg" alt="Fresnel"></a>
	<a href="index.php?page=Coulomb">Coulomb<img src="Photos/Coulomb/Coulomb-vue.jpg" alt="Coulomb"></a>
	<a href="index.php?page=Coordonnees">Coordonnées</a>
	<a href="index.php?page=Prestations">Prestations</a>
	<?php
	if (!isset($_COOKIE["SessId"])) {
	?>
		<a href="index.php?page=connection">Connection</a>
		<a href="index.php?page=new_utilisateur">Créer un compte</a>
	<?php
	} else {
	?>
		<a href="index.php?page=mon_profil">Mon profil</a>
		<a href="index.php?page=deconnection" onclick="alert('Etes-vous sûr de vouloir vous déconnecter ?')">Se déconnecter</a>
	<?php
	}
	?>
</div>

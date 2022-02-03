<?php
	if(isset($_GET["page"])){
		$page = $_GET["page"];
	}
	else{
		$page = "accueil";
	}
	//echo $page;
?>
<html>
<head>
	<title>location appartement</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="FichierDeStyle.css">
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
</head>
<body>

<?php
	include("menu.php");
	// include("$page.php");
	// switch ($page)
	// {
	// 	case "acceuil":
	// 		include(acceuil.php);
	// 		break;
	// 	case "ampere":
	// 		include(Ampere.php);
	// 		break;
	// }

	$pages = ["accueil", "Ampere", "Fresnel", "Coulomb", "Prestations", "Coordonnees", "new_utilisateur", "connection_exec", "mon_profil"];
	if (in_array($page, $pages))
	{
		include("$page.php");
	}
	else
	{
		echo "page non autorisée";
	}
?>
</body>
</html>

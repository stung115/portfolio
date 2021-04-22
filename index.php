<?php

require "core/Autoloader.php";
Autoloader::register();

require "core/Functions.php";
require "core/Constants.php";
require "core/Session.php";

$session = new Session();

$bdd = connectBDD(HOSTNAME, DATABASE, USERNAME, PASSWORD);

if (!isset($_GET['p']) || $_GET['p'] == "") {
	$page = "controleur/accueil.controleur.php";
} else {
	if ($_GET['p'] == "portfolio-admin") {
		$page = "admin/connexion.php";
	} elseif ($_GET['p'] == "portfolio-admin/projets") {
		$page = "admin/projets.php";
	} elseif ($_GET['p'] == "portfolio-admin/deconnexion") {
		$page = "admin/deconnexion.php";
	} elseif (file_exists("controleur/".$_GET['p'].".controleur.php")) {
		$page = "controleur/".$_GET['p'].".controleur.php";
	} else {
		$page = "controleur/404.controleur.php";
	}
}

ob_start();
	require $page;
	$contents = ob_get_contents();
ob_get_clean();

require "site.php";

?>
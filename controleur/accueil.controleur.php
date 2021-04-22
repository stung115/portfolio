<?php

require_once('modele/accueil.modele.php');

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$message = $_POST['message'];

	if ($email != "" && $message != "" && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-z]{2,6}$#", $email)) {
		
		$header = "MIME-Version: 1.0\r\n";
        $header .= 'From: "http://localhost/Portfolio_tung"<rominage.115@gmail.comr>'."\n";
        $header .= 'Content-Type:text/html; charset="utf-8"'."\n";
        $header .= 'Content-Transfer-Encoding: 8bit';

        $message = '
        <!DOCTYPE html>
		<html>
		<body>
			<h3>Message de : '.$email.'</h3>
			<h4><u>Sujet du message</u> : '.$_POST['sujet'].'</h4>
			<blockquote>'.nl2br($_POST['message']).'</blockquote>
		</body>
		</html>
        ';

        mail("rominage.115@gmail.com", "Nouveau message !", $message, $header);

        header('Location: #');

	}
}

require_once('vue/accueil.php'); 

?>

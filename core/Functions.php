<?php

function connectBDD($hostname, $database, $username, $password) {
    try {
        $bdd = new PDO("mysql:host=".$hostname.";dbname=".$database.";charset=utf8","".$username."","".$password."");
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur de connexion au serveur MySQL : " . $e->getMessage());
    }
}

function setFlash($message, $type = "success") {
    $_SESSION['flash']['message'] = $message;
	$_SESSION['flash']['type'] = $type;
}
	    
function getFlash() {
    if (isset($_SESSION['flash'])) {
        extract($_SESSION['flash']);
        unset($_SESSION['flash']);
        return "
        <div class='alert alert-$type alert-dismissible fade show' role='alert'>
            <strong>$message</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        ";
    }
}

function auth($lvl) {
    if (isset($_SESSION['lvl']) && $_SESSION['lvl'] >= $lvl)
        return true;
    else
        header("Location: ../portfolio-admin");
}

?>
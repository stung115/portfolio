<?php

if (isset($_SESSION['id_u'])) {
	header('Location: portfolio-admin/projets');
}

if (isset($_POST['connexion'])) {
	$pseudo = $_POST['pseudo'];
	$mdp = sha1($_POST['mdp']);
	if ($pseudo != "" && $mdp != "") {
		$requete = $bdd->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND mdp = :mdp");
		$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
		$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
		$requete->execute();
		if ($resultat = $requete->fetch()) {
			if ($resultat['lvl'] == 0) {
				setFlash("Vous n'avez pas la permission d'accéder !", "warning");
			} else {
				$session->setVar('id_u', $resultat['id_u']);
				$session->setVar('pseudo', $resultat['pseudo']);
				$session->setVar('lvl', $resultat['lvl']);
				header('Location: portfolio-admin/projets');
			}
		} else {
			setFlash("Identifiants incorrect !", "danger");
		}
	} else {
		setFlash("Veuillez compléter tous les champs", "warning");
	}
}

?>

<div class="container" style="margin-top: 15rem !important;">
	<div class="row d-flex justify-content-center">
		<div class="col-auto">
			<div class="card bg-secondary">
				<div class="card-body">
					<div class="d-flex justify-content-center mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-circle text-light" viewBox="0 0 16 16">
		  					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
		  					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
					</div>
					<form method="post" action="">
						<div class="mb-3">
							<input type="text" name="pseudo" placeholder="Pseudo" class="form-control">
						</div>
						<div class="mb-3">
							<input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" name="connexion" class="btn btn-block btn-info">Connexion</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
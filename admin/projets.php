<?php auth(1);

if (isset($_POST['add-project'])) {
	$titre = $_POST['titre'];
	$description = $_POST['description'];
	$categories = $_POST['categories'];
	$lien_local = $_POST['lien_local'];
	$lien_git = $_POST['lien_git'];
	if ($titre != "" && $description != "" && $categories != "" && $lien_local != "" && $lien_git != "") {
		$insertion = $bdd->prepare("INSERT INTO projets (titre, description, id_cat, lien_local, lien_git) VALUES (:titre, :description, :id_cat, :lien_local, :lien_git)");
        $insertion->bindValue(':titre', $titre, PDO::PARAM_STR);
        $insertion->bindValue(':description', $description, PDO::PARAM_STR);
        $insertion->bindValue(':id_cat', $categories, PDO::PARAM_INT);
        $insertion->bindValue(':lien_local', $lien_local, PDO::PARAM_STR);
        $insertion->bindValue(':lien_git', $lien_git, PDO::PARAM_STR);
        $insertion->execute();
        setFlash("Insertion du projet réussi !");
	} else {
		setFlash("Veuillez compléter tous les champs !", "warning");
	}
}

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">
<link rel="stylesheet" type="text/css" href="../assets/css/style-1.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style-2.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style-3.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style-4.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style-5.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style-6.css">
<link rel="stylesheet" href="zoombox/zoombox.css">
<style type="text/css">
	body {
		background-image: url(../assets/img/fond.jpg); 
		background-position: center center; 
		background-repeat: no-repeat; 
		background-attachment: fixed; 
		background-size: cover;
	}
	@media only screen and (max-width: 767px) {
    	body {background-image: url(../assets/img/fond-mobile.png);}
	}
</style>

<div class="container" style="margin-top: 9rem !important;">
	<div class="row d-flex justify-content-center">
		<div class="col-auto">
			
			<div class="card bg-success">
				<div class="card-body">
					<h3 class="text-center text-light mt-4 mb-3">Bienvenue <?= $_SESSION['pseudo'] ?> !</h3>
				</div>
			</div>
			<div class="d-flex justify-content-center mt-4">
				<a href="deconnexion" class="btn btn-danger">Déconnexion</a>
			</div>
			<h3 class="text-center text-light mt-4 mb-3">Ajouter un Projet</h3>
			<form method="post" action="">
				<div class="mb-3">
					<input type="text" name="titre" placeholder="Titre du projet" class="form-control">
				</div>
				<div class="mb-3">
					<textarea name="description" placeholder="Description du projet" cols="50" rows="5"></textarea>
				</div>
				<div class="mb-3">
					<select name="categories" class="form-select form-control">
						<?php $categories = $bdd->query("SELECT * FROM categories");
						$categories = $categories->fetchAll();
						foreach($categories as $categorie) { ?>
							<option value="<?= $categorie['id_cat'] ?>"><?= $categorie['titre'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="mb-3">
					<input type="url" name="lien_local" placeholder="Lien local du projet" class="form-control">
				</div>
				<div class="mb-3">
					<input type="url" name="lien_git" placeholder="Lien GitHub du projet" class="form-control">
				</div>
				<div class="d-flex justify-content-center">
					<button type="submit" name="add-project" class="btn btn-block btn-success">
						+ Ajouter un projet
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script src="../assets/js/script-1.js"></script>
<script src="../assets/js/script-2.js"></script>
<script src="../assets/js/script-3.js"></script>
<script src="../assets/js/script-4.js"></script>
<script src="../assets/js/script-5.js"></script>
<script src="../assets/js/script-6.js"></script>
<script src="../assets/js/script-7.js"></script>
<script src="../assets/js/script-8.js"></script>
<script src="../assets/js/script-9.js"></script>
<script src="../assets/js/script-10.js"></script>
<script src="../assets/js/script-11.js"></script>
<script src="../assets/js/script-12.js"></script>
<script src="../assets/js/script-13.js"></script>

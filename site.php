<!DOCTYPE html>
<html>
<head>
    <title>phamsontung.site</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-1.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-2.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-3.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-4.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-5.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style-6.css">
    <link rel="stylesheet" href="zoombox/zoombox.css">  
    <style type="text/css">
    	body {
    		background-image: url(assets/img/fond.jpg); 
    		background-position: center center; 
    		background-repeat: no-repeat; 
    		background-attachment: fixed; 
    		background-size: cover;
    	}
    	@media only screen and (max-width: 767px) {
	    	body {background-image: url(assets/img/fond-mobile.png);}
		}
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="https://phamsontung.site">phamsontung.site</a>
		<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list text-light" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#home-section">
						<span>Accueil</span>
					</a>
				</li>
                <li class="nav-item">
                	<a class="nav-link" href="#about">
                		<span>About</span>
                	</a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="#portfolio">
                		<span>Portfolio</span>
                	</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projets">
                        <span>Projets</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#btssio">
                        <span>BTS SIO</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="veilles" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Veilles</a>
                    <div class="dropdown-menu" aria-labelledby="veilles">
                        <a class="dropdown-item" href="#juridique">Veille juridique</a>
                        <a class="dropdown-item" href="#technologique">Veille technologique</a>
                    </div>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="#contact-section">
                		<span>Contact</span>
                	</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?= $contents ?>

<div class="d-flex justify-content-center mt-4">
    <?= getFlash(); ?>
</div>

<footer class="ftco-footer ftco-section">
	<div class="container">
		<div class="row d-flex justify-content-center mb-3">
			<div class="ftco-footer-widget">
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
					<li class="ftco-animate">
						<a href="https://www.linkedin.com/in/tung-pham-85bb321a2/" target="_blank">
							<span class="icon-linkedin"></span>
						</a>
					</li>
					<li class="ftco-animate">
						<a href="https://www.facebook.com/Yellow.Pig.95/" target="_blank">
							<span class="icon-facebook"></span>
						</a>
					</li>
					<li class="ftco-animate">
						<a href="https://github.com/stungph115" target="_blank">
							<span class="icon-github"></span>
						</a>
					</li>
					<li class="ftco-animate">
						<a href="mailto:son-tung.pham@moniris.com">
							<span class="icon-envelope"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Tout droits réservés | phamsontung.site<a href="#">#z</a></p>
			</div>
		</div>
	</div>
</footer>


<div id="ftco-loader" class="show fullscreen">
	<svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg>
</div>

<script src="./assets/js/script-1.js"></script>
<script src="./assets/js/script-2.js"></script>
<script src="./assets/js/script-3.js"></script>
<script src="./assets/js/script-4.js"></script>
<script src="./assets/js/script-5.js"></script>
<script src="./assets/js/script-6.js"></script>
<script src="./assets/js/script-7.js"></script>
<script src="./assets/js/script-8.js"></script>
<script src="./assets/js/script-9.js"></script>
<script src="./assets/js/script-10.js"></script>
<script src="./assets/js/script-11.js"></script>
<script src="./assets/js/script-12.js"></script>
<script src="./assets/js/script-13.js"></script>

<script type="text/javascript" src="zoombox/zoombox.js"></script>
<script type="text/javascript"> 
$(function(){$('a.zoombox').zoombox();});
</script>

</body>
</html>

 <?php 
 if (isset($title)) {
 	$title = $title .' | ';
 } else {
 	$title = ''; 
 }
 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8" />
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 	<title><?php echo $title ?>WECTI</title>

 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<meta name="Language" content="Portuguese">
 	<meta name="Copyright" content="WECTI">
 	<meta name="Publisher" content="WECTI">
 	<meta name="distribution" content="Global">
 	<meta name="city" content="São Paulo">
 	<meta name="country" content="Brasil">
 	<meta name="robots" content="index, follow">
 	<!-- favicon -->
 	<link rel="icon" type="image/png" href="images/favicon.png">

 	<meta name="robots" content="index, follow">
 	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">


 	<meta name="keywords" content="" />
 	<meta name="description" content="" />

 	<!-- stylesheet -->
 	<link rel="stylesheet" href="assets/lightboxEvolution/themes/carbono/jquery.lightbox.css">
 	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="assets/bootstrap-3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
 	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.css">
 	<link rel="stylesheet" href="assets/animate/css/animate.css">
 	<link rel="stylesheet" href="css/css-effects/hover.css">
 	<link rel="stylesheet" href="css/style.css">

 	<!-- fonts -->

 	<!-- scripts -->
 	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
 	<script src="assets/owlcarousel/owl.carousel.min.js"></script>
 	<script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
 	<script src="js/responsive-tabs.js"></script>
 	<script src="assets/lightboxEvolution/jquery.lightbox.min.js"></script>
 	<script src="assets/animate/js/wow.min.js"></script>
 	<script src="js/scroll.js"></script>
 	<script src="js/scripts.js"></script>

 	<link href="https://fonts.googleapis.com/css?family=Jura:300,400,500,600|Space+Mono:400,700" rel="stylesheet">

	<!-- lightbox -->
	<script type="text/javascript">
		jQuery(document).ready(function($){
			$('.lightbox').lightbox();
		});
	</script>

</head>
<body>
	<!-- MENU -->
	<header class="header" id="top">
		<div class="navbar navbar-inverse navbar-fixed-top affix menu" role="navigation" data-spy="affix" data-offset-top="500">
			<div class="container">
				<div class="navbar-header col-md-2">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
						<span class="sr-only">Logo</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<!-- LOGOTIPO -->
					<a href="index.php#top" class="navbar-brand">
						<img src="images/logo.png"
						title=""
						alt="" class="animated fadeInDown logo img-responsive" >
					</a>
				</div>

				<div class="main-navbar-collapse navbar-collapse collapse section-menu col-md-8" id="main-navbar">
					<ul class="nav navbar-nav responsive" role="tablist">
						<li role="presentation" class="menu-item">
							<a href="index.php#top" class="scroll menu-link" title="Inicial" alt="Inicial">Inicial</a>
						</li>
						<li role="presentation" class="menu-item">
							<a href="index.php#palestrantes" class="scroll menu-link" title="Palestrantes" alt="Palestrantes">Palestrantes</a>
						</li>
						<li class="dropdown menu-item">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-submenu role="button" title="Programação" alt="Programação" aria-expanded="true" aria-haspopup="true" id="dropdownMenu1">Programação <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
								<li>
									<a href="programacao.php#apresentacao" class="scroll" title="" alt=""><i class="icon-sub td icon-right-arrow2"></i> Apresentação</a>
								</li>
								<li>
									<a href="programacao.php#palestras" class="scroll" title="" alt=""><i class="icon-sub td icon-right-arrow2"></i> Palestras</a>
								</li>
								<li>
									<a href="programacao.php#hands-on" class="scroll" title="" alt=""><i class="icon-sub td icon-right-arrow2"></i> Hands on</a>
								</li>
								<li>
									<a href="programacao.php#projetos" class="scroll" title="" alt=""><i class="icon-sub td icon-right-arrow2"></i> Projetos</a>
								</li>

							</ul>
						</li>

						<li role="presentation" class="menu-item">
							<a href="index.php#sobre" class="scroll menu-link" title="Sobre" alt="Sobre">Sobre</a>
						</li>
						<li role="presentation" class="menu-item">
							<a href="galeria.php" class="scroll menu-link" title="Galeria" alt="Galeria">Galeria</a>
						</li>
						<li role="presentation" class="menu-item">
							<a href="contato.php" class="menu-link" title="Contato" alt="Contato">Contato</a>
						</li>
						<li role="presentation">
							<a href="projetos.php" class="hvr-wobble-skew scroll menu-link link-project" target="_blank" title="Projetos" alt="Projetos">Projetos</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
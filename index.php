<?php
include('template/header.php');
?>
<div class="intro-header">
	<div class="container">
		<div class="hgroup wow lightSpeedIn text-center" data-wow-duration="2s">
			<h1 class="title">Ainda não conectou?</h1>
			<h2 class="subtitle"><span>Conecte-se!</span> na Internet das coisas</h2>
			<a class="hvr-sweep-to-right wow pulse btn btn-default" data-wow-delay="2.5s" href="#">		Entre
			</a>
			<a class="hvr-sweep-to-right wow pulse btn btn-default" data-wow-delay="3s" href="#">		Cadastre-se
			</a>
		</div>
		<div class="text-center">
			<img src="images/mouse.png" title="" alt="" class="floating mouse">
		</div>
	</div>
</div>

<!-- Palestrantes -->
<div id="palestrantes" class="section-palestrantes">
	<div class="container">
		<h2 class="s-title text-center wow shake" data-wow-duration="2s">
			Palestrantes
		</h2>
		<hr class="line">

		<ul class="palestrantes-group owl-carousel owl-theme">
			<li class="item">
				<div class="thumbnail">
					<img src="images/palestrantes/antonio-arimateia.jpg" class="img-circle img-thumbnail" width="150px">
					<h3 class="item-title">
						Antonio Arimateia
					</h3>
					<hr class="line-box">
					<p>
						Arduino Sem medo de programar
					</p>
				</div>
			</li>
			<li class="item">
				<div class="thumbnail">
					<img src="images/palestrantes/eduardo-hernacki.png" class="img-circle img-thumbnail" width="150px">
					<h3 class="item-title">
						Eduardo Hernacki
					</h3>
					<hr class="line-box">
					<p>
						Palestrante
					</p>
				</div>
			</li>
			<li class="item">
				<div class="thumbnail">
					<img src="images/palestrantes/francisco-isidro.jpg" class="img-circle img-thumbnail" width="150px">
					<h3 class="item-title">
						Francisco Isidro
					</h3>
					<hr class="line-box">
					<p>
						Palestrante
					</p>
				</div>
			</li>
			<li class="item">
				<div class="thumbnail">
					<img src="images/palestrantes.svg" class="img-circle img-thumbnail">
					<h3 class="item-title">
						Palestrante
					</h3>
					<hr class="line-box">
					<p>
						Palestra Sobre
					</p>
				</div>
			</li>
			<li class="item">
				<div class="thumbnail">
					<img src="images/palestrantes.svg" class="img-circle img-thumbnail">
					<h3 class="item-title">
						Palestrante
					</h3>
					<hr class="line-box">
					<p>
						Palestra Sobre
					</p>
				</div>
			</li>
		</ul>

		<script type="text/javascript">
			$('.palestrantes-group').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:4
					}
				}
			});
		</script>
	</div>
</div>

<div class="section-programacao">
	<h2 class="s-title text-center wow flipInX">
		Programação
		<hr class="line">
		<br>
	</h2>
	<div class="row">
		<div class="card-programacao col-md-3">
			<div class="card-image" style="background-image: url(images/apresentacao.jpg);">
			</div>

			<div class="card-content">
				<div class="card-content-wrapper">
					<h2 class="wow rubberBand card-title" data-wow-delay="1s">
						Apresentação
					</h2>

					<!-- <p class="card-desc"></p> -->

					<a href="programacao.php#apresentacao" class="hvr-bounce-to-top btn btn-default">
						Ver mais
					</a>
				</div>
			</div>
		</div>
		<div class="card-programacao col-md-3">
			<div class="card-image" style="background-image: url(images/palestras.jpg);">
			</div>

			<div class="card-content">
				<div class="card-content-wrapper">
					<h2 class="wow rubberBand card-title" data-wow-delay="1.5s">
						Palestras
					</h2>

					<!-- <p class="card-desc"></p> -->

					<a href="programacao.php#palestras" class="hvr-bounce-to-top btn btn-default">
						Ver mais
					</a>
				</div>
			</div>
		</div>
		<div class="card-programacao col-md-3">
			<div class="card-image" style="background-image: url(images/hand-on.jpg);">
			</div>

			<div class="card-content">
				<div class="card-content-wrapper">
					<h2 class="wow rubberBand card-title" data-wow-delay="2s">
						Hands on
					</h2>

					<!-- <p class="card-desc"></p> -->

					<a href="programacao.php#hands-on" class="hvr-bounce-to-top btn btn-default">
						Ver mais
					</a>
				</div>
			</div>
		</div>
		<div class="card-programacao col-md-3">
			<div class="card-image" style="background-image: url(images/projetos.jpg);">
			</div>

			<div class="card-content">
				<div class="card-content-wrapper">
					<h2 class="wow rubberBand card-title" data-wow-delay="2.5s">
						Projetos
					</h2>

					<!-- <p class="card-desc"></p> -->

					<a href="programacao.php#projetos" class="hvr-bounce-to-top btn btn-default">
						Ver mais
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-patrocinios">
	<div class="container">
		<div class="col-md-8">
			<div class="clients owl-carousel" style="opacity: 1; display: block;">
				<div class="owl-wrapper-outer">
					<div class="owl-wrapper" style="width: 4080px; left: 0px; display: block;">
						
						<div class="owl-item img-responsive">
							<div>
								<img src="images/palestrantes.svg" width="150px">
							</div>
						</div>
						<div class="owl-item img-responsive">
							<div>
								<img src="images/palestrantes.svg" width="150px">
							</div>
						</div>
						<div class="owl-item img-responsive">
							<div>
								<img src="images/palestrantes.svg" width="150px">
							</div>
						</div>
						<div class="owl-item img-responsive">
							<div>
								<img src="images/palestrantes.svg" width="150px">
							</div>
						</div>
						<div class="owl-item img-responsive">
							<div>
								<img src="images/palestrantes.svg" width="150px">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-patrocinio wow fadeInRight col-md-4">
			<h2 class="s-title">Patrocinadores</h2>
			<p>Conheça o pessoal que nos deu uma força.</p>
		</div>
	</section>
</div>

<script type="text/javascript">
	$(".clients").owlCarousel({
		autoPlay: 2000,
		pagination: true,
		itemsMobile: [600, 3],
	});
</script>
</div>
</div>

<div id="sobre" class="section-sobre">
	<div class="container">
		<div class="col-md-5">
			<div class="box-sobre wow fadeInUp col-md-12">
				<h2 class="s-title">Sobre a <span>WECTI</span></h2>
				<h3>O <span>Workshop brasileiro</span> sobre <span>Internet das Coisas</span> na educação</h3>
				<p>O 3 WECTI pretende estimular o desenvolvimento de pesquisas sobre vários aspectos ligados a conectividade dos objetos, dando ênfase a sua utilização para personalização de conteúdo, a aspectos de infraestrutura da tecnologia de conectividade, a colaboração entre estudantes e professores e a aspectos humanos e de privacidade. O público-alvo deste evento é formado por professores e estudantes da área de IoT e áreas relacionadas, cujas aplicações estejam direcionadas ao desenvolvimento de sistemas computacionais.</p>
			</div>
		</div>
		<div class="col-md-7">
			<img src="images/sobre-wecti.jpg" width="840px">
		</div>
	</div>
</div>


<?php
include('template/footer.php');
?>
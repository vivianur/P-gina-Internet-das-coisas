<?php
include('template/header.php');
?>

<div class="page-wrapper page-contact">
	<div class="page-header">
		<h1 class="title">Contato</h1>
		<hr class="line">
	</div>
	<div class="section-contato">
		<div class="container">
			<div class="col-md-8">
				<div class="row">
				<div class="col-xs-12">
						<hgroup class="s-hgroup-title text-left">
							<h1 class="title"><b>Eai, como vai?</b></h1>
							<hr>
							<hr class="down">
							<br>
							<p class="subtitle">
								<b>Ficamos muito felizes pelo seu contato.</b>
							</p>
						</hgroup>
						<p>
							Preencha o formulário abaixo e entraremos em contato o mais rápido possível.
						</p>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="nome" class="form-control" placeholder="Nome">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="telefone" class="form-control" placeholder="Telefone">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="E-mail">
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="mensagem" rows="6" class="form-control" placeholder="Mensagem"></textarea>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-lg btn-success">
							<span>Enviar</span>
						</button>
					</div>
				</form>
			</div>
			<div class="col-md-5 col">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.9006051678207!2d-46.56165178544301!3d-23.536077084695442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ef15275770f%3A0xfc42f6294fa0f613!2sUniversidade+Cidade+de+S%C3%A3o+Paulo+-+UNICID!5e0!3m2!1spt-BR!2sbr!4v1491664397200" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php
include('template/footer.php');
?>
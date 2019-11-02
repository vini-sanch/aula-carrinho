<?php include_once('bd.php'); ?>
<?php include_once('controller.php'); ?>

<!doctype html>
<html lang="pt-br">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Início</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<style>
			img {
				height: 250px;
				max-width: 300px;
			}
			#img-brand {
				width: 64px;
			}
		</style>
	</head>

	<body>
		<!-- Nav tabs -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#"><img id="img-brand" src="images/brand.png" class="img-fluid" alt="
			Carrinho de Compras" title='Carrinho de Compras	'></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Início</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="carrinho.php">Carrinho</a>
					</li>
				</ul>
			</div>
		</nav>
		<br/>

		<div class="container">
			<div class="row">
				<?php foreach($produtos as $indice => $valor): ?>
					<div class="col-md-4">
						<div class="card border-dark mb-3">
							<div class="card-header">
							<img src="images/<?php echo $valor["imagem"]; ?>"  alt="">
							</div>

							<div class="card-body">
								<h4 class="card-title"><?php echo $valor["nomeproduto"]; ?></h4>
								<p class="card-text">R$ <?php echo number_format($valor["preco"], 2, ',', ' ') ; ?></p>
								<a href='?acao=add&codproduto=<?php echo $indice ?>' class="btn btn-outline-success">Adicionar</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
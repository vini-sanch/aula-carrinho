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
					<li class="nav-item">
						<a class="nav-link" href="index.php">Início</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">Carrinho</a>
					</li>
				</ul>
			</div>
		</nav>
		<br/>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Produto</th>
								<th scope="col">Quantidade</th>
								<th scope="col">Preço</th>
								<th scope="col">Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$total = 0.0;
								foreach($_SESSION['codproduto'] as $indice => $valor): 
								$total += $_SESSION['quantidade'][$indice] * $produtos[$valor]['preco'];
							?>
								<tr>
									<td scope="row"><?php echo $produtos[$valor]['nomeproduto']; ?></td>
									<td><?php echo $_SESSION['quantidade'][$indice]; ?></td>
									<td><?php echo $produtos[$valor]['preco']; ?></td>
									<td><a href="?acao=del&codproduto=<?php echo $indice; ?>" class="btn btn-outline-danger btn-sm">Excluir</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan='3'><h4><strong>Total: R$ <?php echo number_format($total, 2, ',', ' '); ?></strong></h4></th>
								<th><a href="?acao=limpar" class='btn btn-danger'>Limpar Carrinho</a></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
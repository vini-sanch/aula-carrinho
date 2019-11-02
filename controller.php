<?php
	session_start();

	if(!isset($_SESSION['codproduto'])) {
		$_SESSION['codproduto'] = [];
		$_SESSION['quantidade'] = [];
	}

	if(isset($_GET['acao'])) {
		switch($_GET['acao']) {
			case 'add':
				$_SESSION['codproduto'][] = $_GET['codproduto'];
				$_SESSION['quantidade'][] = 1;
			break;

			case 'del':
				$codproduto = $_GET['codproduto'];
				unset($_SESSION['codproduto'][$codproduto]);
				unset($_SESSION['quantidade'][$codproduto]);
			break;

			case 'limpar':
				session_destroy();
				echo "<script>window.location.href = 'carrinho.php';</script>";	
			break;
		}
	}
?>
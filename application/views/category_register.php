<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/public/assets/reset.css">
	<link rel="stylesheet" type="text/css" href="/public/assets/index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>My-Spending</title>
</head>
<body class="container">
    <br>
	<h1 class="text-center">Adicionar Categoria</h1>
	
	<br>
	<div class="text-center">
	<button class="btn btn-primary text-center" type="button">
            Voltar
        </button>
        <button class="btn btn-success text-center" type="button">
            Visualizar Listagem
        </button>
    </div> 
    <br>
    <form class="form">
		
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<input type="text" id="descricao" name="descricao" class="form-control" required>
		</div>

		<br>

		<div class="form-group">
			<label for="meta">Meta</label>
			<input type="number" id="meta" name="meta" class="form-control" required>
		</div>

		<br>

		
		<div class="d-flex flex-row-reverse bd-highlight">
			<button class="btn btn-success" type="submit">Enviar</button>
		</div>
    </form>

    <br>
	

    
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
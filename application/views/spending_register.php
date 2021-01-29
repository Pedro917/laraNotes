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
	<h1 class="text-center">Adicionar Gastos</h1>
	
	<br>
	<div class="text-center">
		<a href="<?= $this->baseUrl ?>/" class="btn btn-primary text-center">Voltar</a>
    </div> 
    <br>
    <form method="POST" class="form" action="">
		
		<div class="form-group">
			<label for="titulo">Titulo do Gasto</label>
			<input type="text" id="titulo" name="title" class="form-control" required>
		</div>

		<br>

		<div class="form-group">
			<label for="valor">Valor do Gasto</label>
			<input type="text" id="valor" name="price" class="form-control" required>
		</div>

		<br>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="data">Data do Gasto</label>
					<input type="date" id="date" name="date" class="form-control" required autofocus/>        
				</div>  
			</div>

		</div>
        
		<br>
        
        <div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="category_id" id="categoria" class="form-control" required>
				<option	option value="1">Lazer</option>
				<option	option value="2">Alimentação</option>
				<option	option value="3">Transporte</option>
			</select>
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
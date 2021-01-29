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
	<h1 class="text-center">Categorias Cadastradas</h1>
	
	<br>
	<div class="text-center">
		<a href="<?= $this->baseUrl ?>/" class="btn btn-primary text-center">Voltar</a>
    </div>
    <br>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Meta</th>
				<th class="d-flex justify-content-center">---</th>
            </tr>
        </thead>
        
        <tbody>
			<tr>
				<td>1</td>
				<td>Lazer</td>
				<td>400,00</td>
				<td>
					<div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Remover</button>
					</div>	
				</td>
			</tr>
        </tbody>
        
        <tfoot>
        </tfoot>
	</table>
	<div class="d-flex flex-row-reverse bd-highlight">
		<h4>Total: 1</h4>
	</div>
    
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
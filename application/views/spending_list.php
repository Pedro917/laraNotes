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
	<h1 class="text-center">Meus Gastos</h1>
	
	<br>
	<br>
	<div class="text-center">
        <a href="<?= $this->baseUrl ?>/register-spending" class="btn btn-primary text-center">Adicionar Gasto</a>
        <a href="<?= $this->baseUrl ?>/list-category" class="btn btn-success text-center">Visualizar Categorias</a>
    </div> 
    <br>
    <form class="form" method="POST" action="">
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="data_inicial">Data Inicial</label>
					<input type="date" name="init_date" id="data_inicial" class="form-control"  autofocus/>        
				</div>  
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="data_final">Data Final</label>
					<input type="date" name="final_date" id="data_final" class="form-control"  autofocus/>        
				</div>  
			</div>
		</div>
        
		
		<br>
        
        <div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="category_id" id="categoria" class="form-control" >
				<option	option value="0">---</option>
				<option	option value="1">Lazer</option>
				<option	option value="2">Alimentação</option>
				<option	option value="3">Transporte</option>
			</select>
        </div>
		
		<br>
        
        <button class="btn btn-primary" type="submit">Filtrar</button>
    </form>
    
    <br>
    <br>
	
	<div class="d-flex flex-row-reverse bd-highlight">
		<h4>Meta: 900,00 -- Status: Alcançada</h4>
	</div>

    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Valor</th>
                <th>Data</th>
				<th>Categoria</th>
				<th class="d-flex justify-content-center">Ações</th>
            </tr>
        </thead>
        
        <tbody>
			<?php
				$cont = count($this->result);
				 foreach($this->result as $item): 
			?>
			<tr>
				<td><?= $item['title'];?></td>
				<td><?= $item['price'];?></td>
				<td><?= $item['date'];?></td>
				<td><?= $item['category_id'];?></td>
				<td>
					<div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
						<button type="button" class="btn btn-primary">Mais</button>
						<button type="button" class="btn btn-warning">Editar</button>
						<button type="button" class="btn btn-danger">Remover</button>
					</div>	
				</td>
			</tr>
			<?php

				 endforeach; 
			?>
        </tbody>
        
        <tfoot>
        </tfoot>
	</table>
	<div class="d-flex flex-row-reverse bd-highlight">
		<h4>Total: <?= $cont?></h4>
	</div>
    
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
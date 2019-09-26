<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<img src="<?php echo base_url("application/views/foto.jpg") ?>" class="img-thumbnail" width="400" />

<form action="comentar.php" method="POST">

	Nombre: <input class="form-control" name="nombre" type="text"><br>
	
	Comentario: <textarea class="form-control" name="comentario"></textarea>
	
	<button class="btn btn-danger">Comentar</button>

</form>
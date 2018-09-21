<!DOCTYPE html>
<html>

	<!-- formulario de alta de publicacion al blog  -->

	<?php include ('../../head/head.php') ?>

	<body>
		<div class="container">

			<div class="col-md-6 col-md-offset-3">
				<h2 class="text-center">Alta de publicaciones del Blog</h2><hr>
			</div>

			<div class="col-md-6 col-md-offset-3">

				<!-- controles de validacion/verificacion por js -->

				<form method="post" id="publicar">

	      		<div class="form-group">
		        	<label>T&iacutetulo</label>
		        	<input type="text" name="titulo" id="title" class="form-control" placeholder="Ingrese aqui titulo"/>
		        </div>

		        <div class="form-group">
		        	<label>Decripci&oacuten</label>
		        	<input type="text" name="descripcion" id="description" class="form-control" placeholder="Ingrese aqui descripción"/>
		        </div>

						<div class="col-md-8 col-md-offset-2">
					    	<input type="hidden" name="action" id="action" value="insert" />
					    	<input type="submit" name="button_action" id="button_action" class="btn btn-primary" value="Publicar" />
								<input type="reset" class="btn btn-info" ></input>
								<a href="../index.php" class="btn btn-warning" >Ver publicaciones</a>
						</div>

				</form>

			</div>


		</div>

		<?php include ('../../scripts/script.php') ?>

	</body>
</html>

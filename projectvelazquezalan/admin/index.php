<!DOCTYPE html>
<html>

	<!-- lista de publicaciones del blog -->

	<?php include ('../head/head.php') ?>

	<body>
		<div class="container">

			<div class="row col-md-10 col-md-offset-1">
				<div class="pull-left">
					<h3 class="text-left">Publicaciones del Blog</h3>
				</div>
				<div class="pull-right margin-top-20">
					<a href="posts/create.php" class="btn btn-success">Publicar</a>
				</div>
			</div>

			<div class="col-md-10 col-md-offset-1">
				<hr>
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>T&iacutetulo</th>
								<th>Descripci&oacuten</th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>

		</div>

		<?php include ('../scripts/script.php') ?>

	</body>
</html>

<div class="box-principal">
<h3 class="titulo">Editar Secciones<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar sección</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data" >
				    <div class="form-group">
				      <label  class="control-label">Nombre de la sección</label>
				        <input class="form-control" name="nombre" type="text" value = "<?php echo $datos['nombre']; ?>" required>
				    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
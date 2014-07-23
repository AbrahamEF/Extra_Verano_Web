<?php
 
	include ('../../libs/security.php');
	include ('../../libs/adodb5/adodb-pager.inc.php');
	include ('../../libs/adodb5/adodb.inc.php');
	include ('../../models/Conexion.php');
	include ('../../models/Modelo.php');
	include ('../../models/Estado.php');
	include ('../../controllers/EstadoController.php');
	include ('../../libs/Er.php');
	include ('../layouts/header.php'); 
	
	$estadoC = new EstadoController();
 	 if(isset($_POST['nombre'])){		
	$estadoC->insertaEstado($_POST,$_FILES); 
	echo $estadoC->alertas();
 	 }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/>
	<div><h2 align="center">Registro de Estado</h2></div><br/>		
    <form role="form" id="registro_estado" action="" method="post"  enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
<?php 
	  include ('../../libs/security.php'); 	
	  include ('../../libs/adodb5/adodb-pager.inc.php');
	  include ('../../libs/adodb5/adodb.inc.php');
	  include ('../../models/Conexion.php');
	  include ('../../models/Modelo.php');
	  include ('../../models/Continente.php');
	  include ('../../controllers/ContinenteController.php');
	  include ('../../libs/Er.php');
      include ('../layouts/header.php'); 
	
	  $contienteC = new ContinenteController();
	  if(isset($_POST['nombre'])){		
		$contienteC->insertaContinente($_POST); 
		echo $contienteC->alertas();
	  }

?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>

	<div><h2 align="center">Registro de Continentes</h2></div><br/>		
    <form role="form" id="registro_continente" action="" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $contienteC->get_nombre();?>">
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
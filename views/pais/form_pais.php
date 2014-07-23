<?php 
	include ('../../libs/security.php');
	include ('../../libs/adodb5/adodb-pager.inc.php');
	include ('../../libs/adodb5/adodb.inc.php');
	include ('../../models/Conexion.php');
	include ('../../models/Modelo.php');
	include ('../../models/Pais.php');
	include ('../../controllers/PaisController.php');
	include ('../../libs/Er.php');
	include ('../layouts/header.php'); 
	
	$paisC = new PaisController();
 	 if(isset($_POST['nombre'])){		
	$paisC->insertaPais($_POST,$_FILES); 
	echo $paisC->alertas();
 	 }
?>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4"><br/><br/><br/>
	<div><h2>Registro de Paises</h2></div><br/>		
    <form role="form" id="registro_pais" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $paisC->get_nombre(); ?>">
      </div>                        
      <div class="form-group">
        <label for="bandera">Bandera:</label>
        <input type="file" class="form-control" name="bandera" id="bandera" value="<?php echo $paisC->get_bandera(); ?>">
      </div>                 
      <div class="form-group">
        <label for="id_continente">Continente:</label>
           <?php echo $paisC->getDropDown('continente','id_continente','id_continente');?>  
      </div>              
      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
        	
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
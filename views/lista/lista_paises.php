<?php 
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
	<div  class="col-lg-4 col-lg-offset-4" align="center">
	<?php $paisC->show_grid(); ?>
</div>
</div>

<?php include ('../layouts/footer.php'); ?>
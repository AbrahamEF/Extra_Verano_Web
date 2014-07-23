<?php
	class EstadoController {
		
		public $muestra_errores = false;
		function __construct(){
			 
		}

		public function insertaEstado($datos){
			echo"<pre>datos";
		    print_r($datos);
		    echo"</pre>";
			$estado = new Estado();
			$estado -> set_nombre($datos['nombre']);

			if(count($estado->errores)>0){
				print_r($estado->errores);
			}
		}
	}


?>
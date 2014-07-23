<?php
	class EstadoController extends Estado{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Estado();
			 
		}

		

		public function insertaEstado($datos){
			echo"<div class='alert alert-success'>REGISTRO EXITOSO: ";
		   
		    echo"</div>";
			
			$this->set_nombre($datos['nombre']);
			$this->set_id_pais($datos['id_pais']);
			if (count($this->errores)>0) {
				
				$this->muestra_errores = true;
			}
			else{
				$this->inserta($this->get_atributos());
				$this->inserta=true;
			}   
				

			
		}
public function alertas()
					{
						
							if($this->muestra_errores){
							
							echo '<div class="alert alert-danger">';
		           
									foreach($this->errores as $value){
										echo "<p>$value</p>";
									}
								
							echo "</div>";		                   	
							}
						  
			}





	}


?>
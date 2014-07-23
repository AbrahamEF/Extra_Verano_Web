<?php
	class ContinenteController extends Continente{
		
		public $muestra_errores = false;
		function __construct(){
			parent::Continente();
			 
		}

		

		public function insertaContinente($datos){
			
			$this->set_nombre($datos['nombre']);
			
			if (count($this->errores)>0) {				
				$this->muestra_errores = true;
			}
			else{
				$this->inserta($this->get_atributos());
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
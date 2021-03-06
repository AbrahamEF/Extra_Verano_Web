<?php

class Pais extends Modelo{
    public $nombre_tabla = 'pais';
    public $pk = 'id_pais';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'bandera'=>array(),
        'id_continente'=>array(),
                
    );
    
    public $errores = array( );
    
    private $nombre;    
    private $bandera;
    private $id_continente;
    
       
    
    function Pais(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    public function get_nombre(){
        return $this->nombre;

    } 

    public function set_nombre($valor){
        $er = new Er();        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }
        $rs = $this->consulta_sql("select * from pais where nombre = '$valor'");
        $rows = $rs->GetArray();        
        if(count($rows) > 0){
            $this->errores[] = "Este nombre (".$valor.") ya esta registrado"; 
        }else{
            $this->nombre = trim($valor);
        } 
                   
    
        
    }
    public function get_bandera(){
        return $this->bandera;
    } 

    public function set_bandera($valor){

        $er = new Er();
         /* $nombre = $_FILES['bandera']['name'];
        $tipo = $_FILES['bandera']['type'];
        $tamano = $_FILES['bandera']['size'];
        if($tipo == "img/gif" || $tipo == "img/pjpeg" || $tipo == "img/png"){
            if($tamano<=2000000){
                 $this->bandera = trim($valor['name']);
            }                      
        } */ 
            
        $this->bandera = trim($valor);
        
    }
       
    public function get_id_continente(){
        return $this->id_continente;
    } 

    public function set_id_continente($valor){

        $er = new Er();               
        $this->id_continente = trim($valor);
        
    }
}

?>
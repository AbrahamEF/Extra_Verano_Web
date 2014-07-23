<?php

class Estado extends Modelo{
    public $nombre_tabla = 'estado';
    public $pk = 'id_estado';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'id_pais'=>array(),

                
    );
    
    public $errores = array( );
    
    private $nombre;      
    private $id_pais;
       
    
    function Estado(){
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
        
     public function get_id_pais(){
        return $this->id_pais;
    } 

    public function set_id_pais($valor){

        $er = new Er();               
        $this->id_pais = trim($valor);
        
                   
    
        
    }
}

?>
$(document).ready(function() {			
		//ESTADO
	$('#registro_estado').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'El Nombre no es Valido',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'EL nombre debe tener 6 caracteres minimo y maximo 30'
                    },                   
                }
               }
        } 
        });
	
	//CONTINENTE
$('#registro_continente').bootstrapValidator({
        live: 'enabled',
        message: 'Este valor no es valido',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'EL nombre no es Valido',
                validators: {
                    notEmpty: {
                        message: 'El campo es requerido'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'EL nombre debe tener 4 caracteres minimo y maximo 30'
                    },                    
                }
               }
        } 
        });
	

	//PAIS
	$('#registro_pais').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        submitButtons: 'button[type="submit"]',
        submitHandler: null,
        trigger: null,
        fields: { nombre: {
                message: 'El nombre no es valido',
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'EL nombre debe tener 6 caracteres minimo y maximo 30'
                    },
                	}
               	},
               bandera:{
                validators: {
                    file: {
                        extension:'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,   // 2 MB
                        message: 'El archivo seleccionado no es valido'
                    }
                }
            },
            id_continente: {
					validators: {
						notEmpty: {
							message: 'EL campo es requerido'
						}
					}				
				}
        } 
        });
		
		
		
	
	
$(".fancybox").fancybox({
				maxWidth	: 800,
				maxHeight	: 600,
				fitToView	: false,
				width		: '70%',
				height		: '70%',
				autoSize	: false,
				closeClick	: false,
				openEffect	: 'none',
				closeEffect	: 'none'
			});
			
$('#datetimepicker1').datetimepicker({language: 'es'});
$('#datetimepicker2').datetimepicker({language: 'es'});
	
	});
$(document).ready(function(){
    console.log("prueba2");
    jQuery(function(){
      jQuery( "#CatalogoG" ).validate({
        rules: {     
          id_marca:{
            required: true,
          },
          modelo:{
             required: true,
             alphas:true,
          },
          año:{
            required: true,
            numbers:true,
          },
          tipoauto:{
            required: true,
          },
          monto:{
            required: true,
             numbers:true,
           },
           tipo_motor:{
            required: true,
          },
          cilindros:{
            required: true,
          },
          transmision:{
            required: true,
             alphas:true,
           },
           traccion:{
            required: true,
          },
          combustible:{
            required: true,
             alphas:true,
           },
           nota:{
            required: true,
          },
          cantidad:{
            required: true,
             numbers:true,
           },
           stock:{
            required: true,
             numbers:true,
           },
           id_estado:{
            required: true,
          },
          dos:{
            required: true,
          },
          tres:{
            required: true,
          },
          cuatro:{
            required: true,
          },
          cinco:{
            required: true,
          },
          seis:{
            required: true,
          },
          nombreG:{
            required: true,
            alphas:true,
          },
          apellido:{
            required: true,
            alphas:true,
          },
          codigo:{
            required: true,
          }
  }
      });
   });
  jQuery.validator.addMethod("alphas", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, 'Sólo caracteres');
    
    jQuery.validator.addMethod("numbers", function(value, element) {
    return this.optional(element) || /^[1-9]+$/.test(value);
    }, 'Sólo números');
  
    $("#enviarcata").prop('disabled','disabled');
  $("#CatalogoG").on('keyup blur', function(){ //Evento cada que presionemos una tecla o posicion
    if ($("#CatalogoG").valid()){
      //Habilitamos
      $("#enviarcata").prop('disabled', false);
    }else{
      //Deshabilitado
      $("#enviarcata").prop('disabled', 'disabled');
    }
  });
  
  });
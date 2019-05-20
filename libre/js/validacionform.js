$(document).ready(function(){
  console.log("prueba");
  jQuery(function(){
    jQuery( "#formsucur" ).validate({
      rules: {
        nombre:{
                required: true,
                alphas:true
        },
        direccion:{
          required: true,
        },
        id_gerente:{
          required: true,
        },
        id_estado:{
          required: true,
        },
        imagen:{
          required: true,
        },
        telefono:{
          required: true,
          numbers:true,
          minlength: 8,
          maxlength:8,
        },
        correo:{
          required: true,
          email: true,
        },apellido:{
          required: true,
          alphas:true
        },codigo:{
            required: true,
        },direccion:{
          required: true,
          alphas:true
        },dui:{
          required: true,
          numbers:true,
          minlength: 9,
          maxlength:9,
        },id_estado:{
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

  $("#enviar").prop('disabled','disabled');
$("#formsucur").on('keyup blur', function(){ //Evento cada que presionemos una tecla o posicion
  if ($("#formsucur").valid()){
    //Habilitamos
    $("#enviar").prop('disabled', false);
  }else{
    //Deshabilitado
    $("#enviar").prop('disabled', 'disabled');
  }
});

});
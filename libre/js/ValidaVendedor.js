$(document).ready(function(){
  console.log("prueba");
  jQuery(function(){
    jQuery( "#form_vendedor" ).validate({
      rules: {
        nombre:{
                required: true,
                alphas:true
        },
        apellido:{
          required: true,
          alphas:true,
        },
        codigo:{
          required: true,
        },
        id_estado:{
          required: true,
        },
        direccion:{
          required: true,
        },
        dui:{
          required: true,
          numbers:true,
          minlength: 9,
          maxlength:9,
        },
        id_estado:{
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
$("#form_vendedor").on('keyup blur', function(){ //Evento cada que presionemos una tecla o posicion
  if ($("#form_vendedor").valid()){
    //Habilitamos
    $("#enviar").prop('disabled', false);
  }else{
    //Deshabilitado
    $("#enviar").prop('disabled', 'disabled');
  }
});

});
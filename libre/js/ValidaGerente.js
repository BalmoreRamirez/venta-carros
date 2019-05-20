$(document).ready(function(){
  console.log("prueba");
  jQuery(function(){
    jQuery( "#form_gerente" ).validate({
      rules: {
        nombreG:{
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
       id_auto:{
          required: true,
       },
       id_sucursal:{
          required: true,
       },unidades:{
          required: true,
          numbers:true,
       },id_color:{
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
$("#form_gerente").on('keyup blur', function(){ //Evento cada que presionemos una tecla o posicion
  if ($("#form_gerente").valid()){
    //Habilitamos
    $("#enviar").prop('disabled', false);
  }else{
    //Deshabilitado
    $("#enviar").prop('disabled', 'disabled');
  }
});

});
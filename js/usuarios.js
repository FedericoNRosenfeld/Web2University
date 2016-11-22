function BindeosUsuarios(){
  //Si se hace click en el boton ingresar
  $("#"+REF_BTN_INGRESAR).on("click",function(){

  });

  //Si se hace click en el boton crear nuevo usuraio
  $("#"+REF_BTN_IR_A_NUEVO_USER).on("click",function(){
      injectContentByName(ACTION_IR_A_NUEVO_USER,"");
  });

  $("#"+ACTION_REGISTRAR_USER).on("click",function(){
      //Si se hace click en el boton de registrar un nuevo usuario
      $.ajax({
        url:PREFIJO_ACTION+ACTION_REGISTRAR_USER,
        data:$("#"+REF_FORM_REGISTRAR_USER).serialize(),
        type:"POST"
      })
      .success(function(data){
        alert(data);
      })
      .error(function(jqxml, status, errorThrown){
        console.log(errorThrown);
      });
      return false;
  });
}

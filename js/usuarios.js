function BindeosUsuarios(){
  //Si se hace click en el boton ingresar
  $("#"+REF_BTN_INGRESAR).on("click",function(){
    alert("Todavia no implementado");
  });

  //Si se hace click en el boton crear nuevo usuraio
  $("#"+REF_BTN_IR_A_NUEVO_USER).on("click",function(){
      injectContentByName(ACTION_IR_A_NUEVO_USER,"");
  });

  $("#"+ACTION_REGISTRAR_USER).on("click",function(){
      alert("registro de usuario todavia no implemntado");
  });
}

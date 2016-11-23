function BindeosUsuarios(){
  //Si se hace click en el boton ingresar
  $("#"+REF_BTN_INGRESAR).on("click",function(){
    $.ajax({
      url:PREFIJO_ACTION+ACTION_LOGIN,
      data:$("#"+REF_FORM_LOGIN).serialize(),
      type:"POST"
    })
    .success(function(data){
      alert(data);
      //recargamos la pagina
      location.href="./";
    })
    .error(function(jqxml, status, errorThrown){
      alert(TEXT_USER_NO_CREADO);
    });
    return false;
  });

  //Si se hace click en el boton crear nuevo usuraio
  $("#"+REF_BTN_IR_A_NUEVO_USER).on("click",function(){
      injectContentByName(ACTION_IR_A_NUEVO_USER,"");
  });

  //Si se hace click en el boton de registrar un nuevo usuario
  $("#"+ACTION_REGISTRAR_USER).on("click",function(){
      $.ajax({
        url:PREFIJO_ACTION+ACTION_REGISTRAR_USER,
        data:$("#"+REF_FORM_REGISTRAR_USER).serialize(),
        type:"POST"
      })
      .success(function(data){
        if (data){
            alert("Usuario creado satisfactoriamente");
            injectContentByName(ACTION_MOSTRAR_INICIO,"");
        }
      })
      .error(function(jqxml, status, errorThrown){
        alert(TEXT_USER_NO_CREADO);
      });
      return false;
  });
}

function BindeosUsuarios(){
  //Si se hace click en el boton salir
  $("#"+ACTION_CERRAR_SESION).on("click",function(){
    $.ajax({url:PREFIJO_ACTION+ACTION_CERRAR_SESION}).success(function(data){
      alert(data);
      location.href="./";
    });
  });

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
      alert(TEXT_ERROR_GENERICO);
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

  //si se apreta el boton borrar Usuario
  $("."+REF_BTN_BORRAR_USR).on("click",function(){
    var Id_user=$(this).attr("data-id");
    $.ajax({
      url:PREFIJO_ACTION+ACTION_BORRAR_USER,
      data:{id:Id_user},
      type:"POST"
    })
    .success(function(data){
      if (data){
          $("#usr"+Id_user).remove();
      }
    })
    .error(function(jqxml, status, errorThrown){
      alert(TEXT_ERROR_GENERICO);
    });
    return false;
  });

  //si se apreta el boton guardar del modificar usuario
  $("#"+REF_BTN_G_USER_MOD).on("click",function(){
    
  });

  //si se apreta el boton modificar Usuario
  $("."+REF_BTN_MODIFICA_USR).on("click",function(){
    var Id_user=$(this).attr("data-id");
    $.ajax({
      url:PREFIJO_ACTION+ACTION_IR_MOD_USER,
      data:{id:Id_user},
      type:"POST"
    })
    .success(function(data){
      $("#mainContent").html(data);
    })
    .error(function(jqxml, status, errorThrown){
      alert(TEXT_ERROR_GENERICO);
    });
    return false;
    /*$.ajax({
      url:PREFIJO_ACTION+ACTION_MODIFICAR_USER,
      data:{id:Id_user},
      type:"POST"
    })
    .success(function(data){
      injectContentByName(ACTION_IR_ADM_USER,"");
    })
    .error(function(jqxml, status, errorThrown){
      alert(TEXT_ERROR_GENERICO);
    });
    return false;*/
  });
}

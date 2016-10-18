$("document").ready(function(){
  //se hace click en los elemntos de avegacion
  $(".navItem").click(function(){
    injectContentByName($(this).attr("name"),"");
  });
});

function injectContentByName(name,params){
  $.ajax({
    url:PREFIJO_ACTION+name+params,
    method:"GET",
    dataType:"html",
    success: function(resultData){
      $("#mainContent").html(resultData);
      ActualizarBindeos()
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
    }
  });
}

function ActualizarBindeos(){
  //Se hace click en los botones identificatorios de los equipos
  $(".EnlaceEquipo").on("click",function(){
    injectContentByName(ACTION_VER_JUGADORES_EQUIPO,"&id="+$(this).attr("id"));
  });
  //si se elige una opcion del selector de equipos en la vista de admin de equipos
  $("#PlayersSelectEquipo").on("change",function(){
    injectContentByName(ACTION_ADM_JUGADOR_TEAM,"&id="+$(this).val());
  });
  //Botones de editar
  $("."+CLASE_BTN_EDITAR).on("click",function(){

  });
  //Botones de eliminar
  $("."+CLASE_BTN_ELIMINAR).on("click",function(){

  });
  //Si se apreta en el boton crear jugador
  $("#"+BOTON_CREAR_JUGADOR).on("click", function(){
    $.ajax(
        url:PREFIJO_ACTION+ACTION_AGREGAR_JUGADOR,
        method:"POST",
        data:$(REF_FORMULARIO_CARGA).serialize(),
        success: function(resultData){
        },
        error:function(jqxml, status, errorThrown){
          console.log(errorThrown);
        }
      );
  });
}

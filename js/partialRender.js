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
    var Info = new FormData(document.getElementById(REF_FORMULARIO_CARGA_JUGADOR));
    //var Archivo = document.getElementById("jugador-imagen").files[0];
    //Info.append("imagen",Archivo);
    $.post({
        url:PREFIJO_ACTION+ACTION_AGREGAR_JUGADOR,
        type:"POST",
        data:Info,
        processData: false,  // tell jQuery not to process the data
        contentType: false   // tell jQuery not to set contentType
        }).success(function(resultData){
          alert(resultData);
        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
      return false;
  });
  //Si se apreta el boton crear posicion
  $("#"+BOTON_CREAR_POSICION).on("click", function(){

  });
}

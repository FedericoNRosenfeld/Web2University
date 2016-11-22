$("document").ready(function(){
  //se hace click en los elemntos de navegacion
  $(".navItem").click(function(){
    injectContentByName($(this).attr("name"),"");
  });

  //si se hace click en admin comentarios
  $("#ADMComents").on("click",function(){
    injectContentByName($(this).attr("name"),"");
    CargarTablaComents(REF_TABLA_ADM_COMENTARIOS);
  });
});

function ActualizarBindeos(){
  // bindeo de comentarios
  BindeosComentarios();
  BindeosUsuarios();
  BindeosADMJugadores();

  //Se hace click en los botones identificatorios de los equipos
  $(".EnlaceEquipo").on("click",function(){
    injectContentByName(ACTION_VER_JUGADORES_EQUIPO,"&id="+$(this).attr("id"));
  });
  //si se elige una opcion del selector de equipos en la vista de admin de equipos
  $("#PlayersSelectEquipo").on("change",function(){
    injectContentByName(ACTION_ADM_JUGADOR_TEAM,"&id="+$(this).val());
  });



}

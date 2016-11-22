function BindeosComentarios(){
  //Si se hace click en los botones para ir a la seccion de comentarios de los jugadores
  $("."+ACTION_COMENTARIOS_JUGADOR).on("click",function(){
    //obtenemos el id
    PlayOffs.ULTIMO_ID_JUGADOR = $(this).attr("data-id");
    injectContentByName(ACTION_COMENTARIOS_JUGADOR,"");
  });
}

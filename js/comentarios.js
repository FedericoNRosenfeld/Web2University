function getAPIComents(params){
  return $.get({url:URL_API_COMENTS+params,dataType:'json'});
}

function HTMLComentario(Coment){
  var HTML="<div><p>Valoracion:"+Coment.valoracion+"</p><p>"+Coment.comentario+"</p></div>";
  return HTML;
}

function HTMLTablaComentario(Coment){
  var HTML="<div><p>Valoracion:"+Coment.valoracion+"</p><p>"+Coment.comentario+"</p></div>";
  return HTML;
}

function CargarTablaComents(RefTabla){
  //obtenemos los comentarios
  getAPIComents("").success(function(data){
    var Html="";
    JSON.parse(data).forEach(function(coment){
      Html+=HTMLComentario(coment);
    });
    $("#"+RefTabla).html("Aca deberia cargarse una lista enorme de comentarios");
  }).error(function(){
    $("#"+REF_ID_AREA_COMENTARIOS).html(MSG_NO_COMENTS);
  });
}

function ActualizarComentarios(){
  //obtenemos los comentarios
  getAPIComents(PlayOffs.ULTIMO_ID_JUGADOR).success(function(data){
    var Html="";
    JSON.parse(data).forEach(function(coment){
      Html+=HTMLComentario(coment);
    });
    $("#"+REF_ID_AREA_COMENTARIOS).html(Html);
  }).error(function(){
    $("#"+REF_ID_AREA_COMENTARIOS).html(MSG_NO_COMENTS);
  });
}

function BindeosComentarios(){
  //Si se hace click en los botones para ir a la seccion de comentarios de los jugadores
  $("."+ACTION_COMENTARIOS_JUGADOR).on("click",function(){
    //obtenemos el id
    PlayOffs.ULTIMO_ID_JUGADOR = $(this).attr("data-id");
    injectContentByName(ACTION_COMENTARIOS_JUGADOR,"&id="+PlayOffs.ULTIMO_ID_JUGADOR);
    //llamamos a la funcion que mostrar los comentarios ActualizarBindeos
    PlayOffs.ID_INTERVALO_ACTUALIZA_COMENTARIOS=setInterval(function(){ ActualizarComentarios();}, INTERVALO_DE_ACTUALIZACION);

  });

  //si se hace click en admin comentarios
  $("#ADMComents").on("click",function(){
    injectContentByName($(this).attr("name"),"",CargarTablaComents(REF_TABLA_ADM_COMENTARIOS));
  });
}

$("document").ready(function(){
    injectContentByName("home","");
});

var PlayOffs = {
  ULTIMO_ID_JUGADOR:null,
  ULTIMO_ID_POSICION:null,
  ID_INTERVALO_ACTUALIZA_COMENTARIOS:null,
};

//funciones comunes
function injectContentByName(name,params,callback){
  // si ya hay un intervalo de actualizacion lo cancelamos
  if(PlayOffs.ID_INTERVALO_ACTUALIZA_COMENTARIOS !==null){
    clearTimeout(PlayOffs.ID_INTERVALO_ACTUALIZA_COMENTARIOS);
  }
  $.ajax({
    url:PREFIJO_ACTION+name+params,
    method:"GET",
    success: function(resultData){
      $("#mainContent").html(resultData);
      ActualizarBindeos();
      //si esta todo bien depues puedo ejecutar otra pagina
      callback;
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
    }
  });
}

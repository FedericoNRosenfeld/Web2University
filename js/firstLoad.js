$("document").ready(function(){
    injectContentByName("home","");
});

var PlayOffs = {
  ULTIMO_ID_JUGADOR:null,
  ULTIMO_ID_POSICION:null,
  ID_INTERVALO_ACTUALIZA_COMENTARIOS:null,
};

//funciones comunes
function injectContentByName(name,params){
  // si ya hay un intervalo de actualizacion lo cancelamos
  if(PlayOffs.ID_INTERVALO_ACTUALIZA_COMENTARIOS !==null){
    clearTimeout(PlayOffs.ID_INTERVALO_ACTUALIZA_COMENTARIOS);
  }
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

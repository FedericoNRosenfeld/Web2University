$("document").ready(function(){
  //se hace click en los elemntos de avegacion
  $(".navItem").click(function(){
    injectContentByName($(this).attr("name"),"");
  });
});

function injectContentByName(name,params){
  $.ajax({
    url:'index.php?action='+name+params,
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
    injectContentByName("ver_jugadores_equipo","&id="+$(this).attr("id"));
  });
}

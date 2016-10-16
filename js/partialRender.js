$("document").ready(function(){
  $(".navItem").click(function(){
    injectContentByName($(this).attr("name"));
  });
});

function injectContentByName(name){
  $.ajax({
    url:'index.php?action='+name,
    method:"GET",
    dataType:"html",
    success: function(resultData){
      $("#mainContent").html(resultData);
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
    }
  });
}

$(document).ready(function(){
  $("#underlay").hide();
  $("#neibr").click(function(){
      $("#neibr").fadeOut(500);
      $("#particles-js").fadeOut(500);
      $("#underlay").fadeIn(1000);
  });
});

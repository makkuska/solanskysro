$(document).ready(function(){ 
  $.get("header.html", function(data) {
    $("#header").html(data);
  });
}); 


$(document).ready(function(){ 
  $.get("head.html", function(data) {
    $("#head").html(data);
  });
}); 

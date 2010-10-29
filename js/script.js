$(document).ready(function(){
  
  $("#nav #bar #glintContainer").delay(100).animate({
    "height" : "0",
    "opacity" : ["0" , "swing"]
  }, 420, "linear", function() {});
    
  $("#nav #bar #glintContainer .glint").animate({
    "left" : "+=27px",
    "top" : "-=35px",
    "opacity" : ["1" , "swing"]
  }, 200, "linear", function() {
    $(this).animate({
      "left" : "+=27px",
      "top" : "-=35px"
    }, 200, "linear", function() {
      $("#nav #bar #glintContainer").remove();
      $("header #mainAreaContainer").animate({
        "height" : "406px"
      }, 500, function() {
      });
      $("header #mainArea").animate({
        "opacity" : "1"
      }, 1000, function() {});
      $("#nav #bar .rightBar").animate({
        "width" : "-=307px"
      }, 500, function() {});
      $("#nav #bar .leftBar").animate({
        "width" : "-=305px"
      }, 500, function() {
        $("#nav .navCover").animate({
          "opacity" : "0"
        }, 1000, function() {
          $("#nav .navCover").remove();
        });
      });
    });
  });
});
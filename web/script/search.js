$(document).ready(function() {
  $("#input").keyup(function() {
    var title = $("#input").val();
    $("#titles").load("script/loadtitles.php", {
      titleNew: title
    });
  });
});

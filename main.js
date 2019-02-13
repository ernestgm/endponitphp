$(document).ready(function() {
  $("#calculator").on( "submit", function( event ) {
    event.preventDefault();

    var info = { values : [ $('#value1').val(), $('#value2').val()], operation: $('#operation').val() };

    $("#info").show();
    $("#error").hide();

    $.ajax({
      type: "POST",
      data: info,
      url: "http://localhost:8085/endponitphp/main.php",
      success: function(msg){
        $("#info").hide();
        var result = JSON.parse(msg);
        if (result.Status == 'OK'){
          $("#result").val(result.Result);
        }else{
          $("#error").show();
        }
      }
    });

  });
});

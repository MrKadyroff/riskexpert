$(document).ready(function(){
    $("#gruz").submit(function() {
        var form_data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "menu.php",
        data: form_data,
        success: function() {
               
        } 
      });
    });
});
<?php get_header(); ?>
<body>
<div id="test"></div>
  
  <script>
        $.ajax({    //create an ajax request to load_page.php
      type: "GET",
      url: "http://mauricioramos.mx/ajax-galerias?id_post=36",             
      success: function(response){    
        console.log('Exito');     
        var galeria = $.parseJSON(response);
        console.log(galeria);
        $('#test').html(galeria);
      },
      complete: function() {
            console.log("Mission complete");
      }

    });
  </script>
</body>
</html>
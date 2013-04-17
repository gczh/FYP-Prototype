<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="http://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
<script>
  /**
  * Basic Map
  */
  $(document).ready(function(){
   var map = new GMaps({
      el: '#basic_map',
      lat: 51.5073346,
      lng: -0.1276831,
      zoom: 12,
      zoomControl : true,
      zoomControlOpt: {
          style : 'SMALL',
          position: 'TOP_LEFT'
      },
      panControl : false,
    });
   // JavaScript
    // jQuery
    function jqUpdateSize(){
        // Get the dimensions of the viewport
        var width = $(window).width();
        var height = $(window).height();

        $('body').css('width', width);
        $('body').css('height', height);
    };
    $(document).ready(jqUpdateSize);    // When the page first loads
    $(window).resize(jqUpdateSize);     // When the browser changes size

});
</script>
<style>
  body {
    
  }
</style>
</head>
<body>
  <div id="basic_map" style="width: 100%; height: 100%"></div>
</body>
</html>
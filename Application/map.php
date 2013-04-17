<?php

//mysql_select_db("KnowLife", $db);


?>
<!--
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta name="apple-mobile-web-app-capable" content="yes">
            <link rel="stylesheet" href="JQuery/jquery.mobile-1.3.0.css" />
            <link rel="stylesheet" href="resources/css/basic-jqm-gallery-page.css" />
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
            <title>Maps Example</title>
-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="util.js"></script>
<script type="text/javascript">

  var infowindow;
  var map;

  function initialize() {
    var myLatlng = new google.maps.LatLng(37.390038 , -122.042030);
    var myOptions = {
      zoom: 13,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    downloadUrl("generate_xml.php", function(data) {
      var markers = data.documentElement.getElementsByTagName("marker");

      console.log(markers.length);
      for (var i = 0; i < markers.length; i++) {
        var latlng = new google.maps.LatLng(
          parseFloat(markers[i].getAttribute("lat")),
          parseFloat(markers[i].getAttribute("lng")));
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
        var marker = createMarker(name, address, latlng);
       }
     });
  }

  function createMarker(name, address, latlng) {
    var contentString = name + "<br>" + address + "</br>";
    var marker = new google.maps.Marker({position: latlng, map: map});
    google.maps.event.addListener(marker, "click", function() {
      if (infowindow) infowindow.close();
      infowindow = new google.maps.InfoWindow();
      infowindow.setContent(contentString);
      infowindow.open(map, marker);
    });
    return marker;
  }

</script>
<!--
            <title>KnowLife Friendlist</title>
        </head>
      -->
        <body onload="initialize()" onunload="GUnload()">
            <!-- basic-jqm-gallery-page -->
            <div data-role="page" id="basic-jqm-gallery-page"><!-- page -->
                <div data-theme="" data-role="header" data-position="fixed"><!-- header -->
                    <a data-role="button" data-inline="true" data-rel="back" data-transition="fade" href="#" data-icon="arrow-l" data-iconpos="left">
                        Back
                    </a>
                    <h3>
                        Know Life
                    </h3>

                    <div data-role="navbar" data-iconpos="top">
                        <ul>
                            <li>
                                <a href="#" data-theme="" data-icon="home">
                                    Test
                                </a>
                            </li>
                            <li>
                                <a href="" data-theme="" data-icon="info">
                                    Test
                                </a>
                            </li>
                            <li>
                                <a href="#" data-theme="" data-icon="star" class="ui-btn-active ui-state-persist">
                                    Test
                                </a>
                            </li>
                            <li>
                                <a href="#" data-theme="" data-icon="grid">
                                    Testicl
                                </a>
                            </li>
                            
                        </ul>
                    </div>


                </div><!-- /header -->
                <div data-role="content"><!-- content -->
                    <div class="ui-grid-b">

                        
                        <div id="map_canvas" style="width: 100%; height: 510px"></div> 

                    </div>
                </div><!-- /content -->
                <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                    
                </div><!-- /footer -->
            </div><!-- /page -->
        </body>
    </html>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="JQuery/jquery.mobile-1.3.0.css" />
        <link rel="stylesheet" href="resources/css/basic-jqm-gallery-page.css" />

         <link rel="stylesheet" href="themes/AwesomeWeeliang.min.css" />
    <script src="vendors/jquery.mobile/jquery-1.7.1.min.js"></script>

        <script src="vendors/jquery.mobile/jquery.mobile-1.1.1.min.js"></script>
        <script type="text/javascript" src="util.js"></script>

        <title>KnowLife Home</title>


    
    
    
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

    </head>
    <body onload="initialize()" onunload="GUnload()">
        <style type="text/css">
         <style>

        #home .ui-content { padding-top: 22px; padding-bottom: 25px; margin: 0px 15px 10px 15px; }

#home .ui-listview { text-align: center; }
#home .ui-listview .ui-btn {
    width: 75px;
    display: inline-block;
    background: url(resources/images/home_buttons.png) no-repeat 0px 0px;
    border: none;
    margin: 0px 5px 5px 0px;
}

#home .ui-listview .ui-btn {
    width: 75px;
    display: inline-block;
    background: url(resources/images/home_buttons.png) no-repeat 0px 0px;
    border: none;
    margin: 0px 5px 5px 0px;
}

#home .ui-listview img {
    width: 100%;
    
}

#home .ui-listview .ui-btn .ui-li { border: none; }
#home .ui-listview .ui-btn .ui-li .ui-icon { display: none; }
#home .ui-listview .ui-btn .ui-li .ui-link-inherit { font-size: .8em; font-weight: normal; padding: 80px 0px 0px 0px; text-align: center; }

#home .ui-listview .ui-btn.btn_a { background-position: 0px 0px; }
#home .ui-listview .ui-btn.btn_s { background-position: -85px 0px; }
#home .ui-listview .ui-btn.btn_l { background-position: -170px 0px; }
#home .ui-listview .ui-btn.btn_c { background-position: -255px 0px; }

#border {
border-bottom: 1px;
border-style: solid;
border-color: black;
background-color:;
padding-bottom: 25px;
padding-top: 22px;
width:100%;

} 





        </style>
        
       
    




        </style>

        <!-- basic-jqm-gallery-page -->
        <!-- page --> <div data-role="page" id="home" data-theme="a">

            <div data-theme="" data-role="header" data-position="fixed"><!-- header -->
                
                <h3>
                    Know Life
                </h3>


            </div><!-- /header -->


            
            <div data-role="content" id="border"> 
             
                <ul data-role="listview">
                    <li class="btn_a"><a href="event1.html">Spice</a></li>
                    <li class="btn_s"><a href="#event2.html">IT show</a></li>
                    <li class="btn_l"><a href="#event3.html">info olympic</a></li>
                    <li class="btn_c"><a href="#event4.html">nss alumni </a></li>
                </ul>
                

            </div>
            
            <!--Place map here -->
            <!-- <div id="map_canvas" style="width: 100%; height: 300px"></div>  -->

            <!-- <img src="resources/images/map.png" style="width:100%; height:450px" /> -->
            <?php
              include('includeMap.php');
              include('footer.php');
            ?>

         
            </div><!-- /content -->
            
        </div><!-- /page -->
    </body>
</html>
<?php

$view = $_GET['view'];
$menu_state = array(0=>"", 1=>"groups", 2=> "friends", 3=>"nearby");

for($i=0; $i<sizeof($menu_state); $i++) {
    if($view == $menu_state[$i]) {
        $menu_state[$i]="class=\"ui-btn-active ui-state-persist\"";
    } else {
        $menu_state[$i] = "";
    }
}

echo "end menu state";
echo $view;



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="JQuery/jquery.mobile-1.3.0.css" />
        <link rel="stylesheet" href="resources/css/basic-jqm-gallery-page.css" />
        <script src="JQuery/jquery-1.9.1.min.js"></script>
        <script src="JQuery/jquery.mobile-1.3.0.min.js"></script>
        
        <title>KnowLife Friendlist</title>
    </head>
    <body>
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
                            <a href="tester.php?view=" data-theme="" data-icon="home" <?php echo $menu_state[0] ?>>
                                World
                            </a>
                        </li>
                        <li>
                            <a href="tester.php?view=groups" data-theme="" data-icon="info" <?php echo $menu_state[1] ?>>
                                Groups
                            </a>
                        </li>
                        <li>
                            <a href="tester.php?view=friends" data-theme="" data-icon="star" <?php echo $menu_state[2] ?>>
                                Friends
                            </a>
                        </li>
                        <li>
                            <a href="tester.php?view=nearby" data-theme="" data-icon="grid" <?php echo $menu_state[3] ?>>
                                Nearby
                            </a>
                        </li>
                        
                    </ul>
                </div>


            </div><!-- /header -->
            <div data-role="content"><!-- content -->
                <div class="ui-grid-b">
                  
                  <?php

                    // all other parts of the application should remain the same.
                    // this one filters the requests or the friends view.

                    echo "begin view state";


                    if ($view == "groups") {

                        echo "i am groups!";

                        // //host, username, password
                        // $server_username = "root";
                        // $server_password = "root";
                        // $server_hostname = "localhost"; 

                        // //connection to the database
                        // $dbhandle = mysql_connect($server_hostname, $server_username, $server_password) 
                        //     or die("Unable to connect to MySQL");
                        // echo "Connected to MySQL<br>";

                        // //select a database to work with
                        // $selected = mysql_select_db("KnowLife",$dbhandle) 
                        //     or die("Could not select KnowLife");
                        // echo "Selected KnowLife<br>";

                        // //execute the SQL query and return records
                        // $result = mysql_query("SELECT * FROM Users");

                        // echo "continuing..";

                        // echo "<div class=\"ui-grid-b\">";

                        // while ($row = mysql_fetch_array($result)) {
                        //     echo '<div class="ui-block-b"><img src="'. $row{'user_picture'} .'"/></div>';   
                        // }

                        // echo "</div>";

                    } else if ($view == "friends") {
                        echo "my friends are here! hoorahh!";
                    } else if ($view == "nearby") {
                        echo "Something's nearby! ugh!?";
                    } else {
                        echo "we don't know what you're looking for, please head back?";
                    }
                  ?>
                     
                </div>
            </div><!-- /content -->
            <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                <h3>Hah</h3>
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
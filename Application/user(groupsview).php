<?php

//basic functions



    //host, username, password
    $server_username = "root";
    $server_password = "root";
    $server_hostname = "localhost"; 

    //connection to the database
    $dbhandle = mysql_connect($server_hostname, $server_username, $server_password) 
        or die("Unable to connect to MySQL");
    echo "Connected to MySQL<br>";

    //select a database to work with
    $selected = mysql_select_db("KnowLife",$dbhandle) 
        or die("Could not select KnowLife");
    echo "Selected KnowLife<br>";

    //execute the SQL query and return records
    $result = mysql_query("
        SELECT * FROM groups
        inner join user_group on user_group.group_id=groups.group_id
        where user_id=1
        ");
    
    // if (!$con)
    // {
    //  echo "we can't connect to the db!!";
    // }
    // else{

    //  //connect to the database, named "KnowLife" with the connection established with sql server
    //  mysql_select_db("KnowLife", $con);

    //  //write up our query first
    //  $query = "SELECT * FROM `Users`";

    //  // Perform Query and store results in $result var.
    //  $result = mysql_query($query);

    //  if (!$result) {
    //      echo "strangely, there is something wrong with our data";
    //  } else {
    //      //while there are records, we will obtain it and store it in an array named $posts
    //      while ($row = mysql_fetch_assoc($result)) 
    //      {

    //          $rows[] = array(
    //                  'user_id'       => $row['user_id'];
    //                  'created_date'  => $row['created_date'],
    //                  'username'      => $row['username'],
    //                  'password'      => $row['password'],
    //                  'nric'          => $row['nric'],
    //                  'age'           => $row['age'],
    //                  'gender'        => $row['gender'],
    //                  'email'         => $row['email'],
    //                  'user_picture'  => $row['user_picture']
    //              );
    //      }

    //      return $rows;
    //  }

    //  mysql_free_result($result);
    //  mysql_close($con);

    //  // we are not using json!
    //  // header('Content-type: application/json');
    //  // echo json_encode(array('posts'=>$posts));

//  } //end of if-else (determines if mysql connection is up)
// } //end of get_users()


//if it is all users

// $users[] = get_users();

// echo "start";

//if it is groups


//if it is nearby


//if it is favorite


?>

<!-- <table>
    <thead>
        <tr>
            <th>user_id</th>
            <th>created_date</th>
            <th>username</th>
            <th>password</th>
            <th>nric</th>
            <th>age</th>
            <th>gender</th>
            <th>email</th>
            <th>user_picture</th>
        </tr>

    </thead>
    <tbody> -->
        <?php
        echo "continuing..";
         //fetch tha data from the database
        // while ($row = mysql_fetch_array($result)) {
        //  echo "<tr><td>" . $row{'user_id'} . "</td>";
     //        echo "<td>" . $row{'created_date'} . "</td>";
     //        echo "<td>" . $row{'username'} . "</td>";
     //        echo "<td>" . $row{'password'} . "</td>";
     //        echo "<td>" . $row{'nric'} . "</td>";
     //        echo "<td>" . $row{'age'} . "</td>";
     //        echo "<td>" . $row{'gender'} . "</td>";
     //        echo "<td>" . $row{'email'} . "</td>";
     //        echo "<td>" . $row{'user_picture'} . "</td></tr>";
        // }

        ?>  
    <!-- </tbody> -->

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
                            <a href="#" data-theme="" data-icon="home">
                                World
                            </a>
                        </li>
                        <li>
                            <a href="KnowLifeGroups.html" data-theme="" data-icon="info">
                                Groups
                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="" data-icon="star" class="ui-btn-active ui-state-persist">
                                Friends
                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="" data-icon="grid">
                                Nearby
                            </a>
                        </li>
                        
                    </ul>
                </div>


            </div><!-- /header -->
            <div data-role="content"><!-- content -->
                <div class="ui-grid-b">
                    echo "continuing..";
                    <?php
                        while ($row = mysql_fetch_array($result)) {
                            echo '<div class="ui-block-b"><img src="'. $row{'user_picture'} .'"/><br>'. $row['user_id'] . '</div>';   
                        } 

                    ?>

                </div>
            </div><!-- /content -->
            <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
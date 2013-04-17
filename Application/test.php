<?php

//connect to the database, named "KnowLife" with the connection established with sql server
    require_once('connectDb.php');


// if you're requesting to view a friend's profile...
//$user_id = $_GET['user_id'];

// if(isset($_GET['user_id'])) {
//     echo $_GET['user_id'];
// }

// This helps us to set the appropriate menu item to active.
// this suppresses undefined index warning BUT it's troublesome to fix the others. line 188, 195...
//if(isset($_GET['view'])) {
    $view = $_GET['view'];
//}
$menu_state = array(0=>"", 1=>"groups", 2=> "friends", 3=>"nearby");

for($i=0; $i<sizeof($menu_state); $i++) {
    if($view == $menu_state[$i]) {
        $menu_state[$i]="class=\"ui-btn-active ui-state-persist\"";
    } else {
        $menu_state[$i] = "";
    }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="vendors/jquery.mobile/jquery.mobile-1.1.1.min.css"/>
        <link rel="stylesheet" href="resources/css/basic-jqm-gallery-page.css" />
    <script src="vendors/jquery.mobile/jquery-1.7.1.min.js"></script>
        <script src="vendors/jquery.mobile/jquery.mobile-1.1.1.min.js"></script>
         <link rel="stylesheet" href="resources/css/list-of-cards.css" />

        <title>KnowLife Friendlist</title>


<style>#list-of-cards .search-form {
    padding-left: 8px;
    padding-right: 8px;
    display: block;
    }
#list-of-cards [data-role="content"] {
    padding: 0px 5px 0px;
    }
        

[data-role="list-of-cards"] {
    list-style: none;
    list-style-position: inside;
    margin-left: 0;
    margin-top: 8px;
    padding-left: 0;
    }
    [data-role="list-of-cards"] > li {
        width: 50%;
        float: left;
        }
        [data-role="list-of-cards"] > li > ul {
            margin: 5px !important;
            }
            
    @media only screen and (min-width: 321px) /*for landscape*/{
        [data-role="list-of-cards"] > li {
            width: 50%;
            }
    }

    /* cards */
.loc-card {}
.loc-card .loc-image /*  li  */ {
    padding: 5px !important;
    margin-bottom: 0px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom: none !important;
    }
    .loc-card .loc-image img {
        width: 100%;
        border-radius: 2px;
        }
        
.loc-card .loc-credits  /*  li  */ {
    padding-left: 46px !important;
    padding-top: 0px !important;
    height: 52px !important;
    border-top: none !important;
    margin-top: -8px !important;
    }
    .loc-card .loc-credits .ui-li-heading {
        font-size: 13px;
        padding-top: 4px;
        }
    .loc-card .loc-credits .ui-li-thumb {
        border-radius: 2px;
        }
    
.loc-card .loc-comments  /*  li  */ {
    margin-top: -8px !important;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    }
    
    
.loc-card li {
    padding-bottom: 0px !important;
    min-height: 0px !important;
    background-image: none;
    background-color: -webkit-linear-gradient(#fff,#fff);
    }
    
.loc-card .ui-btn-inner {
    background: #fff !important;
    color: #222 !important;
    text-shadow: none !important;
    }
    
.loc-card .ui-li-thumb {
    max-height: 34px;
    max-width: 34px;
    top: 5px;
    left: 5px;
    }

.link-me  a:hover {
    border: 5px solid grey;
}

    <?php

        if($view=='nearby') {
            echo ".ui-content { padding: 0; }";
        }

    ?>

</style>

    </head>
    <body <?php if($view=='nearby') { echo 'onload="initialize()" onunload="GUnload()"';} ?>>
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
                            <a href="test.php?view=" data-theme="" data-icon="home" <?php echo $menu_state[0] ?>>
                                World
                            </a>
                        </li>
                        <li>
                            <a href="test.php?view=groups" data-theme="" data-icon="info" <?php echo $menu_state[1] ?>>
                                Groups
                            </a>
                        </li>
                        <li>
                            <a href="test.php?view=friends" data-theme="" data-icon="star" <?php echo $menu_state[2] ?>>
                                Friends
                            </a>
                        </li>
                        <li>
                            <a href="test.php?view=nearby" data-theme="" data-icon="grid" <?php echo $menu_state[3] ?>>
                                Nearby
                            </a>
                        </li>
                        
                    </ul>
                </div>


            </div><!-- /header -->
            <div data-role="content"><!-- content -->
                <?php if($view == '' || $view =='friends') echo "<div class=\"ui-grid-b\">"; ?>
                  
                  <?php

                    // all other parts of the application should remain the same.
                    // this one filters the requests or the friends view.

                  if($view == "") {
                        //execute the SQL query and return records
                        $result = mysql_query("SELECT * FROM Users");

                        // echo "continuing..";

                        echo "<div class=\"ui-grid-b\">";

                        $incrementMargin = 0;
                        $imgCounter = 1;                            

                        while ($row = mysql_fetch_array($result)) {
                            if($imgCounter % 4 == 0)
                            {
                                $incrementMargin = 4;
                                $imgCounter = 1;
                            }

                            echo '<a class="link-me" href="test.php?user_id='. $row{'user_id'} .'"><div class="ui-block-b" style="margin-top:' . $incrementMargin . '""><img src="'. $row{'user_picture'} .'"/></div></a>';  

                            $imgCounter++;
                        }

                        echo "</div>";
                    } else if ($view == "groups") {
                        //echo "groups here ;)";
                    ?>
                    
                    <!-- list of cards -->
                    <ul data-role="list-of-cards" data-divider-theme="b" data-inset="true">


                    <li>
                        

                    </li>
                    <!-- card #1 -->
                    <li data-theme="c">
                        <ul data-role="listview" data-inset="true" class="loc-card">
                            <li class="loc-image">
                                <div>
                                    <img src="resources/images/cheese.png"/>
                                </div>
                            </li>
                            <li class="loc-credits">
                                <img src="resources/images/profile-01.png"/>
                                <h3>Porta tristique et in et</h3>
                                <p>by <a href="#">sandra</a>.</p>
                            </li>   
                            <li class="loc-comments">
                                <p>2 comments, 4 likes</p>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <!-- card #2 -->
                    <li data-theme="c">
                        <ul data-role="listview"  data-inset="true" class="loc-card">
                            <li class="loc-image">
                                <div>
                                    <img src="resources/images/peppers.png"/>
                                </div>
                            </li>
                            <li class="loc-credits">
                                <img src="resources/images/profile-02.png"/>
                                <h3>Rhoncus elementum porta </h3>
                                <p>by <a href="#">stella</a>.</p>
                            </li>
                            <li class="loc-comments">
                                <p>12 comments, 8 likes</p>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <!-- card #3 -->
                    <li data-theme="c">
                        <ul data-role="listview"  data-inset="true" class="loc-card">
                            <li class="loc-image">
                                <div>
                                    <img src="resources/images/tomatos.png"/>
                                </div>
                            </li>
                            <li class="loc-credits">
                                <img src="resources/images/profile-03.png"/>
                                <h3>Nunc nunc velit arcu</h3>
                                <p>by <a href="#">albert</a>.</p>
                            </li>
                            <li class="loc-comments">
                                <p>0 comment, 0 likes</p>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <!-- card #4 -->
                    <li data-theme="c">
                        <ul data-role="listview"  data-inset="true" class="loc-card">
                            <li class="loc-image">
                                <div>
                                    <img src="resources/images/glasses.png"/>
                                </div>
                            </li>
                            <li class="loc-credits">
                                <img src="resources/images/profile-04.png"/>
                                <h3>Porta tristique, et in et</h3>
                                <p>by <a href="#">leonard</a>.</p>
                            </li>
                            <li class="loc-comments">
                                <p>1 comments, 6 likes</p>
                            </li>
                        </ul>
                    </li>
                </ul>


                    <?php
                    } else if ($view == "friends") {
                        // echo "my friends are here! hoorahh!";

                        //execute the SQL query and return records
                        $result = mysql_query("
                            select * from users inner join user_friendship on user_friendship.target_user_id=users.user_Id where user_friendship.curr_user_id=1
                            ");

                        // echo "continuing..";
                    
                        $incrementMargin = 0;
                        $imgCounter = 1;
                        while ($row = mysql_fetch_array($result)) {
                            if($imgCounter % 4 == 0)
                            {
                                $incrementMargin = 4;
                                $imgCounter = 1;
                            }
                            //echo 'c' . $imgCounter . 'm' . $incrementMargin;
                            echo '<div style="margin-top:' . $incrementMargin . '" class="ui-block-b"><a class="link-me" href="test.php?user_id='. $row{'user_id'} .'"><img src="'. $row{'user_picture'} .'"/></a><br></div>';   

                            $imgCounter++;
                        }


                    } else if ($view == "nearby") {
                        //echo "Something's nearby! ugh!? LOADING MAPS";
                        include('includeMap.php');
                        //echo 'map is working! yay';
                    } else if (isset($user_id)) {
                        echo $user_id;
                    } else {
                        echo "we don't know what you're looking for, please head back?";
                    }
                  ?>
                     
                <?php if($view=='' || $view == 'friends') echo "</div>"?>
            </div><!-- /content -->
            <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
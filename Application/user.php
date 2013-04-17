<?php

//connect to the database, named "KnowLife" with the connection established with sql server
    require_once('connectDb.php');


// This helps us to set the appropriate menu item to active.
$view = $_GET['view'];
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
                
            </div><!-- /content -->
            <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
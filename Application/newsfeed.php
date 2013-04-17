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

    <!-- for the slideleft -->
<!-- 
    <link rel="stylesheet" href="resources/css/jquery.mobile-1.0rc2.min.css" /> -->
    <link rel="stylesheet" href="resources/css/main.css?v=31" />

    
        
        <title>KnowLife Friendlist</title>
    </head>
    <body>

        <div id="menu">
        <h3>Menu</h3>
            <ul>
                <li class="active"><a href="#home" class="contentLink">Home </a></li>
                <li><a href="#home" class="contentLink">About </a></li>
                <li><a href="#home" class="contentLink">Portfolio </a></li>
                <li><a href="#home" class="contentLink">Contact </a></li>
            </ul>
        </div>


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
                            <a href="#" data-theme="" data-icon="star" >
                                Friends
                            </a>
                        </li>
                        <li>
                            <a href="#" data-theme="" data-icon="grid" class="ui-btn-active ui-state-persist">
                                Nearby
                            </a>
                        </li>
                        
                    </ul>
                </div>


            </div><!-- /header -->
            <div data-role="content"><!-- content -->
                <div class="ui-grid-b">
                    <div class="ui-block-b">
                        <img src="reso  urces/images/img1.jpg"/>
                    </div>
                    <div class="ui-block-b">
                        <img src="resources/images/img2.jpg"/>
                    </div>
                    <div class="ui-block-b">
                        <img src="resources/images/img3.jpg"/>
                    </div>
                    

                    <div class="ui-block-b">
                        <img src="resources/images/img15.jpg"/>
                    </div>
                </div>
                <div class="ui-block-b">
                    <h4>hi</h4>
                </div>
            </div><!-- /content -->
            <div data-theme="a" data-role="footer" data-position="fixed"><!-- footer -->
                
            </div><!-- /footer -->
        </div><!-- /page -->
    </body>
</html>
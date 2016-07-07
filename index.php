<!Doctype HTML>
<html>
    <head>
        <title>NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">


            <!--            Header        -->


            <div class="row header">


                <!--                Logo with NavBar       -->


                <div class="row navigation">
                    <div class="col-md-4 logo float-left">
                        <h1><a href="index.php">nepal tour</a></h1>
                    </div>
                    <div class="row" class="float-left">
                        <a href="login.php">
                            <div class="col-md-offset-10 login">
                                login
                            </div>
                        </a>
                        <div class="row ">
                            <div class="col-md-offset-7">
                                <nav>
                                    <?php
                                    $menu_texts = array(
                                        "index.php" => "Home",
                                        "services.php"=>"Services",
                                        "downloads.php" => "Downloads",
                                        "gallery.php"=>"Gallery",
                                        "contact.php"=>"Contact Us"
                                    );
                                    $dropdown = array(
                                        "guide.php"=>"Guide","hotel.php"=>"Hotels","tickets.php"=>"Tickets",
                                    );
                                    ?>
                                    <?php
                                    echo"<ul class=\"nav navbar-pills nav-pills\">";
                                    foreach ($menu_texts as $index => $text) {                                      
                                        if ($index == "services.php") {
                                            echo"<li class =\"dropdown\">";
                                            echo"<a href=\"#\" class=\"dropbtn\">" . $text . "</a>";
                                            echo"<div class=\"dropdown-content\">";
                                            foreach ($dropdown as $dd=>$down) {
                                                echo"<a href=\"". $dd ."\">" . $down . "</a>";
                                            }
                                            echo"</div>";
                                            echo"</li>";
                                        } else {
                                            echo "<li><a href =\" " . $index . "\">" . $text . "</a></li>";
                                        }
                                    }
                                    echo"</ul>";
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="banner">
                    <img src="images/annapurna.png" alt=""/>
                </div>
            </div>


            <!--            Quick Access        -->


            <div class="row quick-access">
                <div class="col-md-offset-3">
                    <div class="image float-left">
                        <a href="travel.php"><img src="images/Travel.jpg" alt="Travel" height="150px" width="170px" class="img-circle float-left"/>
                            <p class="text">Travel</p></a>
                    </div>
                    <div class="image float-left">
                        <a href="hotel.php"><img src="images/hotel.jpg" alt="Hotel" height="150px" width="170px" class="img-circle float-left"/>
                            <p class="text">Hotel</p></a>
                    </div>
                    <div class="image float-left">
                        <a href="guide.php"><img src="images/Guide.png" alt="Guide" height="150px" width="170px" class="img-circle guides float-left"/>                        
                            <p class="text">Guide</p></a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <!--            Location Map        -->


            <div class="row location">
                <div class="col-md-7">
                    <img src="images/map.png" alt="maps" class="map-nav"/>
                </div>
                <div class="col-md-5">
                    <p>We provide maps get one for you by signing up <a href="signup.php">here</a></p>
                </div>
            </div>


            <!--      Footer    -->


            <?php
                                    include 'slice/footer.php';
            ?>
        </div>
    </body>
</html>
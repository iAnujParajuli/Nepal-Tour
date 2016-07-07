            <style>
                .navigation, .row>.nv {
                    width: 1170px;
                    position: relative;
                    margin-top: 0px;
                    margin-left: 0px;
                    margin-right: 0px;
                    background: #000;
                    opacity: 0.9;
                }
                .logo h1{
                    color: #fff;
                    margin-top: 5px;
                    margin-left: 10px;
                }
                .navb{
                    width: 100%;
                    margin-top: 19px;
                }
                .nav{
                    margin-left: 60px;
                    padding-top: 25px;
                    padding-bottom: 0px;
                }
            </style>
<div class="row navigation">
    <div class="row nv" class="float-left">
        <div class="row ">
            <div class="col-md-10">
                
                    <div class="col-md-5 logo float-left">
                        <h1><a href="index.php">nepal tour</a></h1>
                    </div>
                <div class="col-md-offset-7 navb">
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
                                        "guide.php"=>"Guide",
                                        "hotel.php"=>"Hotels",
                                        "tickets.php"=>"Tickets",
                                    );
                                    ?>
                                    <?php
                                    echo"<ul class=\"nav navbar-pills nav-pills\">";
                                    foreach ($menu_texts as $index => $text) {                                      
                                        if ($index == "services.php") {
                                            echo"<li class =\"dropdown\">";
                                            echo"<a href=\"#\" class=\"dropbtn\">" . $text . "</a>";
                                            echo"<div class=\"dropdown-content\">";
                                            foreach ($dropdown as $link=>$down) {
                                                echo"<a href=\"". $link ."\">" . $down . "</a>";
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
    </div>
    <div class="clear"></div>
</div>
<!Doctype HTML>
<html>
    <head>
        <title>Hotels || NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <?php
            include 'slice/navbar-fix.php';
            ?>
            <div class="row">
                <div class="row hotel">
                    <h3 class="head">Book A Hotel</h3>
                </div>
                <aside class="col-md-4 categories">
                    <table>
                        <th>Categories</th>
                        <tr><td><a href="#">5 STAR<div class="star">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo"<i class=\"fa fa-star\"></i>";
                                    }
                                    ?></div>
                                </a></td></tr>
                        <tr><td><a href="#">4 STAR <div class="star">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($i < 4)
                                            echo"<i class=\"fa fa-star\"></i>";
                                        else
                                            echo"<i class=\"fa fa-star-o\"></i>";
                                    }
                                    ?></div>
                                </a></td></tr>
                        <tr><td><a href="#">3 STAR<div class="star">
                                <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($i < 3)
                                            echo"<i class=\"fa fa-star\"></i>";
                                        else
                                            echo"<i class=\"fa fa-star-o\"></i>";
                                    }
                                    ?></div>
                                </a></td></tr>
                        <tr><td><a href="#">2 STAR<div class="star">
                                <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($i < 2)
                                            echo"<i class=\"fa fa-star\"></i>";
                                        else
                                            echo"<i class=\"fa fa-star-o\"></i>";
                                    }
                                    ?></div>
                                </a></td></tr>
                        <tr><td><a href="#">1 STAR<div class="star">
                                <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($i < 1)
                                            echo"<i class=\"fa fa-star\"></i>";
                                        else
                                            echo"<i class=\"fa fa-star-o\"></i>";
                                    }
                                    ?></div>
                                </a></td></tr>
                    </table>
                </aside>
                <aside class="col-md-offset-4 hotels">
                    <?php
                    $hotel = array(
                        "yaknyeti.jpg" => "Hotel Yak And Yeti",
                        "radisson.jpg" => "Radisson Hotel",
                        "ktmguest.jpg" => "Kathmandu Guest House",
                    );

                    foreach ($hotel as $images => $name) {
                        echo"<div class=\"imghotel\"><img src=\"images/" . $images . "\" class=\"img-thumbnail\"/></div>";
                        echo"<p class=\" caption\">" . $name . "</p>";
                    }
                    ?>
                </aside>
            </div>
            <?php
            include 'slice/footer.php';
            ?>
        </div>
    </body>
</html>

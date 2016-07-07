<!Doctype HTML>
<html>
    <head>
        <title>Gallery || NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>      
    </head>
    <body>
        <div class="container">
            <?php
            include 'slice/navbar-fix.php';
            ?>
            <h1 class="head">Airline Ticket</h1>
            <div class="row">
                <aside class="col-md-6">
                    <h3 class="tkt">International</h3>
                    <?php
                    $flight=array(
                        "Air India",
                        "Air China",
                        "Air Arabia",
                        "Jet Airways"
                    );
                    ?>
                    <ul class="list">
                        <?php         foreach ($flight as $flt): ?>
                        <li class="flight"><a href="#"><?=$flt ?></a></li>
                        <?php                                            endforeach; ?>
                    </ul>
                </aside>
                <aside class="col-md-offset-6 domestic">
                    <h3 class="tkt">Domestic</h3>
                    <?php
                    $flight_dom=array(
                        "Yeti Air",
                        "Tara Air",
                        "Buddha Air",
                        "Nepal Airlines",
                        "Saurya Airlines"
                    );
                    ?>
                    <ul class="list">
                        <?php         foreach ($flight_dom as $dom): ?>
                        <li class="flight dom"><a href="#"><?=$dom ?></a></li>
                        <?php                                            endforeach; ?>
                    </ul>
                </aside>
            </div>
            <h1 class="head">Bus Ticket</h1>

        <?php
        include 'slice/footer.php';
        ?>
    </div>
</body>
</html>
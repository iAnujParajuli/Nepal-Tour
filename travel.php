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
            <h1 class="head">Travel</h1>
            <div class="row travel">
            <?php
            $places = array(
                "solukhumbu",
                "pokhara",
                "jomsom",
                "lumbini",
                "chitwan",
                "ilam",
                "mustang",
                "<i class=\"fa fa-ellipsis-h\"></i>"
            );
            foreach ($places as $place):
                ?>
                <div class="col-md-5 back">
                    <p class="place"><?= $place ?></p>
                </div>
            <?php endforeach; ?>
            </div>

            <?php
            include 'slice/footer.php';
            ?>
        </div>
    </body>
</html>
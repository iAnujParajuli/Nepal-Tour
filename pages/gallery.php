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
<?php /*    <div class="row head">
            <h1>Gallery</h1>
            </div>
            <div class="row">
            <?php
            $image = array("everest.jpg", "mustang.jpg", "sarangkot.jpg", "rara.jpg", "cnp.jpg");
            foreach ($image as $img) {
                echo "<div class=\" col-md-5 img\">";
                ?>
                <?php echo"<img src=\"images/" . $img . "\"";
                echo "</div>";
            }
                ?>
            </div> */ ?>
                <?php
                include 'slice/footer.php';
                ?>
        </div>
    </body>
</html>
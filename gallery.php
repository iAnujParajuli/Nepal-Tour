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
            <div class="row head">
                <h1>Gallery</h1>
            </div>
            <div class="row images">
                <?php
                $image = array("Evererst Base Camp"=>"everest.jpg",
                    "Mountain View from Mustang"=>"mustang.jpg",
                    "Sunrise view in Sarangkot"=>"sarangkot.jpg",
                    "Rara Lake"=>"rara.jpg",
                    "Elephant ride in Chitwan National Park"=>"cnp.jpg"
                    );
                foreach ($image as $cap=>$img):
                    ?>
                    <div class="col-md-6">
                        <img src="images/<?= $img ?>" class="img img-responsive">
                        <div class="color"></div>
                        <p class="caption"><?=$cap ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            include 'slice/footer.php';
            ?>
        </div>
    </div>
</body>
</html>
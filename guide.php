<!Dcotype HTML>
<html>
    <head>
        <title>Guides || NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
        <?php
        include 'slice/navbar-fix.php';
        ?>
            <h3 class="head">Contact Our Guides Or Appoint them Online</h3>
        <?php
        $guide_name=array(
            "Hodor Hodor"=>"9801010000",
            "John Snow"=>"9801010001",
            "Twyrin Lannister"=>"9801010002",
            "Mia"=>"9801010003",
            "Sansa Stark"=>"9801010004",
            "Raul Acharya"=>"9801010005"
                );
        echo"<div class=\"row info\">";
        foreach ($guide_name as $name=>$num){
           
        echo"<div class=\"col-md-3 guide\">";
        echo"<i class=\"fa fa-user\"></i><p>".$name."<br> Contact:".$num."</p>";
        echo"</div>";
            }
        
        echo"</div>";
            ?>
            <h3 class="head">Find a guide by location</h3>
            <form class="searchbox" action="">
                <input type="text" name="location" Placeholder="Location" class="search"/>
                <button type="submit" class="btn-info"><i class="fa fa-search"></i></button>
            </form>
        <?php
        include 'slice/footer.php';
        ?>
        </div>
    </body>
</html>
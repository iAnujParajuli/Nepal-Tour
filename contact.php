<!Doctype HTML>
<html>
    <head><title>Contact Us || NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <?php
            include 'slice/navbar-fix.php';
            ?>
            <div class="row contact">
            <h3 class="head">Contact Us</h3>
            </div>
            <div class="row">
                <aside class="col-md-5 contact_info">
                <h1 class="logo">nepal tour</h1>
                <h6 class="add">Lonakthali, Bhaktapur</h6>
                <div class="detail_div">
                <i class="fa fa-phone"></i><p class="detail">(+977)9862024372</p>
                <div>
                <i class="fa fa-envelope"></i><p class="detail">nepaltour-info@gmail.com</p>
                </div>
                <div class="social">
                    <p class="detail">Follow Us On:</p><br> &nbsp;&nbsp;&nbsp;
                <a href="#"><i class="fa fa-facebook-official"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                </div>
                </div>
            </aside>
                <aside class="col-md-offset-5 contact_form">
                    <h4 class="head">We value your words <i class="fa fa-smile-o"></i></h4>
                <form action="mailto:nepaltour-info@gmail.com">
                    <div class="align"><p class="name">Name</p> <input type="text" name="name" placeholder="Name" class="input"/></div>
                    <div class="align"><p class="name">E-mail</p> <input type="email" name="email" placeholder="E-mail" class="input"/></div>
                    <div class="align"><p class="name">Phone</p> <input type="text" name="phone_number" placeholder="Phone Number" class="input"/></div>
                    <div class="align"><p class="name mess_label">Message</p> <textarea placeholder="Message" class="message"></textarea></div>
                    <input type="submit" value="Send" name="Send" class="send"/>
                </form>
            </aside>
            </div>
            <?php
            include 'slice/footer.php';
            ?>
        </div>
    </body>
</html>
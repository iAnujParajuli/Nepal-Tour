<head>
    <title>Login || NEPAL TOUR</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container loginpage">
        <div class="background">
            <img src="images/nepal.jpg" class="img"/>
        </div>
        <div class="color"></div>
        <a href="index.php"><i class="fa fa-home"></i><p class="logo">nepal tour</p></a>
        <div class="loginfrm">
            <div class="row">
                <h3 class="login_head">Login</h3>
            </div>
            <form action="welcome.php" method="get">
                <input type="email" name="email" placeholder="E-mail" class="input"/>
                <input type="password" name="pwd" placeholder="Password" class="input"/>
                <input type="checkbox" value="remember" class="chkbox"/> <p class="remember">Remember Me.</p>
                <button value="login" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>
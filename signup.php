<html>
    <head>
        <title>Sign Up || NEPAL TOUR</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <?php
            include 'slice/navbar-fix.php';
            ?>
            <div class="signup">   
                <div class="row">
                    <h3 class="head">Sign Up</h3>
                </div>
                <div class="row form">
                    <div class="col-md-6">
                        <form action="welcome.php" method="post">
                            First Name<input type="text" name="Fname" placeholder="First Name" class="input"/>
                            Last Name:<input type="text" name="Lname" placeholder="Last Name" class="input" />
                            Email:<input type="email" name="Email" placeholder="hello@something.com" class="input"/>
                            Password:<input type="password" name="pwd" placeholder="password" class="input" />
                            Date of Birth: <input type="date" name="Dob" placeholder="dob" class="input" />
                            Gender: <input type="radio" name="male" value="male" class="gdr"/>Male
                            <input type="radio" name="female" value="female" class="gdr"/>Female
                            <p>Nationality<select name="nationality" value="--select--" class="input">
                                    <?php
                                    $nationality = array(
                                        "US", "PAK", "SRI", "AFG", "UK", "JPN", "BRA", "HKG", "NEP", "FR", "CHN"
                                    );
                                    sort($nationality);
                                    foreach ($nationality as $value) {
                                        echo"<option value=" . $value . ">" . $value . "</option>";
                                    }
                                    ?>
                                </select>
                            </p>
                            <p>
                                Identity Type: <input type="radio" value="citizenship" class="id"/>Citizenship
                                <input type="radio" value="Passport" class="id"/>Passport
                            </p>
                            <p>Identity Number: <input type="text" name="IDNum" class="input"></p>
                            <input type="submit" value="Submit" class="submit"/>
                        </form>
                    </div>
                </div>

            </div>
            <?php
            include 'slice/footer.php';
            ?>

        </div>
    </body>
</html>

<!doctype html>
<?php
include adminsecurity.php
?>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> Cookie Cutter- Home Page</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />

</head>

<body>
    <div id="Container">

        <div id="header">
            <img src="Images/cookielogo.png" alt="company logo" width="170" height="107" align="left">
            <h1 align="center">Cookie Cutter.com </h1>
            <h2> "Cookie Cutter.com is dedicated to our customers unique cutting needs"</h2>

            <hr />

        </div>

        <div id="content">
            <div id="Navigation">
                <h3 align="center">Site Menu</h3>
                <ul>

                    <li><a href="index.php">Home</a></li>
                    <li><a href="FAQ's.php">FAQ's</a></li>
                    <li><a href="Join.php">Join Today!</a></li>
                    <li><a href="login.php">Login</a></li>


                </ul>

            </div>
            <div id="main">




                <div class="login-box">
                    <h6>Login</h6>
                    <hr />
                    <form action="authorize.php" method="post" name="form1" id="form1">

                        <div clas="textbox">
                            <input type="text" name="Username" id="Username">


                        </div>
                        <div clas="textbox">
                            <input type="Password" name="Password" id="password">

                            <div id="LoginLinks">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="Join.php">Join</a></li>
                            </div>
                        </div>

                        <input type="submit" name="Login" id="Login" value="Login">
                    </form>


                    <hr />

                </div>



            </div>

        </div>
    </div>
</body>

</html>

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
            <script src="JavaScript/FormProcess.js"></script>
            <form id="Form" action="login.php" method="post" onsubmit="return FormProcess()">
                <div id="main">




                    <div class="login-box">
                        <div id="special">
                            <h6>Join!</h6>
                        </div>
                        <hr />

                        <div clas="textbox">

                            <input id="Username" type="text" placeholder="Username" name="Username" required>


                        </div>
                        <div clas="textbox">
                            <input id="Password" type="text" placeholder="Password" name="Password" required>


                        </div>
                        <div clas="textbox">
                            <input id="Confirm" type="text" placeholder="Confirm Password" name="Confirm" required>


                        </div>

                        <div clas="textbox">
                            <input id="E-Mail" type="text" placeholder="E-Mail Address" name="E-Mail" required>


                        </div>


                        <input class="check" type="checkbox" name="box"> <label for="box">subscribe for more mail</label>
                        <br />

                        <input class="btn" type="submit" name="submit" value="Submit">


                        <hr />

                    </div>
                </div>
            </form>



        </div>

    </div>


</body></html>

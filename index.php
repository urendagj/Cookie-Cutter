<?php 
     session_start();
?>
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
            Welcome <?php if (isset($_SESSION['username'])) {print $_SESSION['username']; } ?> to Cookie Cutter.com
            <h2> "Cookie Cutter.com is dedicated to our customers unique cutting needs"</h2>

            <hr />

        </div>
        <div id="content">
            <div id="Navigation">
                <h3 align="center">Site Menu</h3>
                <ul>

                    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >= 1) { ?>
                    <li><a href="FAQ's.php">FAQ's</a></li>
                    <li><a href="includes/news.php">Insider News</a></li>
                    <li><a href="includes/Logoff.php">Logoff</a></li>
                    <li><a href="includes/rebates.php">Rebates</a></li>

                    <?php } else { ?>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="FAQ's.php">FAQ's</a></li>
                    <li><a href="Join.php">Join Today</a></li>
                    <li><a href="login.php">Login</a></li>
                    <?php } ?>

                    <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] >= 5) { ?>
                    <li><a href="includes/admin.php">Home</a></li>
                    <?php } else { ?>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="FAQ's.php">FAQ's</a></li>
                    <li><a href="Join.php">Join Today</a></li>
                    <li><a href="login.php">Login</a></li>
                    <?php } ?>


                </ul>



            </div>



        </div>
        <div id="main">
            <table>
                <tr>

                    <td>
                        <h5 align="center">Become a member today for web only special offers and insider news!</h5>
                        <hr />
                        <div id="picture">
                            <img src="Images/weeklyspec.jpg" alt="Cookie Cutter of The Week" width="400" height="400">
                        </div>
                        <br />
                        <p align="center">Impress your friends with this cool mouse faced cookie cutter! Join today for more awesome cookie cutting designs!</p>
                        <hr />


                    </td>
                </tr>
            </table>


        </div>
    </div>


    <hr />
    <div id="footer">
        Copyright &copy; 2020 Jacob urenda



    </div>





</body>

</html>

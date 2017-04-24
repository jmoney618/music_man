<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuaria Media Group</title>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link id="favicon" rel="shortcut icon" href="images/ared.png" type="image/x-icon">
</head>

<body>
<header><!-- Header, nav, & hero image -->
    <img src="images/hero_music.png" id="hero_image" alt=""/><!-- Hero img -->
    <div class="container">
        <div id="top-navigation">
            <div id="logo_wrapper"><a href="index.php" id="logo">Nuaria Media Group</a></div>
            <nav>
                <ul>
                    <li><a href="#">live recording</a></li>
                    <li><a href="#">mix &amp; master</a></li>
                    <li><a href="#">web design</a></li>
                </ul>
            </nav>
        </div>
        <div id="hero_article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim
        </div>
    </div>
</header>
<!-- Main content section 1 -->
<div class="content">
    <div class="container">
        <div id="article-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Live Recording div -->
        <div id="live_recording">
            <div><img src="images/retro-mic.png" width="182" height="165" alt=""/></div>
            <!-- Live Recording caption -->
            <div class="caption">Live Recording</div>
        </div><!-- End Live Recording pic and caption div -->
    </div>
</div><!-- End Main content section 1 -->
<!-- Preview content section -->
<div class="red-backdrop">
    <div class="container">
        <div id="mix_master">
            <div><img src="images/recording-studio.png" width="185" height="162" alt=""/></div>
            <!-- Mix & Master caption -->
            <div class="caption">Mix &amp; Master</div>
        </div><!-- End Mix & Master and caption div -->
        <div id="article-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div><!-- End preview -->
<div class="clear"></div>
<!-- Main content section 2 -->
<div class="content">
    <div class="container">
        <div id="article-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Web Design div -->
        <div id="web_design">
            <div><img src="images/web-design-img.png" width="143" height="126" alt=""></div>
            <div class="caption">Web Design</div>
        </div><!-- End Web Design and caption div -->
    </div>
</div><!-- End Main content section 2 -->
<!-- Form section -->
<div class="red-backdrop">
    <div class="container">
        <div id="contact">
            <h2>Request a quote</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="fname">First Name: </label><br>
                <input type="text" id="fname" name="first_name">
                <br><br>
                <label for="lname">Last Name: </label><br>
                <input type="text" id="lname" name="last_name">
                <br><br>
                <label for="email">Email: </label><br>
                <input type="text" id="email" name="email">
                <br><br>
                <label for="phone">Phone: </label><br>
                <input type="text" id="phone" name="phone">
                <br><br>
                <label for="service">Service: </label><br>
                <select id="service" name="service">
                    <option value=""></option>
                    <option value="live recording">Live recording</option>
                    <option value="mix and master">Mix &amp; Master</option>
                    <option value="other">Other</option>
                </select>
                <br><br>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>

<!-- Test from inputs -->
<?php
require 'connection.php';

    // Set variables
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];

    // protect from SQL injections
    $fname = stripslashes($fname);
    $fname = mysqli_real_escape_string($con, $fname);

    $lname = stripslashes($lname);
    $lname = mysqli_real_escape_string($con, $lname);

    $email = stripslashes($email);
    $email = mysqli_real_escape_string($con, $email);

    $phone = stripslashes($phone);
    $phone = mysqli_real_escape_string($con, $phone);

    $service = stripslashes($service);
    $service = mysqli_real_escape_string($con, $service);

    // MySQL query to test if user has an account in the database
    /*$query = "";
    $result = mysqli_query( $con, $query );
    $check = mysqli_num_rows( $result );*/
?>
    </div>
</div>
<div class="clear"></div>
<footer> Nuaria Media Group&copy; | <a href="#">About Us</a> | <a href="#">Contact Us</a></footer>
</body>
</html>
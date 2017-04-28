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
<!-- include PHP heading script -->
<?php include 'heading.php' ?>

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
<?php include 'footer.php' ?>
</body>
</html>
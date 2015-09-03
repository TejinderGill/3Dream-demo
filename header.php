<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Eedge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description"
          content="Tejinder Kaur Gill's portfolio website. I am based in Toronto, ON Canada. This fully responsive portfolio is hand crafted from bottom up. Technologies used were HTML5, CSS3, bootrstrap and some simple JQuery. "/>
    <meta name="keywords"
          content="web developer, Toronto, Tejinder Kaur Gill, Tejinder Kaur Gill,responsive, HTML, CSS, JavaScript, JQuery, PHP, MySQL, MSSQL, website, front end, back end"/>
    <meta name="author" content="Tejinder Kaur Gill">
    <title>Tejinder Kaur Gill</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css"/>
 <!--    <link rel="stylesheet" href="css/style1.css"/> -->
    <link rel="stylesheet" href="css/carousal.css"/>
    <link rel="stylesheet" href="css/reset.css"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.css"/>

    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
     <link rel="stylesheet" href="css/font-awesome-animation.min.css">

    <!-- icons -->
    <link href='http://cdn.jsdelivr.net/devicons/1.4.0/css/devicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="devicons/css/devicons.css">

    <!--slider-->
    <link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head><body>
        <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> <!--button-->
                    <img class="logo" src="images/logo1.png" alt="TejinderGill">
                    <!-- <a href="#" class="navbar-brand">Tejinder dsfdsGill</a> -->
                </div><!--end navbar-header-->
                <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                    <ul class="nav navbar-nav" id="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Products & Sevices</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div><!--end container-->
        </nav><!--end navbar-->
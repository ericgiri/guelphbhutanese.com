
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
    <title>Ristorante Con Fusion</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!--My Style Sheet-->
    <link href="css/mystyle.css" rel="stylesheet">
    <!--Adding Font Awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">www.isansar.com</a>
                </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="https://isansar.com"><span class="glyphicon glyphicon-home"
                         aria-hidden="true"></span>Home</a></li>
                <li><a href="/aboutus.html">Nepali Movies</a></li>
                <li><a href="/contact.html">Hindi Movies</a></li>
                <li><a href="/contact.html">Hindi Dubbed Movies</a></li>
                <li><a href="/contact.html">Upcoming Movies</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Contact US</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!--<header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action

        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
            </div>
        </div>
    </header>-->

    <div class="container">
        <div class="row row-content">
            <div class="col-xs-12 col-sm-6 col-lg-12">
                <IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=728 HEIGHT=90 SRC="http://www.allapplebuzz.com/longbanner.php"></IFRAME>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-12">
                <?php if (isset($_GET['v'])) $videoid = $_GET['v']; ?>
                <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/<?php echo $videoid; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-12">
                <IFRAME FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=728 HEIGHT=90 SRC="http://www.allapplebuzz.com/longbanner.php"></IFRAME>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row row-footer">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-offset-sm-1">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		          <i class="fa fa-fax"></i>: +852 8765 4321<br>
		          <i class="fa fa-envelope"></i>: 
                                 <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-xs-12 col-sm-4" id="contact">
                    <div class="nav navbar-nav" style="padding: 40px 10px;">
                        <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <p style="padding:10px;"></p>
                    <p align=center>©Copyright 2015 Ristorante Con Fusion</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
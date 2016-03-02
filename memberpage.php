<?php require('includes/config.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GlobalMaffia</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon32by32.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">
<div id="wrap">
    <header id="header">
       <!-- <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p> </p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>	
		<!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/gm_header_globe.png" width="100%" alt="logo"></a> 
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="logout.php"><?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="register.php">Crimes</a></li>
                        <li><a href="login.php">Family</a></li>
                        <li><a href="#">Community</a></li>              
                        <li><a href="releases.php">Releases</a></li>                        

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="feature" >
        <div class="container">
<?php

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
$title = 'Inlogpagina';

?>
	<div class = "wrapper">
			<br>
					<h2>GlobalMaffia Nieuws</h2>
				<div id = "wrapper-news">
					<div id = "wrapper-bar-update">
						<center><p class="update">Update</p></center>
					</div>
				</div>
					<div class ="newsblock">
						<p class = "timedate">21 Januari 2016 - 15:48 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hoeren inkomsten vanaf nu weer correct!</p>
						<p class = "news-info">
							Beste spelers,
							<br><br>

							Vanaf heden werken de inkomsten van de hoeren weer correct.<br>
							Helaas was er een fout gemaakt in het script, waardoor sommige spelers negatieve inkomsten hadden.
							<br><br>
							Mocht je nog fouten tegen komen, meld dit dan op het bug forum.<br>
							<br>
							Met vriendelijke groet,<br>

							GlobalMaffia team
						</p>
					</div>
					<br>
				<div id = "wrapper-news">
					<div id = "wrapper-bar-update">
						<center><p class="update">Nieuws</p></center>
					</div>
				</div>
					<div class ="newsblock">
						<p class = "timedate">21 Januari 2016 - 13:23 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Teamleden gezocht!</p>
						<p class = "news-info">
							Beste spelers,
							<br><br>

							GlobalMaffia is nog op zoek naar actieve spelers die het team willen komen versterken.<br>
							Wij zullen in de loop van de week een sollicitatieformulier opstellen, zodat je je kunt inschrijven.
							<br><br>
							Wat wij van jou verwachten als teamlid:<br>
							
								- Activiteit. Minimaal 2 uur per dag online kunnen zijn. <br>
								- Inzet. We verwachten dat je je stinkende best doet.<br>
								- ABN. We verwachten dat je de Nederlandse taal goed beheert.<br>
							<br>
							Met vriendelijke groet,<br>

							GlobalMaffia team
						</p>
					</div>
					<br>
									<div id = "wrapper-news">
					<div id = "wrapper-bar-update">
						<center><p class="update">Update</p></center>
					</div>
				</div>
					<div class ="newsblock">
						<p class = "timedate">21 Januari 2016 - 15:48 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hoeren inkomsten vanaf nu weer correct!</p>
						<p class = "news-info">
							Beste spelers,
							<br><br>

							Vanaf heden werken de inkomsten van de hoeren weer correct.<br>
							Helaas was er een fout gemaakt in het script, waardoor sommige spelers negatieve inkomsten hadden.
							<br><br>
							Mocht je nog fouten tegen komen, meld dit dan op het bug forum.<br>
							<br>
							Met vriendelijke groet,<br>

							GlobalMaffia team
						</p>
					</div>
					<br>
				</div> <!--/#wrapper-->						
    </div><!--/.container-->
</section><!--/#feature-->
</div>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">GlobalMaffia</a>. Alle rechten voorbehouden.
                </div>
				
				     <div class="col-sm-6">
				<center>Volg ons ook op social media! <br>
				<a href="#"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;</center>
                </div>

            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
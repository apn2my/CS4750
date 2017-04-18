<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CS 4750 Plant Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">A Plant Enthusiast's Haven</a>
            </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Explore!</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Arboretums Search</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">User Profile</a>
                    </li>
       <br>
                    <li class="page-scroll">
                        <a>
                        <?php
   include_once("./library.php"); // To connect to the database
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Form the SQL query (an INSERT query)
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash('$password', PASSWORD_DEFAULT).

  $sql="INSERT INTO User (First_Name, Last_Name, Email, Password) VALUES ('$first_name', '$last_name', '$email', '$password')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
else
  {
    echo "Welcome $first_name. You are logged in as $email.";
  }
mysqli_close($con);
                        ?>
                      </a>
                    </li> </br>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <!--img class="img-responsive" src="img/baby_groot.jpg" alt=""!-->
                    <div class="intro-text">
                        <h1 class="name">Registration Success!</h1>
                        <hr class="star-light">
                        <span class="skills">Explore - Search - Research - Discover</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- User Registration Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Please enter more information:</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
  <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

          <form action="LoginUser.php" method="post">
          <!--Enter State info !-->
              <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
  <State: <input type="text" name="state">
                      <input type="text" class="form-control" placeholder="State" id="state" required data-validation-required-message="Please enter your State of residence.">
                          <p class="help-block text-danger"></p>
                        </div>
              </div>

            <!--Enter Region info !-->
                       <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
  <Region: <input type="text" name="region">
                              <input type="text" class="form-control" placeholder="Region" id="region" required data-validation-required-message="Please enter your Region of residence.">
                               <p class="help-block text-danger"></p>
                            </div>
                       </div>

            <!-- Submit button !-->
                       <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Explore</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/succulent.jpg" class="img-responsive" alt="Succulent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/water_lily.jpg" class="img-responsive" alt="Water Lily">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/arboretum1.jpg" class="img-responsive" alt="Arboretum">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/exotic_plant.jpg" class="img-responsive" alt="Exotic Plant">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/care_succulent.jpg" class="img-responsive" alt="care_succulent">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/daisies.jpg" class="img-responsive" alt="Daisies">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ARBORTEUM SECTION!!!!!!!!!!!!!!!! -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Arboretum Search</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p> Insert Something Here Like a Search Bar ...IDK</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Rice Hall, Engineer's Way
  <br>Charlottesville, VA 22003</p>
                    </div>
                    <div class="footer-col col-md-4">
  <h3>Connect with Us Elsewhere (Don't)</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>CS 4750 Databases </h3>
                        <p>This was a project for the Databases class at the University of Virginia <a href="http://engineering.virginia.edu">Learn About UVa</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
				 Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

				 <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Succulents</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
				 <p>Succulent comes from the Latin word <i>"Sucus"</i>, which means juice or sap. Succulents are sometimes referred to as 'Water Storage Plants' as they have some parts that are more normally thickened and fleshy, usually to retain water in arid climates or soil conditions Many plant families have multiple succulents found within them (over 25 plant families). In some families, such as Aizoaceae, Cactaceae, and Crassulaceae, most species are succulents. </p>
                            <ul class="list-inline item-details">
				 <li>Wikipedia:
                                    <strong><a href="https://en.wikipedia.org/wiki/Succulent_plant">Succulent Plant</a>
                                    </strong>
                                </li>
				 <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
				 <li>Facts about Succulents:
                                    <strong><a href="http://www.housebeautiful.com/lifestyle/gardening/g3441/interesting-facts-about-succulents/">Learn More</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Aquatic Plants</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
				 <p> Aquatic plants are plants that have adapted to living in aquqatic environments (saltwater or freshwater). They are also refered to as <i>hydrophytes</i> or <i>macrophytes</i>. One of the largest aquatic plants in the world is the <a href="https://en.wikipedia.org/wiki/Victoria_amazonica">Amazon Water Lily</a>, one of the smallest is the minute <a href="https://en.wikipedia.org/wiki/Duckweed">duckweed</a>. </p>
                            <ul class="list-inline item-details">
				 <li>Wikipedia:
                                    <strong><a href="https://en.wikipedia.org/wiki/Aquatic_plant"> Aquatic Plants</a>
                                    </strong>
                                </li>
				 <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
				 <li>Common Waterplants:
                                    <strong><a href="http://www.bhg.com/gardening/plant-dictionary/water/">Descriptions and Info</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Arboretums</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>The United States as numerous botanical gardens devoted to treeds, weeds, flowers and all plants alike. They are places where many varieties of trees are grown for research, educational and ornamental purposes; where trees and shrubs are cultivated for exhibition.</p>
                            <ul class="list-inline item-details">
                                <li>National Arboretum:
                                    <strong><a href="http://www.usna.usda.gov/">Explore</a>
                                    </strong>
                                </li>
				 <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
				 <li>Calendar & Events:
                                    <strong><a href="http://www.usna.usda.gov/Education/events.html">US National Arbor.</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Exotic Plants</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p> Interested in learning more about exotic plants and how to obtain them. Read more</p>
				 <p>Exotic plants, or <strong>introduced plants</strong> are plant species that are introduced to a region in which they are not native. Many cultivate plants are used as ornamentals and are often considered <a href="http://horticultureandsoilscience.wikia.com/wiki/Invasive_Plants">invasive species</p>
                            <ul class="list-inline item-details">
				 <li>Wikia:
                                    <strong><a href="http://horticultureandsoilscience.wikia.come/wiki/Invasive_Plants">Invasive Plants</a>
                                    </strong>
                                </li>
				 <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
				 <li>Learn more:
                                    <strong><a href="http://exoticplantsltd.com">Exotic Plants</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Taking Care of Your Plant</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
				 <p>Most succulents need half a day to a full day of sunlight. The soil level should be on the same depth on the plant. It is important to water your succulent thoroughly.  Fertilizer should be used sparsely, about once a month is all they need.</p>
                            <ul class="list-inline item-details">
				 <li>Simply Succulents:
                                    <strong><a href="https://simplysucculents.com/plant-care-information/">Plant Care Information</a>
                                    </strong>
                                </li>
				 <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
				 <li>General Plant Care:
                                    <strong><a href="http://www.ambius.com/learn/online/top-tips/index.html">Learn more</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Flowers and their Endless Beauty</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
				 <p>Flowers are the reproductive part of the plant. They are known to have an aromatic scent when they output maximal levels of pollen. Each type of flower is extremely unique; they have different types of petals, scents and nutritional requirements. Some plants (like <a href="http://sunbulb.com/info/wp-content/uploads/2010/08/orchids.jpg">orchids</a>) don't even need soil to grow!</p>
                           <ul class="list-inline item-details">
                                <li>Source:
                                    <strong><a href="http://www.avasflowers.net/facts-about-flowers-for-kids">Facts about Flowers</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Learn more:
                                    <strong><a href="https://en.wikipedia.org/wiki/Flower">Wikipedia</a>
                                    </strong>
                                </li>
                            </ul>
                            <button id="btnSubmit" type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>

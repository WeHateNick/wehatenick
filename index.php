<?php 
$pageTitle = 'Home'; 
$section = 'home';
include('inc/header.php'); 
?>
<!-- Content  -->

<div class="header-image">
        <img src="img/nick-chair-blur.png">
</div>
<div class="container-fluid intro-block">
    <a class="qualification-anchor-link" id="slow-scroll" href="#">
            <div class="header-labels">
                <h2 class="fade"><span class="glyphicon glyphicon-tag"></span> Branding</h2>
                <h2 class="fade"><span class="glyphicon glyphicon-comment"></span> Marketing</h2>
                <h2 class="fade"><span class="glyphicon glyphicon-globe"></span> Web Development</h2>
            </div>
        </a>
    <div class="main-content fixed-spacer">
            <div class="row cta-buttons">
                <div class="col-sm-4 col-sm-offset-2">
                    <a href="work.php" class="">What I Do</a>
                </div>
                <div class="col-sm-4">
                    <a href="contact.php">Get a Quote</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12 jumbotron boilerplate">
                    <p class="lead">
                        My name is Nick Ocampo. I'm a project manager at <a href="http://kps3.com">KPS<span class="number">3</span> Marketing</a>
                         and a freelance web developer in Reno, NV. In the little free time I have, I also play
                         all sorts of instruments and record music in my home studio.
                    </p>
                </div>
            </div>
        </div>
</div>  
<!-- BEGIN CAROUSSELL  -->

<div id="carousel-work" class="carousel slide jumbotron">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-work" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-work" data-slide-to="1"></li>
    <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
  </ol>

  <!-- Wrapper for slides -->

    <div class="container">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 work-heading">
                        <h2>Featured Projects</h2>
                    </div>
                </div>
                <div class="row featured-project">
                    <div class="col-md-8 featured-project-image">
                        <img src="img/edin-carp.png">
                    </div>
                    <div class="col-md-4 featured-project-description">            
                        <p>
                            I'm currently working on a website for a makeup artist
                            named Edin Carpenter. The website is only in wireframe
                            stages right now, but I'll have lots more to come.
                        </p>
                        <p><a href="work.php">Read more &rarr;</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 work-heading">
                        <h2>Featured Projects</h2>
                    </div>
                </div>
                <div class="row featured-project">
                    <div class="col-md-8 featured-project-image">
                        <img src="img/wehatenick-project-mobile.png">
                    </div>
                    <div class="col-md-4 featured-project-description">            
                        <p>My first project post is about the website you're on right now. It was really fun to
                            build this. I mainly used Bootstrap, HTML, CSS, jQuery and PHP to build it.</p>
                        <p><a href="work.php">Read more &rarr;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-work" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-work" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<!-- END CAROUSSELL  -->
<div class="container-fluid">
    <div class="emblem row">
        <div class="about-me hidden-sm hidden-xs">
            <figure class="emblem-container overlay-effect">
                <a href="about.php">
                    <img id="emblem" src="img/about-me-foreground.png">
                </a>
                <figcaption>
                    <a href="about.php" class="emblem-text">
                        About me
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-sm-8 col-sm-offset-2 about-text jumbotron">
                    <p>
                        I've worked in almost every kind of marketing environment. From grassroot political outreach
                        to paid digital ad buying, I've done it all. Specialization is outdated anyway.
                    </p>
                    <hr>
        </div>
    </div>
</div>
<div class="container-fluid qualifications">
    <div class="row" id="qualifications">   
        <div class="col-md-4">
            <h2><a href="work.php">Branding</a></h2>
            <hr>
            <ul>
                <li>Content Strategy</li>
                <li>Public Relations</li>
                <li>Design</li>
                <li>Research</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2><a href="work.php">Marketing</a></h2>
            <hr>
            <ul>
                <li>Website Analytics</li>
                <li>Search Engine Optimization</li>
                <li>Google AdWords</li>
                <li>Facebook Ads</li>
            </ul>
        </div>
        <div class="col-md-4">
            <h2><a href="work.php">Web Development</a></h2>
            <hr>
            <ul>
                <li>jQuery</li>
                <li>Sass</li>
                <li>Responsive Design</li>
                <li>WordPress</li>
            </ul>
        </div>
    </div>
</div>   
<?php include('inc/footer.php'); ?>

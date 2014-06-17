<?php 
    $pageTitle = 'Work';
    $pageTheme = 'style-about';
    $section = 'work';
    include('inc/secondary-theme.php');
    include('inc/header.php'); 
?>

<div class="container">
    <hgroup>
        <h2 class="secondary-page-title"><?php echo $pageTitle; ?></h2>
        <hr>
    </hgroup>
    <div class="row what-i-do">
        <section class="col-sm-8">
            <p>The digital marketing field is a very broad one&mdash;from back-end developers who write the essential
                code to get a site performing the complicated tasks on the web that we often take for granted, to 
                inbound marketers who make sure that a business is effectively using their resources on the web
                to reach an audience on a personal, human level. As a digital project manager at 
                <a href="http://kps3.com">KPS<span class="number">3</span> Marketing</a>, and my previous work as a webmaster and
                database administrator, I'm lucky enough to say that I've worked in some way or another across all of
                the disciplines that are involved in aiding businesses strive across the web.</p>
        
                <p>Below you can see some of the projects I have worked on my own. I've taken these projects on from the ground up
                    and had a great time working on them. I will post small samples of my work as I continue
                    do many more.</p>
        </section>
        <section class="col-sm-4 jumbotron skills">
            <h3>I work with</h3>
            <ul>
                <li>JavaScript</li>
                <li>Responsive Design</li>
                <li>PHP</li>
                <li>WordPress</li>
                <li>MySQL</li>
                <li>Google Analytics</li>
                <li>Google AdWords</li>
                <li>Facebook Ads</li>
            </ul>
        </section>
    </div>
    <article class="row featured-project jumbotron">
        <div class="col-md-12 project-title">
            <h3>EdinCarpenterMakeup.com</h3>
        </div>
        <div class="col-md-8 featured-project-image">
            <img src="img/Makeup-Site.png">
        </div>
        <div class="col-md-4">            
            <p>
                I'm currently working on a website for a makeup artist
                named Edin Carpenter. The website is only in wireframe
                stages right now, but I'll have lots more to come.
            </p>
        </div>
    </article>
    <article class="row featured-project jumbotron">
        <div class="col-md-12 project-title">
            <h3>WeHateNick.com</h3>
        </div>
        <div class="col-md-8 featured-project-image">
            <img src="img/wehatenick-project.png">
        </div>
        <div class="col-md-4">            
            <p>Meta feature!</p>
            <p>My first project post is about the website you're on right now. It was really fun to
            build this. I mainly used Twitter Bootstrap, HTML, CSS, jQuery and PHP to build it.</p>
        </div>
    </article>
</div>

<?php include('inc/footer.php'); ?>
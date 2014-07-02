
<?php 
    $pageTitle = 'About Me';
    $pageTheme = 'style-about';
    $section = 'about';
    include('inc/secondary-theme.php');
    include('inc/header.php'); 
?>
<div class="container">
    <hgroup>
        <h2 class="secondary-page-title"><?php echo $pageTitle; ?></h2>
        <hr>
    </hgroup>
    <div class="row">
        <div class="col-md-4 img-baby">
            <img src="img/baby-floor-edited-small.png">
        </div>
        <div class="col-md-8 about-intro">
            <h3 class="name">My name is Nick Ocampo</h3>
            <p>
                I am a lot of things; I am a son to a great mother, a programmer and musician. I'm a lover of the web, an avid reader and a mostly-unsolicited, self-proclaimed grammarian. Although I was born in Reno, NV, I moved to Bolivia when I was only a few months old. I lived there with my whole family until I was 18, when I decided to move back to Reno to go the University of Nevada.
            </p>
            <h4 class="about-sub">While I was in college</h4>
            <p>
                I think moving to Reno was probably that best decision I could’ve made. While I absolutely love Bolivia, and go back to visit family and friends almost once a year, my time in Reno really brought out the best in me. 
            </p>
            <h4 class="about-sub">
                I have an interesting work history
            </h4>
            <p>
                I was always very interested in two seemingly unrelated fields: programming and public relations/marketing. I earned a degree in strategic communication with a minor in information systems from the University of Nevada. With these skills in hand, I went on to work in a variety of different roles that cover a wide spectrum of what I consider to be marketing in general (stretching the generality pretty far). I’ve worked in a traditional public relations role doing political canvassing for Planned Parenthood and I also worked as a webmaster and database administrator. 
            </P>
            <h4 class="about-sub">
                I don’t want to specialize, I rather be holistic
            </h4>
            <p>
                This wide range of roles taught me to think about everything I do from a more holistic standpoint. I believe I will be better in any role I take, if I broaden my understanding and experience in every role involved in digital media. Becoming a better web developer makes me a better project manager. The work I’ve done in account management has taught me valuable lessons when I approach design tasks. I’m know that specialization is a good choice for many fields, but digital media is not one of them. My goal is not to polish a particular skill in isolation. I want to broaden my knowledge and connect a variety of skills in a way others can’t.
            </p>
            <h4 class="about-sub">
                Nowadays
            </h4>
            <p>
                I currently work as a project manager at <a href="http://kps3.com">KPS<span class="number">3</span> Marketing</a>. I also started building websites during my free time. If you have a project in mind and think I would be a good fit, I would love to <a href="/contact.php">hear from you</a>.
            </p>
        </div>
    </div>

</div>
<?php include('inc/footer.php'); ?>


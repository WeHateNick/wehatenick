<?php 
    $pageTitle = 'Contact';
    $pageTheme = 'style-about';
    $section = 'contact';
    include('inc/secondary-theme.php');
    include('inc/header.php');
?>

<div class="container contact">
    <hgroup>
        <h2 class="secondary-page-title"><?php echo $pageTitle; ?></h2>
        <hr>
    </hgroup>
    <div class="row">
        <div class="jumbotron col-md-8 col-md-offset-2 contact-info">
                <p><strong>Phone:</strong></p>
                <p>(775) 772-7446</p>
                <p><strong>Email:</strong></p>
                <p><a class="contact-email" href="mailto:nick@wehatenick.com">nick@wehatenick.com</a></p>
                <p><strong>Address:</strong></p>
            <address>
                <p>
                1955 W 6 St. <br>
                Reno, NV <br>
                89503
                </p>
            </address>
            <ul class="social-icons contact-icons hidden-xs">
                <li>
                    <a href="https://github.com/WeHateNick" >
                        <span class="icon-github icon-contact"></span>
                    </a>
                </li>
                <li>
                    <a href="http://www.linkedin.com/in/nickocampo/">
                        <span class="icon-linkedin icon-contact"></span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/NicolasOcampoA">
                        <span class="icon-facebook icon-contact"></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:nick@wehatenick.com">
                        <span class="icon-email icon-contact"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
        <div class="row">
        <div class="col-md-8 col-md-offset-2 contact-intro">
                <p>Please contact me if you're interested in getting
                                a quote for a project you have in mind, if you want to
                                bounce an idea off me or if you just want to chat.
                                I'd love to hear from you.
                </p>
        </div>
    </div>
</div>
<?php include('inc/footer.php'); ?>
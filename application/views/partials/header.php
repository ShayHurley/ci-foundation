<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="keywords, go, here" />
    <meta name="description" content="Description goes here" />
    <meta name="copyright" content="Copyright &copy; YourNameHere 2013" />
    <meta name="language" content="EN-GB" />
    <meta name="author" content="Redhive Media">

    <meta name="og:email" content="youremail@here.com"/>

    <title>
    <?php if (!isset($page_title)){echo "Welcome";} else {echo $page_title;} ?>
    </title>

    <!-- Included CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/foundation'); ?>/css/foundation.css">

    <!-- Your Stylesheet Here -->
    <link rel="stylesheet" type="text/css" href="">
    <!-- END Your Stylesheet-->

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/stylesheets/ie.css">
    <![endif]-->

    <script src="<?php echo base_url('assets/foundation'); ?>/js/modernizr.js"></script>

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="icon" type="image/ico" href="<?php echo base_url('assets/images'); ?>/favicon.ico">

</head>
<body>

<?php
$pagetitle='el.lc';
if( isset($title) && $title!='' && $title != null )
{
    $pagetitle=$pagetitle . ' - ' . $title;
}
else
{
    $pagetitle=$pagetitle . ' - ' . 'Elliott Landsborough';
}
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo $pagetitle; ?></title>
        <meta name="description" content="Elliott Landsborough's personal website. Find out information about me or shorten your URLs with my ridiculously small domain name.">
        <meta name="keywords" content="Elliott, Landsborough, portfolio, php, url, shortening, contact, cv">
        <meta name="author" content="Elliott Landsborough" />
        <link rel="author" href="https://plus.google.com/108325287078081298995/about">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url('/min/b=css&amp;f=normalize.min.css,alertify.core.css,alertify.default.css,style.css'); ?>" />

        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2.min.js'); ?>"></script>
    </head>
    <body>
        <header>
            <img class="logo" src="<?php echo base_url('/img/logo.png'); ?>" alt="el.lc" />
            <a href="#" class="shortenlink"><img src="<?php echo base_url('/img/downarrow.png'); ?>" alt="el.lc"></a>
            <div class="menu"><h1>Elliott Landsborough</h1> / <?php echo safe_mailto('me@el.lc','email'); ?> / <a href="http://github.com/elliottlandsborough">github</a></div>
            <?php $this->load->view('shortform'); ?>
        </header>
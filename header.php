<!DOCTYPE html>
<html lang="en">
<?php require('functions.php');?>

  <head>
	<meta http-equiv="Cache-Control" content="max-age=200" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<?php
    if (isset($title)) {
        echo "<title>360Web | $title</title>";
    } else {
        echo "<title>360Web</title>";
    };

    ?>
	<!-- Favicons -->

	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="img/favicon/favicon.ico">
	<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<!-- Stylesheets and CDN  -->

    <link rel="stylesheet" href="<?php echo current_link();?>css/devicon.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="<?php echo current_link();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo current_link();?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo current_link();?>css/navbar.min.css" rel="stylesheet">
    <link href="<?php echo current_link();?>css/style.min.css" rel="stylesheet">

  </head>

<!doctype html>
<!--[if lt IE 7]> <html class="ie6 lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 lt-ie10 lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<html lang="en">
<head>

	<meta charset="utf-8">
	<title><?php isset($title)? print $title : print '' ; ?></title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, height=device-height">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta property="og:description" content=".........">
	<meta itemprop="name" content="Alphabet">
	<meta itemprop="description" content=".......">
	<meta name="keywords" content=".......">
	
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">

	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>
<body>
<div class="wrapper">
	<?php require '../template/mobile.menu.php';  ?>

</div>
<footer id="footer">
	
</footer>
<script>
$(document).ready(function(){
    $(".trigger").click(function(){
        $(".trigger").toggle();
        $(".momento").toggle();
        $("#mobile-menu").toggle("slow");
        $('body').addClass('noscroll');
    });
});
</script>

<script>
$(document).ready(function(){
    $(".momento").click(function(){
        $(".trigger").toggle();
        $(".momento").toggle();
        $("#mobile-menu").toggle();
        $('body').removeClass('noscroll');
    });
});
</script>

<!--Javascript-->
</body>
</html>
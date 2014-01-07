<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php wp_title('&laquo;', true, 'right');?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	
	<?php if (is_singular() ) wp_enqueue_script( 'comment-reply'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrapper">
		<div id="container">
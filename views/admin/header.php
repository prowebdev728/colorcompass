<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Color Compass Administration</title>
<link href="/css/foundation.min.css" rel="stylesheet" type="text/css">
<?php if (isset($styles)) echo $styles; ?>
<link href="/css/admin.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php if (isset($js)) echo $js; ?>
</head>
<body>
<div id="header" class="row expanded column">
	<h2>Administration</h2>
	<div id="toolbar">
		<ul>
			<?php if ($_SESSION['auth']['id_level'] < 10): ?>
			<?php if ($_SESSION['auth']['id_level'] < 3): ?>
			<li><a href="<?=$appurl;?>">Page Meta Data List</a></li>
			<li><a href="<?=$appurl.'/exporeg'?>">Expo Registration</a></li>
			<li><a href="<?=$appurl;?>/news">News Articles</a></li>
			<li><a href="<?=$appurl;?>/calendar">Calendar</a></li>
			<li><a href="<?=$appurl;?>/contactus">Contact Us List</a></li>
			<?php endif; ?>
			<?php if ($_SESSION['auth']['id_level'] ==1): ?>
			<li><a href="<?=$appurl.'/sysusers'?>">System Users</a></li>
			<?php endif; ?>
			<?php endif; ?>
			<li><a href="<?=$appurl.'/login/logout'?>">Logout</a></li>
		</ul>
	</div>
</div>
<div id="content" class="row expanded column">

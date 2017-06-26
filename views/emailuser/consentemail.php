<html>
<head>
<style>
div.content {
	background-color: #FFF;
	padding: 15px;
	width: 500px;
	margin-top: 25px;
	margin-right: auto;
	margin-left: auto;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border: 1px solid #000;
}
.confirm {
	font-size: 14px;
	font-weight: bold;
}
.foot {
	color: #999;
}
</style>
</head>
<body>
<div class="content"><img src="http://<?=$_SERVER['SERVER_NAME'];?>/images/email_banner.jpg" alt="<?=htmlspecialchars(COMPANY);?>" width="500">
	<p>Hello,</p>
	<p>Canada's anti-spam laws are changing, the new legislation (CASL) is coming into force on July 1, 2014, and requires that we obtain your consent to continue sending you Electronic Communications.</p>
	<p>Included in these Electronic Communications are our publications, newsletters, product and industry updates, announcements, event or seminar invitations, and other valuable information. </p>
	<p>We take this new law and your privacy very seriously; we will not redistribute your e-mail information to any other third parties for any reason. This consent is strictly to continue to receive communications directly from us.</p>
	<p>Thank you for your attention to this,<br>
		<?=htmlspecialchars(COMPANY);?></p>
	<p class="confirm"><a href="<?=$confirm_url;?>&keepme=1">Keep Me</a> on your list</p>
	<p class="confirm"><a href="<?=$confirm_url;?>&removeme=1">Remove Me</a> from your list</p>
	<p class="foot">To unsubscribe, visit our opt-out page <a href="<?=$opt_url;?>">here</a></p>
</div>
</body>
</html>

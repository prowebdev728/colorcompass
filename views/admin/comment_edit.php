<?php include 'views/admin/header.php'; ?>

<h3>Edit Blog Comment</h3>
<div id="edit_post" class="c12 fill">
	<form action="<?=$appurl.'/comments/edit'?>" method="post" class="cmxform">
		<?=$errMsg;?>
		<label for="title">Blog Title:</label>
		<div class="echo">
			<?=$blog['title'];?>
		</div>
		<label for="content">Content:</label>
		<div class="echo">
			<?=$data['content'];?>
		</div>
		<label for="date">Date Posted:</label>
		<div class="echo">
			<?=$data['date_posted'];?>
		</div>
		<label for="ip_addr">IP Address:</label>
		<div class="echo">
			<?=$data['ip_addr'];?>
		</div>
		<label for="id_status">Status:</label>
		<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status']);?>
		<br class="clear">
		<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
		<input name="blog_id" type="hidden" id="blog_id" value="<?=$blog['id'];?>">
		<input type="submit" name="save" id="save" value="Save Now" class="btn">
	</form>
</div>
<?php include 'views/admin/footer.php'; ?>

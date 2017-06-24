<?php include 'views/admin/header.php'; ?>
<div id="edit_user" class="small-8 small-centered fill">
	<h2>Edit Page Meta Data</h2>
	<form action="<?=$appurl.'/home/edit';?>" method="post" class="cmsxform">
		<?=$errMsg;?>
		<label for="slug">Slug:
			<input name="data[slug]" type="text" id="slug" value="<?=$data['slug'];?>" class="small-12">
		</label>
		<label for="meta_title">Meta Title:
			<input name="data[meta_title]" type="text" id="meta_title" value="<?=$data['meta_title'];?>">
		</label>
		<label for="meta_description">Meta Description:
			<textarea name="data[meta_description]" cols="77" id="meta_description"><?=$data['meta_description'];?></textarea>
		</label>
		<label for="title">Status:<br>
			<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status'], 'class="input-3"');?>
		</label>
		<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
		<input type="submit" name="save" id="save" value="Save Now" class="button">
	</form>
</div>
<?php include 'views/admin/footer.php'; ?>

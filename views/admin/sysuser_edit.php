<?php include 'views/admin/header.php'; ?>
<h3>Edit System User</h3>
<div id="edit_user" class="c12 fill">
	<form action="<?=$appurl.'/sysusers/edit';?>" method="post" class="cmxform">
		<?=$errMsg;?>
		<label for="first_name">First Name:</label>
		<input name="data[first_name]" type="text" id="first_name" value="<?=$data['first_name'];?>">
		<label for="last_name">Last Name:</label>
		<input name="data[last_name]" type="text" id="last_name" value="<?=$data['last_name'];?>">
		<label for="email">Email:</label>
		<input name="data[email]" type="text" id="email" value="<?=$data['email'];?>" size="50">
		<label for="passwrd">Password:</label>
		<input name="data[passwrd]" type="password" id="passwrd">
		<label for="passwrd2">Password Again:</label>
		<input name="data[passwrd2]" type="password" id="passwrd2">
		<label for="title">Level:</label>
		<?php if (!$edit_self): ?>
		<?=form::dropdown('data[id_level]', $cbo_level, $data['id_level']);?>
		<?php else: ?>
		<div class="echo">
			<?=$cbo_level[$data['id_level']];?>
		</div>
		<?php endif; ?>
		<label for="title">Status:</label>
		<?php if (!$edit_self): ?>
		<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status']);?>
		<?php else: ?>
		<div class="echo">
			<?=$cbo_status[$data['id_status']];?>
		</div>
		<?php endif; ?>
		<br class="clear">
		<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
		<input type="submit" name="save" id="save" value="Save Now" class="btn">
	</form>
</div>
<?php include 'views/admin/footer.php'; ?>

<?php include 'views/admin/header.php'; ?>
<h3>Edit User</h3>
<div id="edit_user" class="c12 fill">
	<form action="<?=$appurl.'/users/edit';?>" method="post" class="cmxform">
		<?=$errMsg;?>
		<label for="email">Email:</label>		
		<div class="echo">
			<?=$data['email'];?>
		</div>		
		<label for="first_name">First Name:</label>
		<input name="data[first_name]" type="text" id="first_name" value="<?=$data['first_name'];?>">
		<label for="last_name">Last Name:</label>
		<input name="data[last_name]" type="text" id="last_name" value="<?=$data['last_name'];?>">
<!--		
		<label for="passwrd">Password:</label>
		<input name="data[passwrd]" type="password" id="passwrd">
		<label for="passwrd2">Password Again:</label>
		<input name="data[passwrd2]" type="password" id="passwrd2">
		
-->		
		<label for="title">Opt In:</label>
		<div class="echo">
		<?=form::radios('data[opt_in]', $rdo_yesno, $data['opt_in'], '&nbsp;', 'class="radio"');?>
		</div>
		<label for="opt_in_ip">Op In/Out Date:</label>
		<div class="echo">
		<?=$data['opt_in_date'];?>
		</div>
		<label for="opt_in_ip">Op In/Out IP:</label>
		<div class="echo">
		<?=$data['opt_in_ip'];?>
		</div>
		<br class="clear">
		<label for="title">Status:</label>
		<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status']);?>
		<br class="clear">
		<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
		<input type="submit" name="save" id="save" value="Save Now" class="btn">
	</form>
</div>
<?php include 'views/admin/footer.php'; ?>

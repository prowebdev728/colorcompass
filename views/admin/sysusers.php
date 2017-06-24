<?php include 'views/admin/header.php'; ?>
<h3>Administration System Users<span class="padded-left"><a href="<?=$appurl.'/sysusers/edit/0';?>" class="btn small">Add User</a></span></h3>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Level</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?=$user['first_name'];?></td>
		<td><?=$user['last_name'];?></td>
		<td><?=$user['email'];?></td>
		<td><?=$user['level'];?></td>
		<td><?=$user['status'];?></td>
		<td><?=$user['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

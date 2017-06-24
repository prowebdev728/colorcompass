<?php include 'views/admin/header.php'; ?>
<h3>Webinar Users</h3>
<div class="datalist">
<table class="datatable">
<thead>
	<tr>
		<th scope="col">First Name</th>
		<th scope="col">Last Name</th>
		<th scope="col">Email</th>
		<th scope="col">Status</th>
		<th scope="col">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?=$user['first_name'];?></td>
		<td><?=$user['last_name'];?></td>
		<td><?=$user['email'];?></td>
		<td><?=$user['status'];?></td>
		<td><?=$user['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

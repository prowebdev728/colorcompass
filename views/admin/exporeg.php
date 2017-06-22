<?php include 'views/admin/header.php'; ?>
<h2>Collision Expo Registrations <span class="padded-left"><a href="<?=$appurl.'/exporeg/export';?>" class="button small">Export</a></span></h2>
<div>Total Attendees: <?=$count;?></div>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>Company</th>
		<th>Name</th>
		<th>Email</th>
		<th>Attendees</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?=$user['company'];?></td>
		<td><?=$user['name'];?></td>
		<td><?=$user['email'];?></td>
		<td><?=$user['attn_qty'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

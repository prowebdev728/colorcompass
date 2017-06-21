<?php include 'views/admin/header.php'; ?>
<h2>Contact Us List <span class="padded-left"><a href="<?=$appurl.'/contactus/export';?>" target="_blank" class="button small">Export to CSV</a></span></h2>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>Date Received</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Department</th>
		<th>Message</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $user): ?>
	<tr>
		<td><?=$user['date_received'];?></td>
		<td><?=$user['name'];?></td>
		<td><?=$user['email'];?></td>
		<td><?=$user['phone'];?></td>
		<td><?=$user['dept'];?></td>
		<td><?=$user['message'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

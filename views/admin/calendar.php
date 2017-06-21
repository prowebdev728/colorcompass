<?php include 'views/admin/header.php'; ?>
<h2>Calendar List <span class="padded-left"><a href="<?=$appurl.'/calendar/edit/0'?>" class="button small">Add Event</a></span></h2>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>Start Date</th>
		<th>Title</th>
		<th>Details</th>
		<th>Location</th>
		<th>Carlson</th>
		<th>Chase</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $row): ?>
	<tr>
		<td><?=$row['date'];?></td>
		<td><?=$row['title'];?></td>
		<td><?=$row['details'];?></td>
		<td><?=$row['location'];?></td>
		<td><?=$row['cbs'];?></td>
		<td><?=$row['cab'];?></td>
		<td><?=$row['status'];?></td>
		<td><?=$row['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

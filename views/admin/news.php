<?php include 'views/admin/header.php'; ?>
<h2>News Articles List <span class="padded-left"><a href="<?=$appurl.'/news/edit/0'?>" class="button small">Add Article</a></span></h2>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>URL</th>
		<th>Meta Title</th>
		<th>Date</th>
		<th>Post To</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $row): ?>
	<tr>
		<td><?=$row['url'];?></td>
		<td><?=$row['title'];?></td>
		<td><?=$row['date'];?></td>
		<td><?=$row['status'];?></td>
		<td><?=$row['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

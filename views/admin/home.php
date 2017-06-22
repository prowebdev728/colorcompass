<?php include 'views/admin/header.php'; ?>
<h2>Page Meta Data List <span class="padded-left"><a href="<?=$appurl.'/home/edit/0'?>" class="button small">Add Page</a></span></h2>
<div class="datalist">
<table id="datalist" class="display">
<thead>
	<tr>
		<th>Slug</th>
		<th>Meta Title</th>
		<th>Meta Description</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($data as $row): ?>
	<tr>
		<td><?=$row['slug'];?></td>
		<td><?=$row['meta_title'];?></td>
		<td><?=substr($row['meta_description'], 0, 60);?></td>
		<td><?=$row['status'];?></td>
		<td><?=$row['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

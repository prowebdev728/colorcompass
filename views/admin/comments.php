<?php include 'views/admin/header.php'; ?>
<h3>Blog Comments</h3>
<div class="datalist">
<table class="datatable display">
<thead>
	<tr>
		<th>Posted</th>
		<th>Post Title</th>
		<th>Comment</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($posts as $post): ?>
	<tr>
		<td><?=$post['date_posted'];?></td>
		<td><?=$post['title'];?></td>
		<td><?=substr($post['content'], 0, 80);?></td>
		<td><?=$post['status'];?></td>
		<td><?=$post['action'];?></td>
	</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</div>
<?php include 'views/admin/footer.php'; ?>

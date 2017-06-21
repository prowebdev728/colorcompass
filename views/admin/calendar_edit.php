<?php include 'views/admin/header.php'; ?>
<div id="edit_user" class="small-8 small-centered fill">
	<h2>Edit Calendar Event</h2>
	<form action="<?=$appurl.'/calendar/edit';?>" method="post" class="cmsxform row">
		<label for="date_start" class="small-3 column">Start Date:<br>
			<input name="data[date_start]" type="date" id="date_start" value="<?=$data['date_start'];?>">
		</label>
		<label for="times" class="small-3 column">Times:<br>
			<input name="data[times]" type="text" id="times" value="<?=$data['times'];?>">
		</label>
		<label for="duration" class="small-3 column end">Duration (days):<br>
			<input name="data[duration]" type="text" id="duration" value="<?=$data['duration'];?>">
		</label>
		<label for="title" class="small-12 column">Title:
			<input name="data[title]" type="text" id="title" value="<?=$data['title'];?>">
		</label>
		<label for="details" class="small-12 column">Details:
			<textarea name="data[details]" cols="77" id="details"><?=$data['details'];?></textarea>
		</label>
		<label for="location" class="small-3 column">Location:<br>
			<?=form::dropdown('data[location]', $cbo_location, $data['location']);?>
		</label>
		<label for="division" class="small-6 column">Show For:<br>
		<?php foreach($chk_divs as $k => $v): ?>
		<input type="checkbox" name="data[<?=$k;?>]" value="1" <?= ($data[$k] == 1) ? ' checked': ''?>> <?=$v;?> &nbsp;&nbsp;
		<?php endforeach; ?>
		</label>
		<label for="id_status" class="small-3 column">Status:<br>
			<?=form::dropdown('data[id_status]', $cbo_status, $data['id_status']);?>
		</label>
		<div class="column">
			<input name="data[id]" type="hidden" id="id" value="<?=$data['id'];?>">
			<input type="submit" name="save" id="save" value="Save Now" class="button">
			<?=$errMsg;?>
		</div>
	</form>
</div>
<script>
	$(function(){
		$('#date_start').fdatepicker({
			format: 'yyyy-mm-dd',
			initialDate: new Date(),
			disableDblClickSelection: true,
			leftArrow:'<<',
			rightArrow:'>>',
			closeButton: false
		});
	});
</script>
<?php include 'views/admin/footer.php'; ?>

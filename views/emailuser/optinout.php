<div class="m-w1">
	<div class="m-w2 section-inner">
		<h2 class="float-right">Manage your Subscription</h2>
		<hr class="clear">
		<div class="row">
			<form action="/emailuser/optinout/update" method="post">
				<div class="c6">
					<p>Please remove me from your email list. I do not wish to receive further email communications.</p>
					<button name="removeme" class="btn">Remove Me</button>
				</div>
				<div class="s1 c5">
					<p>Please keep me on your email list. I would like to receive further email communications.</p>
					<button name="keepme" class="btn">Keep Me</button>
					<input type="hidden" name="uuid" value="<?=$uuid;?>">
				</div>
			</form>
		</div>
	</div>
</div>

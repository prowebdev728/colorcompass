		<div class="row padded-bottom">
			<img src="/images/contact-banner.jpg" alt="Contact Color Compass Corporation">
		</div>
		<div class="row padded-vertical">
			<div class="small-12 medium-6 column">
				<h4>Contact Us</h4>
				<form action="contact/email" method="post" enctype="multipart/form-data" class="form1" id="contact_form">
					<fieldset>
						<label for="name">Name: </label>
						<input name="name" type="text" id="name" />
						<label for="email">Email: </label>
						<input name="email" type="text" id="email" />
						<label for="phone">Phone: </label>
						<input name="phone" type="text" id="phone" />
						<label for="message">Message: </label>
						<textarea name="message" rows="6" id="message"></textarea>
						<div class="clear btns"><input name="" type="submit" class="button" value="Submit" /> &nbsp; <input name="" type="reset" class="button" value="Clear" /></div>
					</fieldset>
				</form>
			</div>
			<div class="small-12 medium-6 column address">
				<div class="row">
					<div class="small-12 medium-4 column">
						<h5>Vancouver Office</h5>
						<p>
							1368 United Blvd.<br>
							Coquitlam, BC Canada<br>
							V3K 6Y2<br>
							604.540.7200
						</p>
					</div>
					<div class="small-12 medium-8 column map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.512242424047!2d-122.85395748451984!3d49.228776682509846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d7de6b36031b%3A0x9a29a162081444b!2s1368+United+Blvd%2C+Coquitlam%2C+BC+V3K+6Y2!5e0!3m2!1sen!2sca!4v1452039899102" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="small-12 medium-4 column">
						<h5>Edmonton Office</h5>
						<p>
							5308 - 97 Street<br>
							Edmonton AB, Canada<br>
							T6E 5W5<br>
							780.438.0838
						</p>
					</div>
					<div class="small-12 medium-8 column map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2373.8246928527565!2d-113.48229068436842!3d53.4894620716831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a018b63b1a1157%3A0xc243bb28a06db01d!2s5308+97+St+NW%2C+Edmonton%2C+AB+T6E+5W5!5e0!3m2!1sen!2sca!4v1452040080448" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
<script>
$(document).ready(function() {
	$('#contact_form').submit(function(e){
		e.preventDefault();
		$('input, textarea').removeClass('error');
		$('.err-msg').remove();
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(json) {
				if (json.result == 'failed') {
					$.each(json.err, function(id, msg) {
						$('#' + id).addClass('error');
						$('#' + id).after('<div class="err-msg">' + msg + '</div>');
					});
				} else {
					$('#contact_form').fadeOut(500, function(){
						$('#contact_form').html(json.msg).fadeIn();
					});
				}
			}
		});
		return false;
	});
});
</script>

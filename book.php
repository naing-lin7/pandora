<?php
    include 'include/header.php';
  ?>
<!--header-->

<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
						</div>
					</div>
					<div class="col-md-7">
						<div class="booking-form">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text">
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text">
											<span class="form-label">Total Price</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
                                    <div class="form-group">
											<span class="form-label">Room</span>
											<select class="form-control">
												<option>Single Room</option>
												<option>Double Room</option>
												<option>Romence Room</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
                                    <div class="form-group">
											<input class="form-control" type="date" required>
											<span class="form-label">Check In</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
                                    <div class="form-group">
											<input class="form-control" type="date" required>
											<span class="form-label">Check In</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <span class="form-label">Message</span>
											<textarea class="form-control" type="text">
                                            
											</textarea>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    <script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>
<?php
	include 'include/footer.php';
?>
</html>
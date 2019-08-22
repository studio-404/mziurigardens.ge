<?php defined('DIR') OR exit; ?>
<div class="ContactPageDiv">
	<div class="ContentDiv WithBackground BackgroundBlue PaddingBottom0Mobile">

		<div class="container Padding0">
			<div class="row">
				<div class="col-sm-12">
					<div class="Info">
						<div class="Title ColorWhite"><?php echo $title ?></div> 
					</div>

 				<div class="ContactBox">
						<div class="InputContact">
							<div id="gRequestContact"></div>
						</div>
						<div class="InputContact">
							<div class="form-group">
								<input type="text" placeholder="<?php echo l('name');?>" class="InputStyle g-name">
							</div>
							<div class="form-group">
								<input type="text" placeholder="<?php echo l('phone.number');?>" class="InputStyle g-phone">
							</div>			
							<div class="form-group">
								<input type="text" placeholder="<?php echo l('e.mail');?>" class="InputStyle g-email">
							</div>
							<div class="form-group">
								<textarea placeholder="<?php echo l('letter');?>" class="InputStyle g-message"></textarea>
							</div>
							<div class="form-group">
								<button class="SubmitButton g-submit"><?php echo l('messages');?> <span></span></button>
							</div>
						</div>
					</div> 
				</div> 
			</div>
		</div>
	</div>

</div>


<style>
	.FooterContact {
		padding-top:350px;
	}

	@media (max-width:992px) {
		.FooterContact {
			padding-top:150px;
		}
	}	
</style>
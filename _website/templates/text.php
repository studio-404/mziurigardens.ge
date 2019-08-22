<?php defined('DIR') OR exit; ?>
<div class="ContentDiv WithBackground BackgroundBlue PaddingBottom0Mobile">
	<div class="container Padding0">
		<div class="row">
			<div class="col-sm-6">
				<div class="Info">
					<div class="Title ColorWhite"><?php echo $title ?></div>
					<div class="Text ColorWhite">
						<?php echo $content ?>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="Image">
					<img src="<?php echo $image1 ?>" class="img-responsive" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
				</div>
			</div>
		</div>
	</div>
</div>
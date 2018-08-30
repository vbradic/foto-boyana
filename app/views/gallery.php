<div class="row">
	<div class="col-xs-12 text-center">
<?php echo $gallery_info[0]->description_header; ?>
<br>
<p><?php echo $gallery_info[0]->description_paragraph; ?></p>
	</div>
</div>

<div class="container gallery-container">
	<div class="tz-gallery">
		<div class="row text-center">
<?php foreach($gallery_image_list as $gallery_image) { ?>

			<div class="col-xs-12 col-md-10 col-md-offset-1 gallery_image">
				<a class="lightbox image" href="<?php echo $gallery_image->img_path; ?>">
				<img src="<?php echo $gallery_image->img_path; ?>">
				</a>
			</div>
	
<?php }?>
		</div>
	</div>
</div>
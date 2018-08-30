<div class="row vide_gallery">
	<div class="col-xs-12 col-md-6 col-md-offset-3">
	<?php foreach($video_list as $video) { ?>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe src="<?php echo $video->video_path;?>" ></iframe>
		</div>
		<br>
	<?php }?>
	</div>
	

</div>


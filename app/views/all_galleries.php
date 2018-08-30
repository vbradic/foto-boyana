
<div class="row" style="margin-bottom: 60px;">
	<div class="col-xs-4 col-xs-offset-4 text-center">
		<h1>Galleries</h1>
	</div>
</div>

<div class="container gallery-info-container ">

<?php foreach($gallery_info_list as $gallery_info) { ?>
	
	<div class="row gallery_row">

		<div class="col-xs-12 col-md-6 img-holder">

			<a class="lightbox" href="http://localhost/foto/index.php?controller=gallery&action=gallery&gallery_name=<?php echo $gallery_info->name;?>"> <img
				class="gallery-head-image img-responsive"
				src="<?php echo $gallery_info->head_image_path?>" alt="Bridge">
			</a>
			
		</div>

		<div class="col-xs-12 col-md-6 text-left">
			<a href="http://localhost/foto/index.php?controller=gallery&action=gallery&gallery_name=<?php echo $gallery_info->name;?>">
				<?php echo $gallery_info->description_header?>
			</a>
			<br>
			<p><?php echo $gallery_info->description_paragraph?></p>
		</div>

	</div>
   
	<div class="row">
		<div class="col-xs-12">
			<hr class="gallery_info_separator">
		</div>
	</div>

<?php }?>

</div>

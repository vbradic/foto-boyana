
<link rel="stylesheet" type="text/css" href="app/css/upload.css">
<script src="app/scripts/upload.js"></script>

<hr></hr>

<div id="uploads" class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#1" data-toggle="tab">Slide/Gallery head
				image</a></li>
		<li><a href="#2" data-toggle="tab">Gallery images</a></li>
		<li><a href="#3" data-toggle="tab">Video</a></li>
	</ul>



	<div class="tab-content ">


		<!--   table 1   -->
		<div class="tab-pane active" id="1">
			<form id="upload_form" enctype="multipart/form-data" method="post"
				action="app/actions/upload_script_single_image.php">

				<div class="container">
					<div class="upload_form_cont">

						<div class="row">

							<div class="col-md-2 ">
								<label class="radio-inline"> <input type="radio" id="slideRadio"
									name="slideRadio" value="slide">Slide img 
							
							</div>

							<div class="col-md-2 col-md-offset-4">
								</label> <label class="radio-inline"> <input type="radio"
									id="galleryRadio" name="galleryRadio" value="gallery">Gallery
									head img 
							
							</div>

							<br> <br> <br> <br>

							<div class="col-md-4 ">


								<div class="form-group">
									<label for="slidePlaceSelect">Chose slide place</label> <select
										class="form-control" id="slidePlaceSelect"
										name="slidePlaceSelect" disabled required>
										<option></option>
										<option value="home">Home</option>
										<option value="gallery">Gallery</option>
										<option value="video">Video</option>
									</select>
								</div>
							</div>

							<div class="col-md-4 col-md-offset-2">


								<div class="row">

									<div class="col-md-12">
										<label for="gallery_name">Gallery name</label> <input
											type="text" name="galleryName" id="galleryName" disabled
											required />
									</div>

									<br>
									<br>
									<br>
									<br>
									<div class="col-md-12">
										<div class="form-group">

											<label for="galleryDescriptionHeader">Gallery description
												header</label>
											<textarea class="form-control" id="galleryDescriptionHeader"
												name="galleryDescriptionHeader" rows="5" disabled required></textarea>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">

											<label for="galleryDescriptionParagraph">Gallery description
												paragraph</label>
											<textarea class="form-control"
												id="galleryDescriptionParagraph"
												name="galleryDescriptionParagraph" rows="5" disabled
												required></textarea>
										</div>
									</div>


								</div>

							</div>


						</div>

						<br> <br> <br> <br>



						<div class="row">
							<div class="col-md-4 col-md-offset-3">

								<div>
									<div>
										<label for="image_file">Please select image file</label>
									</div>
									<div>
										<input type="file" name="image_file" id="image_file"
											onchange="fileSelected();" />
									</div>
								</div>
								<div>
									<input type="submit" id="uploadButton" class="btn btn-primary"
										value="Upload Image" name="submit" />
								</div>
								<div id="fileinfo">
									<div id="filename"></div>
									<div id="filesize"></div>
									<div id="filetype"></div>
									<div id="filedim"></div>
								</div>
								<div id="error">You should select valid image files only!</div>
								<div id="error2">An error occurred while uploading the file</div>
								<div id="abort">The upload has been canceled by the user or the
									browser dropped the connection</div>
								<div id="warnsize">Your file is very big. We can't accept it.
									Please select more small file</div>

								<div id="progress_info">
									<div id="progress"></div>
									<div id="progress_percent">&nbsp;</div>
									<div class="clear_both"></div>
									<div>
										<div id="speed">&nbsp;</div>
										<div id="remaining">&nbsp;</div>
										<div id="b_transfered">&nbsp;</div>
										<div class="clear_both"></div>
									</div>
									<div id="upload_response"></div>
								</div>


								<img id="preview" />

							</div>




						</div>
						<hr></hr>

					</div>

				</div>
			</form>

		</div>

		<!--   table 1 end  -->



		<!--   table 2   -->

		<div class="tab-pane" id="2">

			<script type="text/javascript"
				src="http://www.expertphp.in/js/jquery.form.js"></script>
			<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>

			<div class="row">

				<form action="app/actions/upload_script_multi_images.php" method="post"
					enctype="multipart/form-data">

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="exampleFormControlSelect1">Chose gallery</label> 
								<select class="form-control" id="galleryNameSelect" name="galleryNameSelect" required>
									<option></option>

<?php 
require_once('app/models/gallery_info.php');
$gallery_info_list = GalleryInfo::allGaleries();
foreach($gallery_info_list as $gallery_info) {
?>									
									
									<option value="<?php echo $gallery_info->name;?>"><?php echo $gallery_info->name;?></option>
									
<?php }?>									
									
								</select>
							</div>
						</div>
					</div>

					<br> <br>

					<div class="row">
						<div class="col-md-6">
							<input type="file" class="form-control" id="images"
								name="images[]" onchange="preview_images();" multiple />
						</div>
						<div class="col-md-6">
							<input type="submit" class="btn btn-primary" name='submit_image'
								value="Upload Multiple Image" />
						</div>
					</div>
				</form>
			</div>
			<div class="row" id="image_preview"></div>

		</div>

		<!--   table 2 end  -->



		<div class="tab-pane" id="3">
			<form action="app/actions/upload_script_video.php" method="post">

				<div class="form-group">
					<label for="videoInput">Video link:</label> 
					<input type="text" class="form-control" id="videoInput" name="videoInput" required>
				</div>

				<button type="submit" class="btn btn-primary">Upload</button>
			</form>
		</div>
	</div>
</div>

<br>
<hr></hr>
<br>


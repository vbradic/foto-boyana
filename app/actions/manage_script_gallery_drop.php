<?php
require_once ('../connection.php');
require_once ('../models/gallery_info.php');
require_once ('../models/gallery_image.php');

$gallery_info = $_POST['galleryNameDropList'];

$gallery_info_parts = explode(':', $gallery_info);

$gallery_id = $gallery_info_parts[0];
$gallery_name = $gallery_info_parts[1];

GalleryInfo::deleteGalleryInfo($gallery_id);
GalleryImage::deleteGalleryImagesByGalleryName($gallery_name);

header("Location: http://localhost/foto/index.php?controller=manage&action=manage"); /* Redirect browser */
exit();

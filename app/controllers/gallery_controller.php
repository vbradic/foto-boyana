<?php
class GalleryController {
    
    function __construct() {}
    
    public function all_galleries() {
        
        $gallery_info_list = GalleryInfo::allActiveGaleries();
        require_once('app/views/all_galleries.php');
    }
    
    public function gallery() {
            
        if(isset($_GET['gallery_name'])) {
            $gallery_name = $_GET['gallery_name'];
        $gallery_info = GalleryInfo::galleryDescription($gallery_name);
        $gallery_image_list = GalleryImage::imagesPerGalleryName($gallery_name);
        require_once('app/views/gallery.php');
        }
                
    }
}
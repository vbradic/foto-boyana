<?php
class HomeController {
    
    function __construct() {}
    
    public function home() {
        
        $weedings = "wedding";
        $weddings_image_list = GalleryImage::imagesPerGalleryName($weedings);
        
        $vow_renewal = "vow_renewal";
        $vow_renewal_image_list = GalleryImage::imagesPerGalleryName($vow_renewal);
        
        $family = "family";
        $family_image_list = GalleryImage::imagesPerGalleryName($family);
        
        $maternity_and_new_born = "newborn";
        $maternity_and_new_born_image_list = GalleryImage::imagesPerGalleryName($maternity_and_new_born);
        
        require_once('app/views/home.php');
    }
}
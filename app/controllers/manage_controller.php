<?php
class ManageController {
    
    function __construct() {}
    
    public function manage() {
        
        $gallery_info_list = GalleryInfo::allGaleries();
        $slide_images_home = SlideImage::getAllSlideImagesBySlidePlace('home');
        $slide_images_gallery = SlideImage::getAllSlideImagesBySlidePlace('gallery');
        $slide_images_video = SlideImage::getAllSlideImagesBySlidePlace('video');
        $video_links = Video::allVideos();
        require_once('app/views/manage.php');
    }
}
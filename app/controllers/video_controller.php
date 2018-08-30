<?php 
class VideoController {
    
    function __construct() {}
    
    public function all_videos() {
        
        $video_list = Video::allVideos();
        require_once('app/views/video_gallery.php');
    }
}
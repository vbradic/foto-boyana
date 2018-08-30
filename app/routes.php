<?php

function call($controller, $action) {
    
    require_once('controllers/' . $controller . '_controller.php');
    
    switch($controller) {
        
        case 'home':
            //require_once('app/models/gallery_info.php');
            $controller = new HomeController();
            break;
            
        case 'about':
            $controller = new AboutController();
            break;
            
        case 'gallery':
            require_once('app/models/gallery_info.php');
            require_once('app/models/gallery_image.php');
            $controller = new GalleryController();
            break;
        
        case 'destination':
            //require_once('app/models/gallery_info.php');
            //require_once('app/models/gallery_image.php');
            $controller = new DestinationController();
            break;
            
            
        case 'video':
            require_once('app/models/video.php');
            $controller = new VideoController();
            break;
         
        case 'contact':
            $controller = new ContactController();
            break;
            
        case 'upload':
            $controller = new UploadController();
            break;
            
        case 'manage':
            require_once('app/models/gallery_info.php');
            require_once('app/models/slide_image.php');
            require_once('app/models/video.php');
            $controller = new ManageController();
            break;
            
    }
    
    $controller->{ $action }();
}

$controllers = array(
                     'home'    => ['home'], 
                     'about'   => ['about'],
                      'destination' => ['show'],
                     'gallery' => ['all_galleries', 'gallery'], 
                     'video'   => ['all_videos'], 
		              'contact' => ['contact'],
                     'upload'  => ['upload'],
                     'manage'  => ['manage']
                );

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>

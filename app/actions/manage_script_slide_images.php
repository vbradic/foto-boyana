<?php
require_once ('../connection.php');
require_once ('../models/slide_image.php');

if (isset($_POST["homeSlide"])) {
    
    $homeImageSlides = $_POST['homeSlideImages'];
    
    foreach ($homeImageSlides as $slideImage => $value) {
        
        if ($_POST['homeSlide'] == 'homeSlideActivate') {            
            SlideImage::activateSlideImage($value);
        } else if ($_POST['homeSlide'] == 'homeSlideDeactivate') {            
            SlideImage::deactivateSlideImage($value);
        }
    }    
   
}

if (isset($_POST["gallerySlide"])) {
    $galleryImageSlides = $_POST['gallerySlideImages'];
    
    foreach ($galleryImageSlides as $slideImage => $value) {
        
        if ($_POST['gallerySlide'] == 'gallerySlideActivate') {
            
            SlideImage::activateSlideImage($value);
        } else if ($_POST['gallerySlide'] == 'gallerySlideDeactivate') {
            
            SlideImage::deactivateSlideImage($value);
        }
    }
}

if (isset($_POST["videoSlide"])) {
    $videoImageSlides = $_POST['videoSlideImages'];
    
    foreach ($videoImageSlides as $slideImage => $value) {
        
        if ($_POST['videoSlide'] == 'videoSlideActivate') {
            
            SlideImage::activateSlideImage($value);
        } else if ($_POST['videoSlide'] == 'videoSlideDeactivate') {
            
            SlideImage::deactivateSlideImage($value);
        }
    }
}


header("Location: http://localhost/foto/index.php?controller=manage&action=manage"); /* Redirect browser */
exit();
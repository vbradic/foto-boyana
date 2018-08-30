<?php
require_once ('../connection.php');
require_once ('../models/gallery_info.php');

if (isset($_POST["galleryHeadImage"])) {
    
    $galleryHeadImages = $_POST['galleryHeadImages'];
    
    foreach ($galleryHeadImages as $galleryHeadImage => $value) {
        
        if ($_POST['galleryHeadImage'] == 'galleryHeadActivate') {
            GalleryInfo::activateGalleryHeadImage($value);
        } else if ($_POST['galleryHeadImage'] == 'galleryHeadDeactivate') {
            GalleryInfo::deactivateGalleryHeadImage($value);
        }
    }
}

header("Location: http://localhost/foto/index.php?controller=manage&action=manage"); /* Redirect browser */
exit();

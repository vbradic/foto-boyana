<?php

//echo "stiglo : ".$_POST['slideRadio']." , ".$_POST['slidePlaceSelect']." ; ";

if(isset($_POST["slideRadio"])) {
    
    $upload_place = "slide";
    $slide_place = $_POST['slidePlaceSelect'];
    $target_dir = "../imgs/slides/";
}

if(isset($_POST["galleryRadio"])) {
    
    $upload_place = "gallery_head";
    $target_dir = "../imgs/gallery_head_images/";
    $gallery_name = $_POST['galleryName'];
    $gallery_description_header = $_POST['galleryDescriptionHeader'];
    $gallery_description_paragraph = $_POST['galleryDescriptionParagraph'];
}

//$target_dir = "../uploads/";
/*
if(isset($_FILES['image_file'])) {
    echo "IMG POSTED! = ".$_FILES["image_file"]["tmp_name"];
    echo "<br>";
    echo "ERROR=".$_FILES['image_file']['error'];
    echo "<br>";
    echo "FILE SIZE=".$_FILES['image_file']['size'];
    echo "<br>";
}
*/
$target_file = $target_dir . basename($_FILES["image_file"]["name"]);

//echo "TARGET FILE =".$target_file;


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image_file"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        exit();
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    exit();
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image_file"]["size"] > 55500000) {
    echo "Sorry, your file is too large.";
    exit();
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        exit();
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        exit();
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
            
            //echo "The file ". basename( $_FILES["image_file"]["name"]). " has been uploaded.";
            
            require_once('../connection.php');
            $target_file = substr($target_file,3);
            $target_file = "app/".$target_file;
            
            switch ($upload_place) {
                
                case 'slide':
                                        
                    require_once('../models/slide_image.php');                       
                    SlideImage::saveSlideImage($target_file, $slide_place);                    
                    break;
                
                case 'gallery_head':
                    require_once('../models/gallery_info.php');
                    GalleryInfo::saveGalleryInfo($gallery_name, $target_file, $gallery_description_header, $gallery_description_paragraph);                    
                    break;
            }
            
            
            
            
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }
    
    header("Location: http://localhost/foto/index.php?controller=upload&action=upload"); /* Redirect browser */
    
    ?>
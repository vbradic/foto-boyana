<?php

//echo "stiglo : ".$_POST['slideRadio']." , ".$_POST['slidePlaceSelect']." ; ";

//echo "UPLOADIN IMGS COUNT = ".count($_FILES["images"]["name"]);


$gallery_name = $_POST['galleryNameSelect'];

for($i=0; $i<count($_FILES["images"]["name"]); $i++) {

$target_dir = "../imgs/galleries/".$gallery_name."/";
if(!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$target_file = $target_dir . basename($_FILES["images"]["name"][$i]);

/*
echo "TARGET FILE =".$target_file;
echo "<br>";
*/

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["images"]["tmp_name"][$i]);
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
if ($_FILES["images"]["size"][$i] > 55500000) {
    echo "Sorry, your file is too large.";
    exit();
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        exit();
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $target_file)) {
            
           // echo "The file ". basename( $_FILES["images"]["name"][$i]). " has been uploaded.";
           // echo "<br>";
            
            require_once('../connection.php');
            $target_file = substr($target_file,3);
            $target_file = "app/".$target_file;
                       
                    require_once('../models/gallery_image.php');
                    GalleryImage::saveGalleryImage($target_file, $gallery_name);
           
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit();
        }
    }
    
}

header("Location: http://localhost/foto/index.php?controller=upload&action=upload"); /* Redirect browser */
exit();
    ?>
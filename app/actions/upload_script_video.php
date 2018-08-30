<?php

$video_path = $_POST['videoInput'];

$video_path = "//player.".explode("//", $video_path)[1];
$video_path = str_replace("vimeo.com","vimeo.com/video",$video_path);

require_once('../connection.php');
require_once('../models/video.php');

Video::saveVideo($video_path);

header("Location: http://localhost/foto/index.php?controller=upload&action=upload");
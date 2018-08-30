<?php
require_once ('../connection.php');
require_once ('../models/video.php');

$video_id = $_POST['videoDropSelect'];

Video::deleteVideo($id);
header("Location: http://localhost/foto/index.php?controller=manage&action=manage"); /* Redirect browser */
exit();

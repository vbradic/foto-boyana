<?php
class Video
{
    
    public $id;    
    public $video_path;
    
    function __construct($id, $video_path)
    {
        $this->id = $id;
        $this->video_path = $video_path;       
    }
    
    public static function allVideos(){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM video ORDER BY id DESC');
        $req->execute();
        
        foreach($req->fetchAll() as $video) {
            $list[] = new Video($video['id'], $video['video_path']);
        }
        
        return $list;
    }
    
    public static function saveVideo($video_path) {
        
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO video (video_path)
                             VALUES (?)');
        
        $req->bindParam(1, $video_path,PDO::PARAM_STR);
             
        $req->execute();
    }
    
    public static function deleteVideo($id) {
        
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM video WHERE id= :id');
        $req->execute(array(
            'id' => $id
        ));
    }

}
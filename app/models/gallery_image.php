<?php
class GalleryImage {
    
    public $id;
    public $img_path;
    public $gallery_name;
    
    function __construct($id, $img_path, $gallery_name){
        
        $this->id = $id;
        $this->img_path = $img_path;
        $this->gallery_name = $gallery_name;
    }
    
    public static function imagesPerGalleryName($gallery_name){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_image 
                             WHERE gallery_name = :gallery_name');
        
        $req->execute(array('gallery_name' => $gallery_name));
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryImage($gallery_info['id'], $gallery_info['img_path'], $gallery_info['gallery_name']);
        }
        
        return $list;
    }
    
    public static function saveGalleryImage($img_path, $gallery_name) {
        
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO gallery_image (img_path , gallery_name)
                             VALUES (?,?)');
        $req->bindParam(1, $img_path,PDO::PARAM_STR);
        $req->bindParam(2, $gallery_name,PDO::PARAM_STR);
        
        $req->execute();
    }
    
    public static function deleteGalleryImagesByGalleryName($gallery_name) {
        
        $db = Db::getInstance();
        $req = $db->prepare('DELETE FROM `gallery_image` WHERE gallery_name= :gallery_name');
        $req->execute(array(
            'gallery_name' => $gallery_name
        ));
    }
    
}


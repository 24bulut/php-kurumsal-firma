<?php


class Galery extends Upload {


    protected $id,$imageUrl;

    public function setImageUrl($imageUrl){
        $this->imageUrl = $imageUrl;
    }
    public function setId($id){
        $this->id = $id;
    }


    public function getGalery(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM galery");
        $stmt->execute();
        $galery = $stmt->fetchAll();
        return $galery;
    }

    
    public function getGaleryById(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM galery WHERE id=?");
        $stmt->execute([$this->id]);
        $galery = $stmt->fetchAll();
        return $galery;
    }

    public function addImage(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("INSERT INTO galery SET  image_url=?");
        return $stmt->execute([$this->imageUrl]) ? true : false ;
    }


    public function removeImage(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("DELETE FROM galery WHERE id=?");
        return $stmt->execute([$this->id]) ? true : false ;
    }


}
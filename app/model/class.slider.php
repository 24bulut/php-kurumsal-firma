<?php


class Slider extends Upload {


    protected $imageUrl,$id, $title , $content;

    public function setId($id){
        $this->id = $id;
    }
    public function setImageUrl($imageUrl){
        $this->imageUrl = $imageUrl;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setContent($content){
        $this->content = $content;
    }

    public function getSlider(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM slider");
        $stmt->execute();
        $galery = $stmt->fetchAll();
        return $galery;
    }

    
    public function getSliderById(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM slider WHERE id=?");
        $stmt->execute([$this->id]);
        $slider = $stmt->fetchAll();
        return $slider;
    }

    public function addSlider(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("INSERT INTO slider SET  image_url=?, title=?, content=?");
        return $stmt->execute([$this->imageUrl,$this->title,$this->content]) ? true : false ;
    }


    public function editSlider(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("UPDATE slider SET  title=?, content=? WHERE id=?");
        return $stmt->execute([$this->title,$this->content,$this->id]) ? true : false ;
    }

    public function removeImage(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("DELETE FROM slider WHERE id=?");
        return $stmt->execute([$this->id]) ? true : false ;
    }
}
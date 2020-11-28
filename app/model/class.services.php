<?php 

class Services {

    protected $serviceId,$title,$content;
    public function setServiceId($serviceId){
        $this->serviceId = $serviceId;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setContent($content){
        $this->content = $content;
    }



    # return array
    public function getServices(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM services");
        $stmt->execute();
        $services = $stmt->fetchAll();
        return $services;
    }


    # return array
    public function getServiceById(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM services WHERE  id=?");
        $stmt->execute([$this->serviceId]);
        $services = $stmt->fetch();
        return $services;

    }

    public function removeService(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("DELETE FROM services WHERE  id=?");
        $stmt->execute([$this->serviceId]);
        return $stmt ? true : false;

    }


    public function addServices(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("INSERT INTO services SET title=?,content =? ");
        $stmt->execute([$this->title,$this->content]);
        return $stmt ? true : false;
    }

    public function editServices(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("UPDATE services SET title=?,content =?  WHERE id = ?");
        $stmt->execute([$this->title,$this->content, $this->serviceId]);
        return $stmt ? true : false;
    }
}
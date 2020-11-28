<?php
class Config extends Upload
{
    protected $siteTitle,$siteKeywords,$siteDescription,$address,$email,$phone1,$phone2,$googleMapsCode,$aboutUs,$companyName;
    public function setSiteTitle($siteTitle){
        $this->siteTitle = $siteTitle;
    }
    public function setSiteKeywords($siteKeywords){
        $this->siteKeywords = $siteKeywords;
    }
    public function setSiteDescription($siteDescription){
        $this->siteDescription = $siteDescription;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPhone1($phone1){
        $this->phone1 = $phone1;
    }
    public function setPhone2($phone2){
        $this->phone2 = $phone2;
    }
    public function setGoogleMapsCode($googleMapsCode){
        $this->googleMapsCode = $googleMapsCode;
    }
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }

    public function setAboutUs($aboutUs){
        $this->aboutUs = $aboutUs;
    }


    public function getConfig()
    {
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("SELECT * FROM config");
        $stmt->execute();
        $config = $stmt->fetch();
        return $config;
    }

    public function editAboutUs(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("UPDATE config SET  about_us=?  WHERE id=1");
        return $stmt->execute([$this->aboutUs]) ? true : false ;
        
    }

    public function editSiteConfig(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("UPDATE config SET  site_title=? , site_keywords=? , site_description=? , company_name = ?   WHERE id=1");
        return $stmt->execute([$this->siteTitle, $this->siteKeywords , $this->siteDescription, $this->companyName]) ? true : false ;
    }

    public function editContact(){
        $pdo = new Database();
        $connection = $pdo->MySqlConnection();
        $stmt = $connection->prepare("UPDATE config SET  email=?, phone1=?, phone2=?, google_maps_code=?  WHERE id=1");
        return $stmt->execute([$this->email, $this->phone1, $this->phone2 , $this->googleMapsCode]) ? true : false ;
    }

}

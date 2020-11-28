<?php

class Upload {
    protected $fileName,$fileTmpName,$path;
    public function setFileName($fileName){
        $this->fileName = $fileName;
    }
    public function setFileTmpName($fileTmpName){
        $this->fileTmpName = $fileTmpName;
    }
    public function setPath($path){
        $this->path = $path;
    }
    public function upload(){
        $file = $this->path ."/". basename($this->fileName);

        if (move_uploaded_file($this->fileTmpName , $file))
        {
            return true;
        } else {
            return false;
        }
    }
}
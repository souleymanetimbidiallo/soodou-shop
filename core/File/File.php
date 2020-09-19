<?php
namespace Core\File;
session_start();

class File {

    private $filename;
    private $file;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function open($opening_mode){
        $file = fopen($this->filename, $opening_mode);
        $this->file = $file;
    }

    public function close(){
        fclose($this->file);
    }
    public function readline(){
        return fgets($this->file);
    }
    public function readAll(){
        $content= "";
        while(!feof($this->file)){
            $content .= fgets($this->file) . '<br/>';
        }
        return $content;
    }
    public function write($text){
        fputs($this->file, $text);
    }

    public function delete(){
        if(unlink($this->filename)){
            echo 'Le fichier "'.$this->filename.'" a été supprimé avec succès';
        }else{
            echo 'Echec de la suppression du fichier"'.$this->filename.'"';
        }
    }
}
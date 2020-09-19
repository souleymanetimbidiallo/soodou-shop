<?php
namespace App\Table;

use App\App;

class Pays extends Table{

    protected static $table = 'pays';

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    public function getUrl(){
        return "index.php?p=country&id=".$this->id;
    }
}
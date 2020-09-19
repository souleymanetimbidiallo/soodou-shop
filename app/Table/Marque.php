<?php
namespace App\Table;

use App\App;

class Marque extends Table{

    protected static $table = 'marques';

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    public function getUrl(){
        return "index.php?p=marque&id=".$this->id;
    }
}
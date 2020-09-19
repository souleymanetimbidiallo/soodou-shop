<?php
namespace App\Table;

use App\App;

class Utilisateur extends Table{

    protected static $table = 'users';

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    public function getUrl(){
        return "index.php?p=user&id=".$this->id;
    }
}
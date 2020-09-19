<?php
namespace App\Table;

use App\App;

class Table {

    protected static $table;

    public static function find($id){
        return static::query(
            "SELECT *
            FROM ".static::$table."
            WHERE id = ?", [$id], true);
    }

    public static function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $key => $value){
            $sql_parts[] = "$key = ?";
            $attributes[] = $value;

        }
        $attributes[] = $id;
        $sql_part = implode(',', $sql_parts);
        return static::query("UPDATE ".static::$table." SET $sql_part WHERE id = ?", $attributes , true);
    }

    public static function delete($id){
        return static::query("DELETE FROM ".static::$table." WHERE id = ?", [$id] , true);
    }

    public static function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $key => $value){
            $sql_parts[] = "$key = ?";
            $attributes[] = $value;

        }
        $sql_part = implode(',', $sql_parts);
        return static::query("INSERT INTO ".static::$table." SET $sql_part", $attributes , true);
    }

    public static function list($key, $value){
        $records = static::getAll();
        $return =  [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public static function query($statement, $attributes=null, $one=false){
        if($attributes){
            return App::getDatabase()->prepare($statement, $attributes, get_called_class(), $one);
        }else{
            return App::getDatabase()->query($statement, get_called_class(), $one);
        }
    }

    public static function getAll(){
        return static::query(
            "SELECT *
            FROM ".static::$table ."", get_called_class());
    }

    public function __get($key){
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }


}
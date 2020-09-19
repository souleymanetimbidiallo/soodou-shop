<?php
namespace App\Table;

use App\App;

class Commande extends Table{

    protected static $table = "commandes";

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    
    public static function find($id){
        return self::query(
            "SELECT cmd.id as id, cmd.date_commande as date_commande, cmd.date_reg as date_reg, 
            cmd.montant_reg as montant_reg, cmd.mode_paiement as mode_paiement,
            cmd.id_client as id_client, cli.nom as client
            FROM commandes cmd
            LEFT JOIN clients cli 
            ON cmd.id_client = cli.id
            WHERE cmd.id = ?", 
            [$id], true);
    }

    public function __get($key){
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return "index.php?p=order&id=".$this->id;
    }

    
}
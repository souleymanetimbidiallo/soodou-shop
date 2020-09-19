<?php
namespace App\Table;

use App\App;

class Client extends Table{

    protected static $table = "clients";

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    
    public static function find($id){
        return self::query(
            "SELECT cli.id as id, cli.nom as nom, cli.prenom as prenom, 
            cli.email as email, cli.mdp as mdp, cli.ville as ville ,cli.tel as tel,
            cli.cp as cp, cli.adresse as adresse,
            p.nom as pays
            FROM clients cli 
            LEFT JOIN pays p
            ON cli.id_pays = p.id
            WHERE cli.id = ?", 
            [$id], true);
    }


    public static function getLast(){
        return self::query(
            "SELECT pr.id as id, pr.nom as nom, pr.prenom as prenom, 
            pr.email as email, pr.mdp as mdp, pr.ville as ville ,
            cat.titre as categorie, mark.nom as marque,
            pr.id_client as category_id, pr.id_marque as id_marque
            FROM produits pr 
            LEFT JOIN pays cat 
            ON pr.id_client = cat.id
            LEFT JOIN marque as mark 
            ON pr.id_marque = mark.id
            ORDER BY pr.nom DESC;"
        );
    }

    public static function CustomerByCountry($pays_id){
        return self::query(
            "SELECT cli.id as id, cli.nom as nom, cli.prenom as prenom, 
            cli.email as email, cli.mdp as mdp, cli.ville as ville, cli.tel as tel,
            cli.cp as cp, cli.adresse as adresse,
            pays.nom as nom_pays 
            FROM clients cli
            LEFT JOIN pays p 
            ON p.id = cli.id_pays
            WHERE pays.id = ?
            ORDER BY cli.nom DESC",[$pays_id]);
    }
    public function __get($key){
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return "index.php?p=customer&id=".$this->id;
    }
    public function getFullname(){
        return $this->prenom." ".$this->nom;
    }

    
}
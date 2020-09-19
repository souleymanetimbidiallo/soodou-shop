<?php
namespace App\Table;

use App\App;

class Fournisseur extends Table{

    protected static $table = "fournisseurs";

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    
    public static function find($id){
        return self::query(
            "SELECT frs.id as id, frs.nom as nom, 
            frs.email as email, frs.ville as ville , frs.telfixe as telfixe,
            frs.cp as cp, frs.adresse as adresse,
            p.nom as pays
            FROM fournisseurs frs 
            LEFT JOIN pays p
            ON frs.id_pays = p.id
            WHERE frs.id = ?", 
            [$id], true);
    }


    public static function getLast(){
        return self::query(
            "SELECT pr.id as id, pr.designation as designation, pr.description as description, 
            pr.prix as prix, pr.prix_promo as prix_promo, pr.photo as photo ,
            cat.titre as categorie, mark.nom as marque,
            pr.id_categorie as category_id, pr.id_marque as id_marque
            FROM produits pr 
            LEFT JOIN categories cat 
            ON pr.id_categorie = cat.id
            LEFT JOIN marque as mark 
            ON pr.id_marque = mark.id
            ORDER BY pr.designation DESC;"
        );
    }

    public static function lastByCountry($category_id){
        return self::query(
            "SELECT pr.id as id, pr.designation as designation, pr.description as description, 
            pr.prix as prix, pr.prix_promo as prix_promo, pr.photo as photo ,cat.titre as categorie 
            FROM produits pr
            LEFT JOIN categories cat 
            ON pr.id_categorie = cat.id
            WHERE pr.id_categorie = ?
            ORDER BY pr.designation DESC",[$category_id]);
    }
    public function __get($key){
        $method = 'get'.ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return "index.php?p=fournisseur&id=".$this->id;
    }

    public function getExtract(){
        $html = '<p>'.substr($this->description, 0, 120).' ...</p>';
        return $html;
    }
}
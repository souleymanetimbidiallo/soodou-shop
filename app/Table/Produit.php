<?php
namespace App\Table;

use App\App;

class Produit extends Table{

    protected static $table = "produits";

    public static function getAll(){
        return self::query(
            "SELECT *
            FROM ".self::$table."");
    }

    
    public static function find($id){
        return self::query(
            "SELECT pr.id as id, pr.designation as designation, pr.description as description, 
            pr.prix as prix, pr.prix_promo as prix_promo, pr.photo as photo ,
            cat.titre as categorie, mark.nom as marque, frs.nom as fournisseur,
            pr.id_categorie as category_id, pr.id_marque as id_marque, pr.id_fournisseur as id_fournisseur
            FROM produits pr 
            LEFT JOIN categories cat 
            ON pr.id_categorie = cat.id
            LEFT JOIN marques as mark 
            ON pr.id_marque = mark.id
            LEFT JOIN fournisseurs as frs 
            ON pr.id_fournisseur = frs.id
            WHERE pr.id = ?", 
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

    public static function lastByCategory($category_id){
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
        return "index.php?p=product&id=".$this->id;
    }

    public function getExtract(){
        $html = '<p>'.substr($this->description, 0, 120).' ...</p>';
        return $html;
    }

    public static function getPicture($id, $name){
        if(isset($_FILES['photo']) AND !empty($_FILES['photo']['name'])){
            $maxlength = 2097152;
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
            if($_FILES['photo']['size'] <= $maxlength){
                $extensionsUpload = strtolower(substr(strrchr($_FILES['photo']['name'], '.'), 1));
                if(in_array($extensionsUpload, $extensionsValides)){
                    $chemin = '../public/images/products/'.$id.'.'.$extensionsUpload;
                    $resultat = move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
                    if($resultat){
                        $picture = $id.'.'.$extensionsUpload;
                    }else{
                        die('Erreur lors de l\'importation de la photo!');
                    }
                }else{
                    die('La photo de doit être au format (jpg, jpeg, gif ou png)');
                }
            
            }else{
                die('La photo ne doit pas dépasser 2MO');
            }
        }else{
            $picture = $id.'.'.$extensionsUpload;
        }
        return $picture;
    }
}
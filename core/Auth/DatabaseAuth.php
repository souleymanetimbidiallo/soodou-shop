<?php
namespace Core\Auth;
session_start();
use App\Database;

class DatabaseAuth {

    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param username nom d'utilisateur
     * @param password mot de passe
     * @return boolean 
     */
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE username = ?', [$username], null, true);
        //echo '<pre>'; var_dump($user); echo '</pre>';
        if($user){
            if($user->password === sha1($password)){
                $_SESSION['auth'] = $user->id;
                setcookie('user_id', $user->id);
                $_SESSION['username'] = $user->username;
                setcookie('username', $user->username, time()+3600*24, '/', '', true, true);
                return true;
            }
        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
        header('Location: ../../public/index.php?p=login');
    }
}
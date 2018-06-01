<?php
class Token{
    public static function generate(){
        return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }
    public static function check($token){
        if(isset($_SESSION['token']) && $token === $_SESSION['token']){
            unset($_SESSION['token']);
            return true;
        }
        return false;
    }
    
}   

class Token2{
    public static function generate($name){
        return $_SESSION[$name] = base64_encode(openssl_random_pseudo_bytes(32));
    }
    
    public static function check($token, $name){
        if(isset($_SESSION[$name]) && $token === $_SESSION[$name]){
            unset($_SESSION[$name]);
            return true;
        }
        return false;
    }
}
?>
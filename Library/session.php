<?php

/**
 *
 */
class Session
{

  public static function init(){
    if (version_compare(phpversion(), '5.4.0','<')) {
      if (session_id()=='') {
        session_start();
      }
    }else {
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }
      }
    }

    public static function set($Key, $val)
    {
      $_SESSION[$Key] = $val;
    }
    public static function get($Key)
    {
      if (isset($_SESSION[$Key])) {
        return $_SESSION[$Key];
      }else {
        return false;
      }
    }

    public static function checkSession(){
      self::init();
      if(self::get('login')==false){
        self::destroy();
        header("Location:login.php");
      }
    }

    public static function checklogin(){
      self::init();
      if(self::get('login')==true){
        header("Location:index.php");
      }
    }



    public static function destroy()
    {
      session_destroy();
      header("Location:index.php");
    }
}



 ?>

<?php

    include_once 'Configuration\Cong.php';


    class Database
    {
      public $host   = DB_HOST;
      public $user   = DB_USRE;
      public $pass   = DB_PASS;
      public $dbname = DB_NAME;
      public $link;
      public $error;


      public function __construct()
      {
        $this->ConnectDB();
      }

      public function ConnectDB()
      {
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if (!$this->link) {
          $this->error = "Connect Fail".$this->link->connect_error();
          return false;
        }
      }

      public function Select($query)
      {
        $result = $this->link->query($query) or
        die($this->link->error.___LINE__);
        if ($result->num_rows > 0) {
          return $result;
        }else {
          return false;
        }
      }

      public function Insert($query)
      {
        $result = $this->link->query($query) or
        die($this->link->error.__LINE__);
        if ($result->num_rows > 0) {
          return $result;
        }else {
          return false;
        }
      }

       public function Update($query)
      {
        $result = $this->link->query($query) or
        die($this->link->error.__LINE__);
        if ($result->num_rows > 0) {
          return $result;
        }else {
          return false;
        }
      }

        public function Delete($query)
        {
         $result = $this->link->query($query) or
         die($this->link->error.__LINE__);
         if ($result->num_rows > 0) {
           return $result;
         }else {
           return false;
         }
        }
      }
?>

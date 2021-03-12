<?php
    include_once 'Library/session.php';
    include_once 'Library/Database.php';

    class person
    {


      private  $db;

      function __construct()
      {
        $this->db = new Database();
      }

      public function Register($data)
      {
        $Username = mysqli_real_escape_string($this->db->link,$data['username']);
        $Email    = mysqli_real_escape_string($this->db->link,$data['email']);
        $Password = mysqli_real_escape_string($this->db->link,$data['password_1']);

        if (empty($Username) or empty($Email) or empty($Password)){
          $msg = "<span class= 'error'>Field must not be empty</span>";
          return $msg;
        }
        $query = "SELECT * FROM `users` WHERE US_Email = '$Email' AND US_Password = '$Password'";
        $result = $this->db->Select($query);
        if ($result) {
          $msg = "<span class= 'error'>Email already Exist.</span>";
          return $msg;
        }else{
          $query ="INSERT INTO `users`(`Username`, `US_Email`, `US_Password`) VALUES ('$Username', '$Email', '$Password')";
          $row =$this->db->Insert($query);
          if ($row) {
            $msg = "<span class= 'Success'>Registration Successfull..</span>";
            return $msg;
          }else {
            $msg ="<span class= 'error'>Something Went Wrong!</span>";
            return $ms;
          }
        }
      }


        public function login($data)
          {
            Session::checklogin();

            $Email = mysqli_real_escape_string($this->db->link,$data['user']);
            $Password = mysqli_real_escape_string($this->db->link,$data['pass']);

            if (empty($Email) or empty($Password)){
              $msg = "<span class= 'error'>Field must not be empty</span>";
              return $msg;
            }

            if ($query = "SELECT * FROM admin WHERE Ad_Email = '$Email' AND  Ad_Password = '$Password'"){
              $result = $this->db->Select($query);
              if ($result==true){
                $value = $result->fetch_assoc();
                Session::set('login',true);
                Session::set('ID',$value['id']);
                Session::set('name',$value['name']);

                header("Location:admin.php");
                exit();
              }
            }

            if($query = "SELECT * FROM supervisor WHERE SU_Email = '$Email' AND  SU_Password = '$Password'") {
              $result = $this->db->Select($query);
              if ($result==true) {
                $value = $result->fetch_assoc();
                Session::set('login',true);
                Session::set('ID',$value['id']);
                Session::set('name',$value['name']);
                header("Location:supervisor.php");
              }
            }
            if($query = "SELECT UserID FROM users WHERE US_Email = '$Email' AND US_Password = '$Password' AND Us_Status = 1") {
              $result = $this->db->Select($query);
              if ($result == true) {
                $value = $result->fetch_assoc();
                $id = $value["UserID"];
                /*Session::set('login',true);
                Session::set('ID',$value['id']);
                Session::set('name',$value['name']);*/
                $_SESSION["id"] = $id;
                $_SESSION["user_login"] = $Email;
                $_SESSION["password_login"] = $Password;
                header("Location:profile.php");
              }
            }else {
              $msg ="<span class= 'error'>Email and Password not match OR your account is blocked by the admin</span>";
              return $ms;
            }
          }

          public function Forgetpassword($data)
          {
               $Email = mysqli_real_escape_string($this->db->link,$data['email']);
               $Password = mysqli_real_escape_string($this->db->link,$data['pass']);

               if ($query = "UPDATE `users` SET `US_Password` = '$Password' WHERE `users`.`US_Email` = '$Email'") {
                 $result = $this->db->Update($query);
                 if ($result == true) {
                   $value = $result->fetch_assoc();
                 }
               }
               if ($query = "UPDATE `supervisor` SET `SU_Password` = '$Password' WHERE `supervisor`.`SU_Email` = '$Email'") {
                $result = $this->db->Update($query);
                if ($result == true) {
                  $value = $result->fetch_assoc();
                }
              }
               if ($query = "UPDATE `admin` SET `Ad_Password` = '$Password' WHERE `admin`.`Ad_Email` = '$Email'"){
                $result = $this->db->Update($query);
                if ($result == true) {
                  $value = $result->fetch_assoc();
                }
              }
            }

            public function logout ()
            {
              session_start();
              session_destroy();

              header("Location: Index.php");
            }
          }

 ?>

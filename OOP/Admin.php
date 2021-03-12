<?php

include_once 'Library/Database.php';
include_once 'Person.php';


/**
 *
 */
class Admin extends Person
{
  private  $db;

  function __construct()
  {
    $this->db = new Database();
  }



  public function CloseAccount($data)
  {
    $Email = mysqli_real_escape_string($this->db->link,$data['email']);
    if ($query = "UPDATE `users` SET `Us_Status` = 0 WHERE `users`.`US_Email` = '$Email'") {
      $result = $this->db->Update($query);
        if ($result == true) {
          $value = $result->fetch_assoc();
      
    }else {
      $query = "UPDATE `users` SET  `Us_Status` = 1  WHERE `users`.`US_Email` = '$Email'";
      $result = $this->db->Update($query);
      if ($result == true) {
        $value = $result->fetch_assoc();
      }
    }
  }
}

  public function DeleteAccount($data)
  {
    $Username = mysqli_real_escape_string($this->db->link,$data['user']);
    $Email    = mysqli_real_escape_string($this->db->link,$data['email']);
    $query = "DELETE FROM users WHERE US_Email = '$Email' ";
    $result = $this->db->Delete($query);
  }

  public function AddSupervisor($data)
  {
    $Username = mysqli_real_escape_string($this->db->link,$data['user']);
    $Email    = mysqli_real_escape_string($this->db->link,$data['email']);
    $Password = mysqli_real_escape_string($this->db->link,$data['pass']);
      $query = "SELECT * FROM supervisor WHERE SU_Email = '$Email'AND SU_Password = '$Password'";
      $result = $this->db->Select($query);
      if ($result) {
        $msg = "<span class= 'error'>Email already Exist.</span>";
        return $msg;
      }else {
        $query ="INSERT INTO supervisor(SU_Username, SU_Email, SU_Password) VALUES ('$Username', '$Email', '$Password')";
        $row =$this->db->Insert($query);
        if ($row) {
          $msg = "<span class= 'Success'>Successfull..</span>";
          return $msg;
        }else {
          $msg ="<span class= 'error'>Something Went Wrong!</span>";
          return $ms;
        }
      }
    }

  public function DeleteSupervisor($data)
  {

    $Username = mysqli_real_escape_string($this->db->link,$data['user']);
    $Email    = mysqli_real_escape_string($this->db->link,$data['email']);
    $query = "DELETE FROM supervisor WHERE SU_Email = '$Email' ";
    $result = $this->db->Delete($query);
  }
}

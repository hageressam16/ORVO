<?php

include_once 'Library/Database.php';
include_once 'Person.php';

/**
 *
 */
class Account extends Person
{
  private  $db;

  function __construct()
  {
    $this->db = new Database();
  }

  public function SendComplaint($data)
  {
    $Title           = mysqli_real_escape_string($this->db->link,$data['Title']);
    $Discreption     = mysqli_real_escape_string($this->db->link,$data['Discreption']);
    $Date            = mysqli_real_escape_string($this->db->link,$data['Date']);
    $Email           = mysqli_real_escape_string($this->db->link,$data['Email']);

    if ($query = "SELECT * FROM users WHERE US_Email = '$Email' AND Us_Status = 1") {
      $result = $this->db->Select($query);
      if ($result == true) {
        $query ="INSERT INTO `report_complement` (`Co_Title`,`Co_Description`,`Co_Date`,`Email`) VALUES ('$Title ','$Discreption','$Date','$Email')";
        $row =$this->db->Insert($query);
    }else {
      $msg ="<span class= 'error'>Email not Found</span>";
      return $ms;
    }
  }
  }

  public function EditAccount($data)
  {
    $date                  = mysqli_real_escape_string($this->db->link,$data['date']);
    $Mobilenumber          = mysqli_real_escape_string($this->db->link,$data['number']);
    $liveding              = mysqli_real_escape_string($this->db->link,$data['Date']);
    $dateofjoind           = mysqli_real_escape_string($this->db->link,$data['joind']);

    $query ="INSERT INTO `AboutMe` (`BirthOfDate`,`Mobilenumber`,`Livedin`,'joined') VALUES ('$date ','$Mobilenumber','$liveding','$dateofjoind')";
    $row =$this->db->Insert($query);
  }
}

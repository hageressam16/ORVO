<?php

include_once 'Library/Database.php';
include_once 'Person.php';

/**
 *
 */
class Supervisor extends Person
{
  private  $db;

  function __construct()
  {
    $this->db = new Database();
  }

  public function sendWaring($data)
  {
   $emailaddress         = mysqli_real_escape_string($this->db->link,$data['email']);
   $Waringmessage        = mysqli_real_escape_string($this->db->link,$data['Waringmessage']);
   if ($query = "SELECT * FROM users WHERE US_Email = '$emailaddress' AND Us_Status = 1") {
     $result = $this->db->Select($query);
     if ($result == true) {
       $query ="INSERT INTO `warning` (`EMAIL`,`Waringmessage`) VALUES ('$emailaddress','$Waringmessage')";
       $row =$this->db->Insert($query);
   }else {
     $msg ="<span class= 'error'>Email not Found</span>";
     return $ms;
   }
 }
   }

  public function SendReport($data)
  {
    $ReportTitle          = mysqli_real_escape_string($this->db->link,$data['reporttitle']);
    $ReportDescription    = mysqli_real_escape_string($this->db->link,$data['reportdescription']);
    $ReportDate           = mysqli_real_escape_string($this->db->link,$data['reportdate']);
    $SupervisorID         = mysqli_real_escape_string($this->db->link,$data['supervisorid']);

    $query ="INSERT INTO `report` (`Re_Title`, `Re_Description`, `Re_date`, `SupervisorID`) VALUES ('$ReportTitle', '$ReportDescription', '$ReportDate', '$SupervisorID' )";
      $row =$this->db->Insert($query);
    }


  }

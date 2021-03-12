<?php
    Include_once 'Library/Database.php';
    Include_once 'Account.php';



  class Experience
  {
      private  $db;

    function __construct()
    {
      $this->db = new Database();
    }

    public function AddExperience($data)
    {
        $Organizationname = mysqli_real_escape_string($this->db->link,$data['organoizationname']);
        $Position = mysqli_real_escape_string($this->db->link,$data['position']);
        $City = mysqli_real_escape_string($this->db->link,$data['city']);
        $Description = mysqli_real_escape_string($this->db->link,$data['description']);
        $TimePeriod = mysqli_real_escape_string($this->db->link,$data['timeperiod']);

        $query = "INSERT INTO `experience` (`Organization name`, `Position`, `City`, `Description`, `Time Period`)
        VALUES ('$Organizationname', '$Position', '$City', '$Description', '$TimePeriod ')";
        $row =$this->db->Insert($query);

        header("Location: Profile.php");
      }

      public function DeleteExperience($data)
      {

      }
    }

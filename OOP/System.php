<?php

include_once 'Library/session.php';
include_once 'Library/Database.php';


class System
{
  private $SystemName;
  private $SystemTel;
  private $EmailContact;
  private  $db;

  function __construct()
  {
    $this->db = new Database();


  }

  public function Feedback($data)
  {
    $Name       = mysqli_real_escape_string($this->db->link,$data['name']);
    $Message    = mysqli_real_escape_string($this->db->link,$data['message']);
    $query ="INSERT INTO `system` (`SysName`,`SysMessage`) VALUES ('$Name','$Message')";
    $row =$this->db->Insert($query);
  }

}

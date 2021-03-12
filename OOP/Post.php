<?php

    include_once 'Library/Database.php';

 class Post
 {
   private $content;
   private $date;
   private $id;
   private  $db;



   function __construct($content,$date,$id)
   {
     $this->db = new Database();
     $this->content = content;
     $this->date = date;
     $this->id = id;
   }

   public function deletepost($id){
     $id=$_GET['id'];
     $query = "DELETE FROM  Post WHERE 	ID = '$id'";
     $result = $this->db->Delete($query);
     header('location:profile.php');

   }
 }

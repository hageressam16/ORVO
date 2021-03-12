<?php

    include_once 'Library/Database.php';
    include_once 'strategy.php';
    class postpublic implements strategy
    {

      public function mypost($content){
        if(isset($_POST['post'])){
          $content=$_POST['post_content'];
          $query ="INSERT INTO `Post`(`Description`) VALUES ('$content')";
          $row =$this->db->Insert($query);
          header('location:profile.php');
       }

   }
    }

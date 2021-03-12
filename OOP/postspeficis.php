<?php

class postspeficis implements strategy{

    public function mypost($content) {
      if(isset($_POST['post'])){
        $content=$_POST['post_content'];
        $query ="INSERT INTO `Post`(`Description`) VALUES ('$content')";
        $row =$this->db->Insert($query);
        header('location:profile.php');
     }

 }

    }

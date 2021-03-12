<?php
    error_reporting(0);
    session_start();
    $noNavbar = ''; 
    include 'Init.php';

?>

<div class="container-fluid">
 <div class="row">
   <div class="col-md-12">
     <div class="carousel slide" id="carousel-239594">
       <ol class="carousel-indicators">
         <li data-target="#carousel-239594" data-slide-to="0">
         </li>
         <li data-target="#carousel-239594" data-slide-to="1">
         </li>
         <li class="active" data-target="#carousel-239594" data-slide-to="2">
         </li>
       </ol>
       <div class="carousel-inner">
         <div class="item">
           <img alt="Carousel Bootstrap First" src="<?php echo  $Img; ?>hand.jpg">
           <div class="carousel-caption">
             <h4>
               The First Volunteering Website
             </h4>
             <p>
               When you like to have the opportunity like others to volunteer, learn and gain experience, then
                               Orvo is your best choice.
             </p>
           </div>
         </div>
         <div class="item">
           <img alt="Carousel Bootstrap Second" src="<?php echo  $Img; ?>person.jpg">
           <div class="carousel-caption">
             <h4>
               Organizations requires volunteers
             </h4>
             <p>
               When you launch an event and need volunteers or you have an non-profit organization and
                               need new members to volunteer, then Orvo is your best choice.
             </p>
           </div>
         </div>
         <div class="item active">
           <img alt="Carousel Bootstrap Third" src="<?php echo  $Img; ?>vo_or.jpg">
           <div class="carousel-caption">
             <h4>
               Join us as volunteer or as organizarion
             </h4>
             <p>
               We invite you to Sign Up and Enjoy the opportunities.
             </p>
           </div>
         </div>
       </div> <a class="left carousel-control" href="#carousel-239594" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-239594" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
     </div>
           <br>
           <br>
     <div class="row">
       <div class="col-md-12">
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
         <div class="jumbotron well">
           <h2>
             About Volunteering
           </h2>
           <p>
             Volunteering is generally considered an altruistic activity where an individual or group provides services for no financial gain "to benefit another person, group or organization".
           </p>
           <p>
             <a class="btn btn-primary btn-large" href="https://www.google.com.eg/url?sa=t&rct=j&q=&esrc=s&source=web&cd=13&cad=rja&uact=8&ved=0ahUKEwiF7fGBwMTXAhXEMhoKHaCqDWAQFgh8MAw&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FVolunteering&usg=AOvVaw1jGhCQaRIeWRBMXzIIzLhz">Learn more</a>
           </p>

         </div>
       </div>
       <div class="col-md-4">
         <div class="tabbable" id="tabs-735699">
           <ul class="nav nav-tabs">
             <li>
               <a href="#panel-645945" data-toggle="tab">Login</a>
             </li>
             <li class="active">
               <a href="#panel-700951" data-toggle="tab">Sign Up</a>
             </li>
           </ul>
           <div class="tab-content">
             <div class="tab-pane" id="panel-645945">
               <p>
                               <h3 class="text-center">
                                   LOGIN
                               </h3>
                              <form action="" method="POST" >
     <p>
       <label>Email:</label>
       <br><input type="email" id="user" name="user" class="form-control" placeholder="Email Address" autocomplete="off" required/>
     </p>
     <p>
       <label>password:</label>
       <br><input type="password" id="pass" name="pass" class="form-control" placeholder="Password" autocomplete="off" required/>
     </p>
                                  <div class="checkbox">

             <label>
               <input type="checkbox"> Save password?
             </label> <br>
                           <a href="forgetpassword.php">Forget Password</a>
           </div>
     <p>
       <input type="submit" id="btn" name="Login" class="btn btn-success" value="Login">
     </p>
   </form>

               </p>
             </div>
             <div class="tab-pane active" id="panel-700951">
               <p>
                 <h3 class="text-center">
           Sign Up
         </h3>
         <form method="post" action="">


   <div class="input-group">
     <label>Username</label>
     <input type="text" name="username" placeholder="Username" class="form-control" size="50" autocomplete="off" required/>
   </div>
   <div class="input-group">
     <label>Email</label>
     <input type="email" name="email" placeholder="Your Email" class="form-control" size="60" autocomplete="off" required/>
   </div>
   <div class="input-group">
     <label>Password</label>
     <input type="password" name="password_1" placeholder="Password" class="form-control" size="50" autocomplete="off" required/>
   </div>
   <div class="input-group">
     <label>Confirm password</label>
     <input type="password" name="password_2" placeholder="Confirm Password" class="form-control" size="50" autocomplete="off" required/>
   </div>
   <br>
   <div class="input-group">
     <button type="submit" class="btn btn-success" name="reg_user">Register</button>
   </div>
   <p>
     <br>Already a member? <a href="index.php">&nbsp;&nbsp;Sign in</a>
   </p>
         </form>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="jumbotron well">
           <h2>
             Types of Volunteering
           </h2>
           <p>
             -Short-Term Volunteer<br>-Long-Term Volunteer<br>-Conservation/Environmental Volunteer<br>-Recruitment/Placement<br><br><br>Which type you are?
           </p>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-4">
         <div class="thumbnail">
           <img alt="About Us" src="<?php echo  $Img; ?>about%20us.jpg">
           <div class="caption">
             <h3>
               About Us
             </h3>
             <p>
               Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
             </p>
             <p>
               <a class="btn btn-primary" href="#">Contact Us</a>
             </p>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="thumbnail">
           <img alt="Bootstrap Thumbnail Second" src="<?php echo  $Img; ?>Follow.jpg">
           <div class="caption">
             <h3 >
               Follow us
             </h3>
             <p><br><br>
               <a class="btn" href="http://www.facebook.com"><img src="<?php echo  $Img; ?>facebook.png" height="50px" width="50px"></a><a class="btn" href="http://www.instgram.com"><img src="<?php echo  $Img; ?>instagram.png" height="50px" width="50px"></a> <a class="btn" href="http://www.youtube.com"><img src="<?php echo  $Img; ?>Youtube.png" height="50px" width="50px"></a>
             </p>
           </div>
         </div>
       </div>
       <div class="col-md-4">
         <div class="thumbnail">
           <img alt="Bootstrap Thumbnail Third" src="<?php echo  $Img; ?>star.jpg">
           <div class="caption">
             <h3>
               Top Volunteers/Orgnaizations rate
             </h3>
             <p>
               #Huda Almowafy<br>#Hager Essam<br>#Bassel
             </p>
             <p>
                               <a class="btn btn-primary" href="#">Refresh</a>
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>

<?php  include $Temp. 'footer.php'; ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title> SavvasL Web Biography Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

 
<body>
 <div class="container">
  <div class="top-bar" > 
    <div class="fixed-width" >
      <div id= "logo">
 <img width="50" height="50" src="https://savvaslazourasart.com/wp-content/uploads/2023/03/logo_2.jpg" class="attachment-full size-full wp-image-103" alt="">
      </div>
     <div id= "sing-in">
     <img src="https://static.vecteezy.com/system/resources/previews/021/919/677/non_2x/login-icon-in-trendy-flat-style-isolated-on-white-background-approach-symbol-for-your-web-site-design-logo-app-ui-illustration-eps10-flat-style-for-graphic-design-vector.jpg" style=" height: 20px; width: 20px;" >
           Sign In
      </div>
      <ul>
        <li>News</li>
        <li>Shop</li>
        <li>More</li>
      </ul>
      <div id="search-box">
        <input type="text" placeholder ="Search"/>
      </div>  
    </div>  <!--fixed-width--> 
  </div> <!--top bar-->
  <div class="news-bar" >
    <div class="fixed-width">
      <p> SIGN UP (register.php)</p>
    </div>
  </div> <!--news bar-->
  <div class="category-bar" > 
   <div class="fixed-width">
      <ul>
        <li><a id="PORTFOLIO"href="./index_Portfolio.html" target="_blank">PORTFOLIO</a></li>
        <li><a id="VIDEO"href="./index_Video.html" target="_blank">VIDEO</a></li>
        <li><a id="BIOGRAPHY"href="./index_Biography.html" target="_blank">BIOGRAPHY</a></li>
        <li><a id="CONTACT"href="./index_Contact.html" target="_blank">CONTACT</a></li>
     </ul>
    </div>
  </div> <!--category bar-->
  
  <div class="content" > 
    <div class="fixed-width">
      <br>
      <br>
      <br>
      <br>
      <br>
     <h1> THIS IS SAVVAS LAZOURAS REGISTER  PAGE (register.html)</h1>



    </div>
       <div class= "container">
         <div class="box form-box">
           
           <?php

              include ("C:/xampp/htdocs/Savvas_Log_In_Page/Register_ALL_STORED_HERE/Config/config.php");
                if (isset($_POST['submit'])){
                  $username = $_POST['username'];
                  $email = $_POST['email'];
                  $age = $_POST['age'];
                  $password = $_POST['password'];



$verify_query = mysqli_query($con, "SELECT Email FROM Users WHERE Email = '$email'");

if (mysqli_num_rows($verify_query) != 0) {
    echo "<div class='message'>
            <p>This email is used, Try another one Please! </p>
          </div> <br>";
    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back!</button>";
} else { 
    mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES ('$username','$email','$age','$password')") or die("Error occurred");

    echo "<div class='message'>
            <p>Registration successful! </p>
          </div> <br>";
    echo "<a href='index.php'><button class='btn'>Login Now</button>";
}

}         else{

            ?>
           
           
           
           <header> Sign Up </header>
           <form action="" method="post">
             
             <div class="field input">
               <label for="username">Username</label>
               <input type="text" name="username" id="username" autocomplete ="off" required>
             </div>
             
             <div class="field input">
               <label for="email">Email</label>
               <input type="text" name="email" id="email" autocomplete ="off" required>
             </div>
             
                          <div class="field input">
               <label for="age">Age</label>
               <input type="number" name="age" id="age" autocomplete ="off" required>
             </div>
             
             <div class="field input">
               <label for="password">Password</label>
               <input type="password" name="password" id="password" autocomplete ="off" required>
             </div>
             <div class="field">
               <input type="submit" class="btn" name="submit" value="Sign Up" required>
             </div>
             <div class="links">
               Allready a member? <a href="index.php">Sign In</a>
             </div>
           </form>
         </div>
         <?php } ?>
      </div>
    
    
  </div> <!--contentr bar-->

</div>  <!--container-->
  

    
  </div> <!--contentr bar-->

</div>  <!--container-->
  

  
</body>
</html>
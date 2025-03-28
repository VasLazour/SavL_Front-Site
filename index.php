<!DOCTYPE html>

<html lang="en">

<head>
  <title> SavvasL Web Biography Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

 
<body>
 <?php
  session_start();
?>




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
      <p>LOG-IN (index.php)</p>
    </div>
  </div> <!--news bar-->
  <div class="category-bar" > 
   <div class="fixed-width">
      <ul>
        <li><a id="PORTFOLIO"href="https://vaslazour.github.io/SavL_Front-Site/index_Portfolio.html" target="_blank">PORTFOLIO</a></li>
        <li><a id="VIDEO"href="https://vaslazour.github.io/SavL_Front-Site/index_Video.html" target="_blank">VIDEO</a></li>
        <li><a id="BIOGRAPHY"href="https://vaslazour.github.io/SavL_Front-Site/index_Biography.html" target="_blank">BIOGRAPHY</a></li>
        <li><a id="CONTACT"href="https://vaslazour.github.io/SavL_Front-Site/index_Contact.html" target="_blank">CONTACT</a></li>
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
     <h1> THIS IS SAVVAS LAZOURAS LOG IN  PAGE (index.php)</h1>



    </div>
       <div class= "container">
         <div class="box form-box">
 <?php
  include("Config/config.php");
  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
      $_SESSION['valid'] = $row['Email'];
      $_SESSION['username'] = $row['Username'];
      $_SESSION['age'] = $row['Age'];
      $_SESSION['id'] = $row['Id'];
    } else {
      echo "<div class='message'>
        <p>Wrong Username or Password</p>
      </div> <br>";
      echo "<a href='index.php'><button class='btn'>Go Back!</button></a>";
    }

    if (isset($_SESSION['valid'])) {
      header("Location: home.php");
      exit(); // Add exit after header redirect to prevent further execution
    }
  } else {  // This else corresponds to the form section
?>

  <header> Log In </header>
  <form action="" method="post">
    <div class="field input">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" required>
    </div>
    <div class="field input">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
    </div>
    <div class="field">
      <input type="submit" class="btn" name="submit" value="Login">
    </div>
    <div class="links">
      Don't have an account? <a href="Register.php">Sign Up Now</a>
    </div>
  </form>
         </div>
         <?php } ?>
      </div>
    
    
  </div> <!--contentr bar-->

</div>  <!--container-->
  

  
</body>
</html>
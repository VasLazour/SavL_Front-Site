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
      <p> HOME (home.php)</p>
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
     <h1> THIS IS SAVVAS LAZOURAS HOME-LOG-IN  PAGE (home.php)</h1>


<?php
  session_start();

  include("Config/config.php");
  if(!isset($_SESSION['valid'])){
    header("Location: index.php");
}
?>
    </div>
       <div class= "nav">
         <div class="logo">
           <p><a href="home.php"> Logo </a></p>
         </div>
             
             <div class="right-links">
               
                <?php
 
                  $id = $_SESSION['id'];
                  $query = mysqli_query ($con, "SELECT * FROM users WHERE id=$id");

                  While ($result = mysqli_fetch_assoc($query)){
                      $res_Uname = $result['Username'];
                      $res_Email = $result['Email'];
                      $res_Age = $result['Age'];
                      $res_id = $result['Id'];
                      }

                  echo "<a href='edit.php?id=$res_id'>Change Profile</a>";

                ?>
               
               <a href="Config/LogOut.php"> <button class="btn">Log Out</button> </a>
             </div>
         </div>
    
        <main>
          <div class="main-box top">
            <div class="top">
              <div class="box">
                <p>Hello <b> <?php echo $res_Uname ?></b>, Wellcome</p>
              </div>
              <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b></p>
              </div>
            </div>
            <div class="bottom">
              <div class="box">
                <p>And you are <b><?php echo $res_Age ?></b> years old</p>
              </div>
            </div>
          </div>
        </main>
             
             </div>
           </form>
         </div>
      </div>
    
    
  </div> <!--contentr bar-->

</div>  <!--container-->
  

        
      </body>
</html>
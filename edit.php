<!DOCTYPE html>

<html lang="en">

<head>
  <title> SavvasL Web Biography Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

  <<body>
<?php
  session_start();

  include("Config/config.php");
  if(!isset($_SESSION['valid'])){
    header("Location: index.php");
}
?>


<div class= "nav">
         <div class="logo">
           <p><a href="home.php"> Logo </a></p>
         </div>
  
             <div class="right-links">
               
              <a href="#">Change Profile</a>
               <a href="logout.php"> <button class="btn">Log Out</button> </a>
             </div>
         </div>
<div class= "container">
         <div class="box form-box">
           
           <?php
              if(isset($_POST['submit'])){
                  $Username = $_POST['username'];
                  $Email = $_POST['email'];
                  $age = $_POST['age'];
                  
                  $id = $_SESSION['id'];

                  $edit_query = mysqli_query($con, "UPDATE users SET Username ='$Username', Email ='$Email', Age='$age' WHERE id=$id") or die("Error Occurred");
                if($edit_query){
                        echo "<div class='message'>
                        <p>Profile is Updated! </p>
                      </div> <br>";
                    echo "<a href='home.php'><button class='btn'>Go Home</button></a>";
                              }
              }else{
                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT * FROM users WHERE Id=$id");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                                                            }
                    

            ?>
           
           <header> Change Profile</header>
           <form action="" method="post">
             
             <div class="field input">
               <label for="username">Username</label>
               <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>" autocomplete ="off" required>
             </div>
             
             <div class="field input">
               <label for="email">Email</label>
               <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete ="off" required>
             </div>
             
                          <div class="field input">
               <label for="age">Age</label>
               <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>"autocomplete ="off" required>
             </div>
             
             <div class="field">
               <input type="submit" class="btn" name="submit" value="Update" required>
             </div>
           </form>
         </div>
            <?php } ?>
      </div>
    
    
  </div> <!--contentr bar-->

</div>  <!--container-->
  
    

</div>  <!--container-->
  
    
        
      </body>
</html>
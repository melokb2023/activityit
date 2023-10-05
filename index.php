<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }
   
 if(isset($_POST["register"]))  
 {
     $username = $_POST["username"];
     $sql_u = "SELECT * FROM users WHERE username= '$username' "; 
     $res_u = mysqli_query($connect, $sql_u) or die(mysqli_error($connect));

      if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }
      else if(strlen($_POST["password"]) < 8){
          echo '<script>alert("Please enter a password with a minimum of 8 characters")</script>';  
      }
      else if(mysqli_num_rows($res_u) > 0){
          echo '<script>alert("Username already exists")</script>';  
      }
      else  
      {  
           $firstname = mysqli_real_escape_string($connect, $_POST["firstname"]);
           $lastname = mysqli_real_escape_string($connect, $_POST["lastname"]);   
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = password_hash($password, PASSWORD_DEFAULT);
           $completename = $firstname."\n".$lastname;
           $query = "INSERT INTO users(completename,username, password) VALUES('$completename','$username', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $query = "SELECT * FROM users WHERE username = '$username'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION["username"] = $username;  
                          header("location:entry.php");  
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>    
      <head>  
           <title>Webslesson Tutorial | PHP Login Registration Script by using password_hash() method</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
         
      </head>  
      <body>  
        <link rel="stylesheet" href="index.css">
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center" style = "font-family:Verdana">SIMPLE FORM OF LOGIN</h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Please Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Please Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter First Name</label>  
                     <input type="text" name="firstname" class="form-control" />
                     <label>Enter Last Name</label>  
                     <input type="text" name="lastname" class="form-control" />    
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php?action=login">Login</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>
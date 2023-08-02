<?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password,'lab manual');
   
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   if (isset($_POST['submit'])){
     $username = mysqli_real_escape_string($conn, $_POST['uid']);
     $password = mysqli_real_escape_string($conn, $_POST['pwd']);
     $_SESSION['uid'] = $username;
     $sql = "SELECT password FROM users where uname = '$username'";
     $result = mysqli_query($conn, $sql);
   
     if (mysqli_num_rows($result) > 0) {
       // output data of each row
       while($row = mysqli_fetch_assoc($result)) {
         if ($password == $row["password"]){
             echo " sign in successful";
             $_SESSION["loggedin"] = true;
             $_SESSION["id"] = $id;
             $_SESSION["username"] = $username;  
             header("location: adminnnfinal.php");
         }
         else {
             echo '<script>alert("incorrect username or password")</script>';
         }
       }
     } 
     else {
       echo '<script>alert("incorrect username or password")</script>';
     }
     
     if (!(mysqli_query($conn, $sql))){
       echo "Error: ".mysqli_error($conn);
   }
   }
   ?>
<html>
   <head>
      <style>
         a {
         text-decoration: none;
         }
         label {
         font-family: "Raleway", sans-serif;
         font-size: 11pt;
         }
         #card {
         background-color:  #8dc6ff;
         border-radius: 8px;
         box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
         height: 410px;
         margin: 6rem auto 8.1rem auto;
         width: 329px;
         }
         #card-content {
         padding: 12px 44px;
         }
         #card-title {
         font-family: "Raleway Thin", sans-serif;
         letter-spacing: 4px;
         padding-bottom: 23px;
         padding-top: 13px;
         text-align: center;
         }
         #signup {
         color: #2dbd6e;
         font-family: "Raleway", sans-serif;
         font-size: 10pt;
         margin-top: 16px;
         text-align: center;
         }
         #submit-btn {
         background-color: #24527a;
         border: none;
         border-radius: 21px;
         box-shadow: 0px 1px 8px #005689;
         cursor: pointer;
         color: white;
         font-family: "Raleway SemiBold", sans-serif;
         height: 42.3px;
         margin: 0 auto;
         margin-top: 50px;
         transition: 0.25s;
         width: 153px;
         }
         #submit-btn:hover {
         box-shadow: 0px 1px 18px #005689;
         }
         .form {
         align-items: left;
         display: flex;
         flex-direction: column;
         }
         .form-border {
         background: #005689;
         height: 1px;
         width: 100%;
         }
         .form-content {
         background: #fbfbfb;
         border: none;
         outline: none;
         padding-top: 14px;
         }
         .underline-title {
         background: #005689;
         height: 2px;
         margin: -1.1rem auto 0 auto;
         width: 89px;
         }
      </style>
   </head>
   <body style="background-color: white;">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <div id="card">
         <div id="card-content">
            <div id="card-title">
               <h2>ADMIN LOGIN</h2>
               <div class="underline-title"></div>
            </div>
            <form method="post" class="form">
               <label for="user-email" style="padding-top:13px">
               &nbsp;Name:
               </label>
               <input id="user-email" class="form-content" type="text" name="uid" autocomplete="on" required />
               <div class="form-border"></div>
               <label for="user-password" style="padding-top:22px">&nbsp;Password
               </label>
               <input id="user-password" class="form-content" type="password" name="pwd" required />
               <div class="form-border"></div>
               <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
            </form>
         </div>
      </div>
   </body>
</html>

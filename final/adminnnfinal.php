<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: signin.php");
  exit;
}
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'lab manual');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])){
  if ($_POST['submit'] == 'Update') {
    // Update record
    $subcode = mysqli_real_escape_string($conn, $_POST['sid']);
    $course = mysqli_real_escape_string($conn, $_POST['ctype']);
    $link = mysqli_real_escape_string($conn, $_POST['lm']);
    $sql = "UPDATE `lab manuals` SET `link`='$link' WHERE `subcode`='$subcode' AND `course` = '$course'; ";
    $result = mysqli_query($conn, $sql);
  } else if($_POST['submit'] == 'Insert') {
    // Insert record
    $subcode = mysqli_real_escape_string($conn, $_POST['sid']);
    $course = mysqli_real_escape_string($conn, $_POST['ctype']);
    $coursename = mysqli_real_escape_string($conn, $_POST['cn']);
    $sem = mysqli_real_escape_string($conn, $_POST['sm']);
    $link = mysqli_real_escape_string($conn, $_POST['lm']);
    $sql = "INSERT INTO `lab manuals`(`semester`, `subcode`, `subject`, `link`, `course`) VALUES ('$sem','$subcode','$coursename','$link','$course');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      
    }else
    {
     
    }
  } else if($_POST['submit'] == 'Delete') {     // Delete record
    $subcode = mysqli_real_escape_string($conn, $_POST['sid']);
    $course = mysqli_real_escape_string($conn, $_POST['ctype']);
    $sql = "DELETE FROM `lab manuals` WHERE `subcode` = '$subcode' AND `course` = '$course';";
    $result = mysqli_query($conn, $sql);
    if ($result) {    
    }else
    {
    }
  }
}
?>
<html>
  <head>
  <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class="body1">
    <nav class="navbar" >
        <div class="navbar-left">
          <img  src="logo1.png" alt="Logo">
        </div>
        <div class="navbar-left">
          <p style="font-size:2vw;font-family: Raleway,sans-serif;color: rgb(255, 255, 255);"> Department of Information Technology,  <br> Anna University, MIT Campus</p>
          
          
        </div>
        <div class="navbutton">
          <div class="btn-group dropdown">
            <span class="glyphicon glyphicon-menu-hamburger" data-toggle="dropdown" style="color:white;font-size: 4vh; cursor: pointer;" ></span>
            
            <!-- Add dropdown menu with menu items -->
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="homepage.php">Home</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="logout.php" >Sign Out</a></li>
            </ul>
          </div>
        </div>
      </div>
        </div>
       
    </nav>
<br><br><br>
    <center><font style="color: black;font-family: Georgia, 'Times New Roman', Times, serif;font-size: 2vw;"><b> Lab Materials Modifications</b></font></center><br><br>   
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#insert">
  INSERT
</button></center><br>
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
  UPDATE
</button></center><br>
<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete">
  DELETE
</button></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Modal -->
<div class="modal fade" id="insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b><h3 class="modal-title" id="exampleModalLongTitle"><b>LAB MANUAL DETAILS</b></h3></b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        

      </div>
      <form  method="POST">
        
     <fieldset>
     <div class="modal-body">
    <label for="userid">Enter Subject code</label><br>
    <input type="text"  id="sid" name="sid"  required><br><br>
    <label for="co">Select course name</label><br>
    <select id="ctype" name="ctype" style="width:500px;">
            <option value="">Select</option>
			<option value="ugaids">ugaids</option>
			<option value="ugit">ugit</option>
			<option value="pgit">pgit</option>
      <option value="pgit_syllabus">pgit_syllabus</option>
      <option value="ugit_syllabus">ugit_syllabus</option>
      <option value="ugaids_syllabus">ugaids_syllabus</option>
		  </select><br><br>
    <label for="cname">Enter Course name</label><br>
    <input type="text"  id="cn" name="cn"  required><br><br>
    <label for="sem">Enter semester</label><br>
    <input type="number"  id="sm" name="sm"  required><br><br>
    <label for="lmlink">Enter lab manual link</label><br>
    <input type="text"  id="lm" name="lm"  required><br><br>
</div>
</fieldset>
<div class="modal-footer">
<input type="submit" class='btn btn-primary' value="Insert" name="submit">
</div>
</form>
    </div>
  </div>
</div>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><b>LAB MANUAL DETAILS</b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST">
        
<fieldset>
<div class="modal-body">
    <label for="userid">Enter Subject code</label><br>
    <input type="text"  id="sid" name="sid"  required><br><br>
    <label for="co">Select course name</label><br>
    <select id="ctype" name="ctype" style="width:500px;">
            <option value="">Select</option>
			<option value="ugaids">ugaids</option>
			<option value="ugit">ugit</option>
			<option value="pgit">pgit</option>
      <option value="pgit_syllabus">pgit_syllabus</option>
      <option value="ugit_syllabus">ugit_syllabus</option>
      <option value="ugaids_syllabus">ugaids_syllabus</option>
		  </select><br><br>
    <label for="lmlink">Enter lab manual link</label><br>
    <input type="text"  id="lm" name="lm"  required><br><br>
</div>    
</fieldset>
<div class="modal-footer">
<input type="submit" class='btn btn-primary' value="Update" name="submit">
</div>
</form>
    </div>
  </div>
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><b>LAB MANUAL DETAILS</b></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  method="POST">
        
<fieldset>
<div class="modal-body">
    <label for="userid">Enter Subject code</label><br>
    <input type="text"  id="sid" name="sid"  required><br><br>
    <label for="co">Select course name</label><br>
    <select id="ctype" name="ctype" style="width:500px;">
            <option value="">Select</option>
			<option value="ugaids">ugaids</option>
			<option value="ugit">ugit</option>
			<option value="pgit">pgit</option>
      <option value="pgit_syllabus">pgit_syllabus</option>
      <option value="ugit_syllabus">ugit_syllabus</option>
      <option value="ugaids_syllabus">ugaids_syllabus</option>
		  </select><br><br>
</div>
</fieldset>
<div class="modal-footer">
<input type="submit" class='btn btn-primary' value="Delete" name="submit">
</div>
</form>
    </div>
  </div>
</div>

  </body>
</html>
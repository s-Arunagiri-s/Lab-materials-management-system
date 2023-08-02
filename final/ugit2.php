<?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, 'lab manual');
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   ?>
<html>
   <head>
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                  <li><a href="signin.php">Admin</a></li>
               </ul>
            </div>
         </div>
         </div>
         </div>  
      </nav>
      <style>
         input[type="button"] {
         width:240px;
         height:20px;
         display:block;
         font-family:Arial, "Helvetica", sans-serif;
         font-size:11px;
         font-weight:bold;
         color:#fff;
         text-decoration:none;
         text-transform:uppercase;
         text-align:center;
         text-shadow:1px 1px 0px #3783a6;
         margin: 8px 0 0 8px;
         position:relative;
         cursor:pointer;
         border: none;
         background-color: #3783a6;
         background-image: linear-gradient(top,#3783a6,#3111);
         border-top-left-radius: 5px;
         border-top-right-radius: 5px;
         border-bottom-right-radius: 5px;
         border-bottom-left-radius:5px;
         box-shadow: inset 0px 1px 0px #3783a6, 0px 5px 0px 0px#3783a6, 0px 10px 5px #999;
         }
      </style>
      <script>
         function get_lm()
         {
           var ctype=document.getElementById('ctype').value;
           //alert(ctype);
           if(ctype.trim()==''){
         	 alert('Please Select Type');
         	 return false;
           }
         
           if(ctype=='L'){
         	  var semester=document.getElementById('semester_l').value;
         	  if(semester.trim()=='')
         	  {
         		alert('Please Select Semester...');
         		return false;
         	  }
               else if(semester.trim()=='1')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='1' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               }   
               else if(semester.trim()=='2')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='2' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='3')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='3' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='4')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='4' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='5')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='5' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='7')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='7' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='6')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='6' AND course='ugit' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
           
             ?>"+
      
       '</table>';
          }          
      }else if(ctype=='M'){  
       var semester=document.getElementById('semester_m').value;
        if(semester.trim()=='')
        {
        alert('Please Select Semester...');
        return false;
        } 
        else if(semester.trim()=='1')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='1' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               }   
               else if(semester.trim()=='2')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='2' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='3')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='3' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='4')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='4' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='5')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='5' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='7')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='7' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
             ?>"+
           
            '</table>';
               } 
               else if(semester.trim()=='6')
               {
         
              document.getElementById('demo').innerHTML='<table class="table table-dark">'+
                   '<tr>'+
             '<th><h3> S.no </h3></th>'+
             '<th><h3> Subject code</h3></th>'+
             '<th><h3>      Subject    </h3></th>'+
             '<th><h3> Download</h3></th>'+
             '</tr>'+
             "<?php
            $sql = "SELECT subcode, subject, link FROM `lab manuals` WHERE semester='6' AND course='ugit_syllabus' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
             // output data of each row
             $n = 0;
             while($row = $result->fetch_assoc()) {
             $n+=1;   
             echo "<tr><td><b>".$n."</b></td>"."<td><b>". $row["subcode"]."</b></td> "."<td><b> ". $row["subject"]."</b></td> "."<td><b><a href=".$row["link"]." > Download </a></b></td></tr>";
             }
             } else {
                echo "0 results";
             }
           
             ?>"+
      
       '</table>';
          } 
      }
         }
         function ctype(){
         	var ctype=document.getElementById('ctype').value;
         	//alert(ctype);
         	if(ctype=='L'){
         		document.getElementById('semester_l_tr').style.display = '';
         		document.getElementById('semester_m_tr').style.display = 'none';
         	}else if(ctype=='M'){
         		document.getElementById('semester_l_tr').style.display = 'none';
         		document.getElementById('semester_m_tr').style.display = '';
         	}
         }
      </script>
      <center><font style="color: black;font-family: Georgia, 'Times New Roman', Times, serif;font-size: 2vw;"><b>B.Tech Lab Materials</b></font></center>
      <br><br>
      <table class="table table-dark" id="customers1" width="100%">
         <tbody>
            <tr>
               <td bgcolor="#191970"><font style="color:white;font-family: Georgia, 'Times New Roman', Times, serif;">Select Type</font></td>
               <td>
                  <select id="ctype" name="ctype" onchange="ctype();" style="width:500px;">
                     <option value="">Select</option>
                     <option value="L">Lab Manual</option>
                     <option value="M">Syllabus</option>
                  </select>
               </td>
            </tr>
            <tr style="display:none;" id="semester_l_tr">
               <td bgcolor="#191970"><font style="color:white;font-family: Georgia, 'Times New Roman', Times, serif;">Select Semester</font></td>
               <td>
                  <select id="semester_l" name="semester_l" style="width:500px;">
                     <option value="">Select Semester</option>
                     <option value="1">Semester 1</option>
                     <option value="2">Semester 2</option>
                     <option value="3">Semester 3</option>
                     <option value="4">Semester 4</option>
                     <option value="5">Semester 5</option>
                     <option value="6">Semester 6</option>
                     <option value="7">Semester 7</option>
                     <!--<option value="11">Year 1</option>-->
                  </select>
               </td>
            </tr>
            <tr style="display:none;" id="semester_m_tr">
               <td bgcolor="#191970"><font style="color:white;font-family: Georgia, 'Times New Roman', Times, serif;"> Select Semester</font></td>
               <td>
                  <select id="semester_m" name="semester_m" style="width:500px;">
                     <option value="">Select Semester</option>
                     <option value="1">Semester 1</option>
                     <option value="2">Semester 2</option>
                     <option value="3">Semester 3</option>
                     <option value="4">Semester 4</option>
                     <option value="5">Semester 5</option>
                     <option value="6">Semester 6</option>
                     <option value="7">Semester 7</option>
                  </select>
               </td>
            </tr>
            <br>
            <tr>
               <td colspan="2">
                  <center><input type="button" value="Get Lab Materials" onclick="get_lm();"></center>
               </td>
            </tr>
         </tbody>
      </table>
      <br>
      <div id="demo"></div>
   </body>
</html>

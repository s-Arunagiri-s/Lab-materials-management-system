<html>
   <head>
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <li><a href="signin.php">Admin</a></li>
               </ul>
            </div>
         </div>
         </div>
         </div>
      </nav>
      <br>
      <div class="container">
         <div class="row">
            <div class="col-6">
               <div class="slider">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <img src="logo5.jpg" alt="img1" style="width:100%; height: 100%;">
                        </div>
                        <div class="item">
                           <img src="logo6.jpg" alt="img2" style="width:100%; height: 100%;">
                        </div>
                        <div class="item">
                           <img src="logo7.jpg" alt="img3" style="width:100%; height: 100%;">
                        </div>
                        <div class="item">
                           <img src="logo8.jpeg" alt="img4" style="width:100%; height: 100%;">
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="right carousel-control" href="#myCarousel" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-6">
               <div class="text-center">
                  <!--
                     <div class="neons col-12">
                         <h1><em>Innovation distinguishes between a leader and a follower.<br> - Steve Jobs</em></h1>
                         
                         
                      </div>
                      -->
                  <h2 style="font-family: Raleway,sans-serif;">From Classroom to Real World: Unleashing the Potential of Practical Learning</h2>
               </div>
            </div>
         </div>
      </div>
      <div class="containers">
         <div class="box">
            <p style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">
               <br>
               <br>
               The curriculum will enable students with conceptual knowledge and technical skills to forge ahead in the field of IT, while inculcating moral and ethical values to achieve excellence, by providing a vibrant academic and research environment in collaboration with industry.
            </p>
            <br><br>
            <button class="btn1" onclick="window.location.href = 'ugit2.php';"><b>U.G IT</b></button><br>
         </div>
         <div class="box">
            <p style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">
               <br>
               <br>
               The curriculum will enable students to utilize their proficiencies in the fundamental knowledge of basic sciences, mathematics, Artificial Intelligence, data science , analytics and statistics to build systems that require management and analysis of large volumes of data
            </p>
            <br><br>
            <button class="btn1" onclick="window.location.href = 'ugaids2.php';"><b>U.G AI & DS</b></button>  <br>
         </div>
         <div class="box">
            <p style="color: white;font-family: Georgia, 'Times New Roman', Times, serif;">
               <br>
               <br>The curriculum will enable students to excel professionally by adapting to the dynamic needs of the industry, academia and research in the field of Information Technology and contribute to the elevation of information technology by means of research and lifelong learning.
            </p>
            <br><br>
            <button class="btn1" onclick="window.location.href = 'pgit.php';"><b>M.Tech IT</b></button>  <br>  
         </div>
      </div>
   </body>
</html>

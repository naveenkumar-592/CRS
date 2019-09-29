<?php

session_start();

require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     
    <style>

      .container1 {
        position: relative;
        width: 100%;
        margin-top: 0;
      }

      .container1 img {
        width: 100%;
        height: auto;
      }

      .container1 .btn1 {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        background-color: #7ec0ca;
        color: black;
        font-size: 24px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
      }

    </style>
	<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (width: 100%) {
  .text {font-size: 11px}
}
</style>

  </head>

  <body>

  <font face="calibri">

  <section>
  <div class="container">
  <div class="row">
  <header>
    <nav class="navbar navbar-default" style="margin-bottom: 0; height: 80px; background-color: white; border-color: transparent;">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" style="font-size: 24px; color: #053a5a; line-height: 42px;" href="index.php">Way To Life</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">     
          <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['id_user']) && empty($_SESSION['companyLogged'])) {
            ?>
            <li style="padding-right: 25px;"><a href="user/dashboard.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Dashboard</a></li>
			<li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Jobs</a></li>
			<li style="padding-right: 25px;"><a href="search1.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Internships</a></li>
			<li style="padding-right: 25px;"><a href="online-quiz-system-master/sampleuserlogin.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Sample tests</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Logout</a></li>
            <?php 
            } else if(isset($_SESSION['id_user']) && isset($_SESSION['companyLogged'])){
            ?>
            <li style="padding-right: 25px;"><a href="company/dashboard.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Dashboard</a></li>
            <li style="padding-right: 25px;"><a href="logout.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Logout</a></li>
            <?php } else { 
            ?>
            <li style="padding-right: 25px;"><a href="search.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Jobs</a></li>
			<li style="padding-right: 25px;"><a href="search1.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Search for Internships</a></li>
            <li style="padding-right: 25px;"><a href="mainregister.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Register</a></li>
            <li style="padding-right: -25px;"><a href="mainlogin.php" style="font-size: 24px; color: #053a5a; line-height: 42px;">Login</a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  </div>
  </div>
  </section>

  <!--<section>
    <div class="container1">
      <img src="img/bgjob.png" alt="Snow">
      <a href="search.php"><button class="btn1">Search for Jobs</button></a>
    </div>
  </section>-->
  <div class="container1">
  <div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="img/bgjob.png" style="width:100%">
  <a href="search.php"><button class="btn1">Search for Jobs</button></a>
</div>

<div class="mySlides fade">
  
  <img src="img/bgjob.png" style="width:100%">
  <a href="search1.php"><button class="btn1">Search for Internships</button></a>
</div>

</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
   
</div>

  <br>

  <div align="center">

    <form action ="" method = "post">

      <input style="font-size: 18px; color: black; padding: 7px; border: 1px solid black; border-radius: 5px;" name="search" type="text" size="30" placeholder="Search By Job Title E.g Accounting"/>

      <input type="submit" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 150px; height: 45px;" value="Search" />

    </form>
	

    <br>

    <?php 

    $output = '';

    if(isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = mysqli_query($conn,"SELECT * FROM job_post WHERE jobtitle LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);

    if($count == 0){
    ?>
    <p style="font-size: 22px; color: #053a5a;">No Results Found!</p> 
    <?php
    }else{

    ?>

    <div class="container">
      <div class="row">
        <table style="width: 100%;">
          <tr>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Title</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Job Description</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Minimum Salary</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Maximum Salary</td>
          </tr>
        </table>
      </div>
    </div>

  </div>

  <?php

  while ($row = mysqli_fetch_array($query)) {
  ?>

  <div class="container">
    <div class="row">
      <table style="width: 100%;" border="1" class="table-striped">

        <tr>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['description']; ?></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['minimumsalary']; ?> per Month</td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['maximumsalary']; ?> per Month</td>
        </tr>

      </table>
    </div>
  </div>

        <?php 
      }
    }
  }
  ?>

  <br>
  </div>
  </div>
<div align="center">

    <form action ="" method = "post">

      <input style="font-size: 18px; color: black; padding: 7px; border: 1px solid black; border-radius: 5px;" name="search1" type="text" size="30" placeholder="Search By Internship Title E.g Accounting"/>

      <input type="submit" style="font-size: 18px; color: white; background-color: #053a5a; border-color: transparent; border-radius: 5px; width: 150px; height: 45px;" value="Search" />

    </form>
	

    <br>

    <?php 

    $output = '';

    if(isset($_POST['search1'])) {
    $search = $_POST['search1'];

    $query = mysqli_query($conn,"SELECT * FROM intern_post WHERE interntitle LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);

    if($count == 0){
    ?>
    <p style="font-size: 22px; color: #053a5a;">No Results Found!</p> 
    <?php
    }else{

    ?>

    <div class="container">
      <div class="row">
        <table style="width: 100%;">
          <tr>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Internship Title</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Internship Description</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Minimum Salary</td>
            <td style="width: 25%; color: #053a5a; text-align: center; padding-top: 10px; padding-bottom: 10px; font-size: 24px;">Maximum Salary</td>
          </tr>
        </table>
      </div>
    </div>

  </div>

  <?php

  while ($row = mysqli_fetch_array($query)) {
  ?>

  <div class="container">
    <div class="row">
      <table style="width: 100%;" border="1" class="table-striped">

        <tr>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><a href="apply-job-post.php?id=<?php echo $row['id_internpost']; ?>"><?php echo $row['interntitle']; ?></a></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;"><?php echo $row['description']; ?></td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['minimumsalary']; ?> per Month</td>
          <td style="width: 25%; font-size: 20px; padding-top: 7px; padding-bottom: 7px; padding-left: 20px; color: black;">Rs.<?php echo $row['maximumsalary']; ?> per Month</td>
        </tr>

      </table>
    </div>
  </div>

        <?php 
      }
    }
  }
  ?>

  <br>
  </div>
  </div>
  <section>
    <div class="container">
      <div class="row">

        <h2 class="text-center" style="color: red; font-size: 30px;">Latest Job Posts</h2>

        <br>

        <?php 

        $sql = "SELECT * FROM job_post ORDER BY id_jobpost DESC limit 5";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
        $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) 
        {

        ?>

        <div align="left">

        <h4 style="font-size: 28px;"><a href="apply-job-post.php?id=<?php echo $row['id_jobpost']; ?>"><?php echo $row['jobtitle']; ?></a><span class="pull-right" style="font-size: 20px;">Rs. <strong><?php echo $row['maximumsalary']; ?> per Month</span></strong></h4>

        <div style="font-size: 19px;">
        <div><strong>Company Name : </strong><?php echo $row1['companyname']; ?> | <strong>Head Office : </strong><?php echo $row1['headofficecity']; ?> | <strong>Experience Required : </strong><?php echo $row['experience']; ?> Years</div>
        </div>

        <hr style="border-color:black;">

        </div>

        <?php
        }
        }
        }
        }
        ?>

      </div>
    </div>
	<div class="container">
      <div class="row">

        <h2 class="text-center" style="color: red; font-size: 30px;">Latest Internships Posts</h2>

        <br>

        <?php 

        $sql = "SELECT * FROM intern_post ORDER BY id_internpost DESC limit 5";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
        $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) 
        {

        ?>

        <div align="left">

        <h4 style="font-size: 28px;"><a href="apply-intern-post.php?id=<?php echo $row['id_internpost']; ?>"><?php echo $row['interntitle']; ?></a><span class="pull-right" style="font-size: 20px;">Rs. <strong><?php echo $row['maximumsalary']; ?> per Month</span></strong></h4>

        <div style="font-size: 19px;">
        <div><strong>Company Name : </strong><?php echo $row1['companyname']; ?> | <strong>Head Office : </strong><?php echo $row1['headofficecity']; ?> | <strong>Experience Required : </strong><?php echo $row['experience']; ?> Years</div>
        </div>

        <hr style="border-color:black;">

        </div>

        <?php
        }
        }
        }
        }
        ?>

      </div>
    </div>
  </section>

  <br><br>
  </font>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

  </body>
</html>
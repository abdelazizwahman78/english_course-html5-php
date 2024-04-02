<?php 
session_start();
include ("connect.php");
$aname = $_SESSION['txtid'];
$qryname = "SELECT *  from  tbladmin where aname='$aname'";
$result = mysqli_query($con, $qryname);
if (mysqli_num_rows($result) == 0) {
  header("location:login.html");
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>IELTS Assist platform</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!--  styles -->
  <link href="css/indexall.css" rel="stylesheet" />
  <!-- Ajax -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>
<style>
.mx-auto {
margin-left: 237px !important;
}
input {
    margin-right: 10px;
}
.hero_area {
    height: 12vh;
}
.container-fluid p{
  text-align: center;
}
</style>
<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <span>
            IELTS Assist platform
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="listCourse.php">Back</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="AdminHomepage.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php"> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <?php
include("connect.php");
$cid= $_GET['cid'];
$qryname = "select * from  tblcourse where cid='$cid' ";
$result= mysqli_query($con,$qryname);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$cid=$row["cid"];
$cname=$row["cname"];
$level=$row["level"];

}
?>
  <br/> <br/>
 <div class="demo-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="p-5 bg-white rounded shadow-lg" style="width:687px !important;">
            <h3 class="mb-2 text-center pt-5" style="padding-top: 0rem !important;padding-bottom: 26px;">Update Course</h3>
            <form action="UpdateCourse_Code.php?cid=<?php echo $cid ?>" method="post">
                <table>
                    <tr>
                        <td><label for="">Course ID</label>
                            <input type="text" name="cid" class="form-control form-control-lg mb-3" value="<?php echo $cid ?>"  id="cid" maxlength="6"  placeholder="Enter Course Name"   style="width:300px;height:45px;padding:15px" required>
                            <div id="result" style="width: 300px;color: red;"></div>				
                          </td>
                        <td><label for="">Course Name</label>
                            <input type="text" name="cname" class="form-control form-control-lg mb-3" value="<?php echo $cname ?>"  maxlength="35" id=""  placeholder="Enter Course Name" style="width:300px;height:45px;padding:15px" required>
                        </td>
                    </tr>
                    <tr>
                        <td>  <label for="">Course Level</label>
                             <select name="level"  id="level" value="<?php echo $level ?>" class="form-control form-control-lg mb-3" style="width:300px;height:50px;padding:5px" required>
                            <option value="<?php echo $level ?>"><?php echo $level ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            
                            </select> 
                    </tr>
                    <tr>
                      <td colspan="2">
                        <input type="submit" class="btn-Submit" value="Update">
                        <input type="reset" class="btn-Cancel" value="Reset">

                      </td>
                    </tr>
                </table>
             </form>          
          </div>        
        </div>
      </div>
    </div>


<!--Register section start -->



<br/> <br/> <br/> <br/> <br/>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2024 All Rights Reserved By University of Technology & Applied Sciences'Students
    </p>
  </section>
  <!-- footer section -->


 
</body>

</html>
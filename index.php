<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD</title>
  <?php include 'links.php' ?>
  <?php include 'css/style.css' ?>
</head>
<body>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please Fill All The Details Carefully! </p>
                        <a href="display.php" style="color: #fff;">Check Form</a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply For Web Developer</h3>
                                <form action="" method="POST">

                                <div class="row register-form">
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your name *" name="user" value="" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Mobile number*" name="mobile" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Any Reference *" name="refer" value="" required />
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your Qualification *" name="degree" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control" placeholder="email id*" value="" required />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Web Developer *" name="Developer" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                
                                       


                                    
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $degree=$_POST['degree'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $refer=$_POST['refer'];
    $jobprofile=$_POST['Developer'];
    $insertquery="INSERT INTO  `jobresgistration` (`NAME`,`DEGREE`,`MOBILENO.`, `EMAILID`,`REFER`,`JOBPOST`) values('$name','$degree','$mobile','$email','$refer','$jobprofile')";
    $res=mysqli_query($con,$insertquery);
    if($res){
     ?>
     <script>
         alert("Data Inserted Properly");
     </script>
     <?php
    }else{
      ?>
       <script>
         alert("Data NOT Inserted Properly");
     </script> 
     <?php
    }
}
?>
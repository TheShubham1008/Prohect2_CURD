
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURD</title>
  <?php include '/CURD/links.php' ?>
  <?php include '/CURD/css/style.css' ?>
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
                                <form action="/CURD/index.php" method="POST">

                                <div class="row register-form">
                                	<?php
										include '/CURD/connection.php';
										$ids=$_GET['id'];
										$showquery="select*from `jobresgistration` where ID= {$ids}";
										$showdata=mysqli_query($con,$showquery);
										$arrdata=mysqli_fetch_array($showdata);
										if(isset($_POST['submit'])){
											$idupdate=$_GET['id'];
    									$name=$_POST['user'];
    									$degree=$_POST['degree'];
    									$mobile=$_POST['mobile'];
    									$email=$_POST['email'];
    									$refer=$_POST['refer'];
    									$jobprofile=$_POST['Developer'];
    									// $insertquery="INSERT INTO  `jobresgistration` (`NAME`,`DEGREE`,`MOBILENO.`, `EMAILID`,`REFER`,`JOBPOST`) values('$name','$degree','$mobile','$email','$refer','$jobprofile')";
    									$query="UPDATE `jobresgistration` SET `ID`='$ids',`NAME`='$name',`DEGREE`='$degree',`MOBILENO.`='$mobile',`EMAILID`='$email',`REFER`='$refer',`JOBPOST`='$jobprofile' WHERE  ID=$idupdate";
    									$arrdata=mysqli_query($con,$query);
    									if($arrdata){
     								?>
     								<script>
         								alert("Data UPDATED  Properly");
     								</script>
     								<?php
    								}else{
      								?>
       								<script>
         							alert("Data NOT UPDATED Properly");
     								</script> 
     								<?php
    									}
									}
									?>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your name *" name="user" value="<?php echo $arrdata['NAME'];?>" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Mobile number*" name="mobile" value="<?php echo $arrdata['MOBILENO.'];?>" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Any Reference *" name="refer" value="<?php echo $arrdata['REFER'];?>" required />
                                        </div>
                                       
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter your Qualification *" name="degree" value="<?php echo $arrdata['DEGREE'];?>" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control" placeholder="email id*" value="<?php echo $arrdata['EMAILID'];?>" required />
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Web Developer *" name="Developer" value="<?php echo $arrdata['JOBPOST'];?>" />
                                        </div>
                                        <input  type="submit" class="btnRegister" name="submit" value="UPDATE"/>
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


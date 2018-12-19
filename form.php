<?php
Include('Include/config.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $CV=$_POST['CV'];
    $sql="INSERT INTO inquiry(name,mobile,address,email,cv) VALUES('$name','$phone','$address','$email','$CV')";
    $result = mysqli_query($con,$sql) or mysqli_error($con);
    if($result) //if($con->query($sql)==TRUE)
    {
         echo '<script type="text/javascript">
            window.alert("Data submited successfully")
            </script>';
    }
    else
    {
        echo "error".$sql."<br>".$con->error;
    }
}


?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/stylesheet.css" rel='stylesheet' type='text/css'/>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="  register-left">
                        <h3>Welcome</h3>
                        <img src="image/logo.png" alt=""/>
                        <div class='page-header'>
                        <div class='btn-group'>
                        <a href="admin/Adminlogin.php" class='btn btn-primary' >Admin Login</a>
                      </div>
                        </div>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <form action="" method="post" role="form" class="form-horizontal">
                                <div class="row justify-content-center">
                                <div class="row register-form">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder=" Name *" value="" required=" Please enter Your Name" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" required="" pattern="[789][0-9]{9}"/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address" placeholder="Address *" value="" required="" />
                                        </div>

                                          <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="" required="" />
                                        </div>
                                         
                                         <div class="form-group">
                                             <label for="exampleFormControlFile1">Example file input</label>
                                             <input type="file" class="form-control-file" name="CV" id="exampleFormControlFile1" accept="application/docx" required="">
                                        </div>
                                    </div>
                                    <input type="submit" class="btnRegister" name="submit" value="Register"/>
                                </div>
                            </div>
                        </form>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
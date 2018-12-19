<?php
include('includes/config.php');
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $result=mysqli_query($con,"select * from admin where username='$username' and password='$password'") or die("failed".mysqli_error($con));
  $row = mysqli_fetch_array($result);
  if($row ['username'] == $username && $row['password'] == $password)
      {
        echo " login success".$row['username'];
          $_SESSION['adminlogin']=$row['username'];
        header("Location: inquiry.php");
      
      }
      else
      {
        $error="Login Unsuccessful";
      }
}
?>
<head><title>Admin</title>
 
 <link rel="shortcut icon" type="admin/image/png" href="image/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="admin/image/favicon.png"/></head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="/tag8/admin/css/style.css" rel="stylesheet">
<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="#" method="POST">

          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text"  name="username" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="password" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="/tag8/index.php"><h4>Back</h4></a></span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" name="login" value="Sign In"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
          <img src="image/logo.png"  alt="" width="250" height="150"/>
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
<?php
include('includes/config.php');
?>
<head><title>Inquiry</title>
 
 <link rel="shortcut icon" type="admin/image/png" href="image/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="admin/image/favicon.png"/></head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/tag8/index.php"><img src="image/logo.png" alt="" width="60" height="20"/></a>
     
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/tag8/index.php">Home</a></li>
     
    </ul>
  </div>
</nav>
<div class="container">
   
      <div class="row ">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Inquiry</h3>
          </div>
          <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Sr.no</th>
                <th>Name</th>
                <th>Phone</th>
                <th>address</th>
                <th>Email</th>
                 <th>CV</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                  $result = mysqli_query($con,"SELECT * FROM inquiry");
 while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['mobile'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['CV'] . "</td>";
echo "</tr>";
}
echo "</table>";
                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    <style type="text/css">
    	
    </style>
    </div>
  </div>
  
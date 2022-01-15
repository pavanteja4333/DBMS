<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="en">
<head>
<title>NALA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
      
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="home1.php"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
 
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> nalaconstruction@gmail.com</li>
        <li><div class="dropdown"> 
            <img src="images/demo/backgrounds/34.png" style="border-radius: 50px;width: 35px;width: 35px;">
              
            <div class="dropdown-content"> 
                <a href="#">profile</a>
                <hr>
                <a href="#">Sign Out</a>
            </div> 
        </div> </li>
      </ul>
    </div>
      </div>
</div>
<!------------------------------------------------------------------>

<br><br>
<div class="container">
    <form action="/action_page.php">
      <div class="row">
        <div class="col">
            <h4>Project Id:</h4>
          <input type="text" class="form-control" id="Project Id" placeholder="Enter Project Id" name="project id">
        </div></div>
        <br>
        <div class="row">
        <div class="col">
            <h4>Resource 1</h4>
          <input type="text" class="form-control" id="email" placeholder="Enter Resource1 Id" name="r1">
        </div>
        <div class="col">
            <h4>Quantity</h4>
          <input type="text" class="form-control" placeholder="Enter Resource1 Quantity" name="r1q">
        </div></div>
      
      <br>
<!---resource 2-->
<div class="row">
    <div class="col">
        <h4>Resource 2</h4>
      <input type="text" class="form-control" id="email" placeholder="Enter Resource2 Id" name="r1">
    </div>
    <div class="col">
        <h4>Quantity</h4>
      <input type="text" class="form-control" placeholder="Enter Resource2 Quantity" name="r1q">
    </div></div>
  
  <br>
  <!--resource 3-->
  <div class="row">
    <div class="col">
        <h4>Resource 3</h4>
      <input type="text" class="form-control" id="email" placeholder="Enter Resource3 Id" name="r1">
    </div>
    <div class="col">
        <h4>Quantity</h4>
      <input type="text" class="form-control" placeholder="Enter Resource3 Quantity" name="r1q">
    </div></div>
  <br>
  <input type="button" class="btn btn-primary" value="Confirm">
    <br>
    </form>
  </div>
</body>
</html>

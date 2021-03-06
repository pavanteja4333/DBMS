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
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="home.php"><i class="fas fa-home fa-lg"></i></a></li>
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
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->

<br>

<button style="margin-left: 1325px;" type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
  Change Profile
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Change Profile</h4>
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">New Name</label>
            <input type="text" class="form-control" placeholder="Enter New Name" id="tittle" autocomplete="tittle">
          </div>
          <div class="form-group">
            <label for="Area">Phone Number</label>
            <input type="number" class="form-control" placeholder="Enter New Number" id="Area">
          </div>
          <div class="form-group">
            <label for="Priority">City</label>
            <input type="text" class="form-control" placeholder="Enter New City" id="priority">
          </div>
          
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>

</div>

<br>
<br>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<br><br>
<center>
    <img src="images/demo/backgrounds/34.png" style="border-radius: 100px; width: 120px;height: 120px;align-items: center;">
    <h1>U Sri Ranganath</h1> 
    </center><br><br><br>
    <center>

      <table class="table table-striped" style="width: 800px;padding-left: 200px;">
        <tbody>
          <tr>
            <td>Date of birth</td>
            <td>12Dec2020</td>
          </tr>
          <tr>
            <td>City</td>
            <td>Assam</td>
          </tr>
          <tr>
            <td>Date Of Joining</td>
            <td>12df2002</td>
          </tr>
          <tr>
            <td>Skills</td>
            <td>skill1</td>
          </tr>
          <tr>
            <td>Health</td>
            <td>2</td>
          </tr>
          <tr>
            <td>Branch</td>
            <td>Branch Name</td>
          </tr>
        </tbody>
      </table>
</center>
</body>
</html>
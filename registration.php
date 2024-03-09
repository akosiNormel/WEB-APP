<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <script src="./assets/js/search.js"></script>

  <link href="/WEB-APP/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/WEB-APP/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

   <style>
    body{
      background-color: #bdc3c7;
    }
   </style>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">
      <img src="/WEB-APP/assets/img/online-registration.png" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/WEB-APP">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/WEB-APP/registration.php">Registration</a>
        </li>
    </ul>
     
    </div>
  </div>
</nav>

  <div class="container">
    <p class="h2 mt-3">Registration</p>
    <p>You can add record here</p>
  <div class="card mt-3">
 <form action="/WEB-APP/models/save.php" method="POST">
        <div class="card-header">Registration form </div>
        <div class="card-body">
                <?php
                    if(isset($_GET["success"])) {
                     ?>
                        <div class="alert alert-success">
                        <b>New Student Added</b>. Congrats. Thank you.
                      </div>
                    <hr>
                    <?php
                    }elseif(isset($_GET["invalid"])) {
                   ?>
                        <div class="alert alert-danger">
                        <b>Existed Application ID</b>. Please try another. Thank you.
                      </div>
                    <hr>
                    <?php
                    };
                  
                ?>
           
           <div class="row">
                <div class="col-md-4">
        <strong>Application ID:*(Required)</strong>
      <input name="inp_appid" type="text" placeholder="Enter Application id here" class="form-control mt-2">
                </div>
                <div class="col-md-4">
        <strong>Tes Award Number:*(Required)</strong>
      <input name="inp_tesno" type="text" placeholder="Enter tes award number here" class="form-control mt-2">
                </div>
                <div class="col-md-4">
        <strong>Student ID:*(Required)</strong>
      <input name="inp_sid" type="text" placeholder="Enter student ID here" class="form-control mt-2">
                </div>
                <div class="col-md-3">
        <strong>First Name:*(Required)</strong>
      <input name="inp_fname" type="text" placeholder="Enter first name here" class="form-control mt-2">
                </div>
                <div class="col-md-3">
        <strong>Last Name:*(Required)</strong>
      <input name="inp_lname" type="text" placeholder="Enter last name here" class="form-control mt-2">
                </div>
                <div class="col-md-3">
        <strong>Ext. Name:*(Optional)</strong>
      <input name="inp_ename" type="text" placeholder="Enter ext. name here" class="form-control mt-2">
                </div>
                <div class="col-md-3">
        <strong>Middle Name:*(Optional)</strong>
      <input name="inp_mname" type="text" placeholder="Enter middle name here" class="form-control mt-2">
                </div>
                <div class="col-md-4">
        <strong>Gender:*(Optional)</strong>
        <select name="inp_gender" id="" class="form-control mt-2">
            <option value="" disabled selected>--SELECT GENDER--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
                </div>
                <div class="col-md-4">
        <strong>Award Batch:*(Required)</strong>
      <input name="inp_batch" type="text" placeholder="Enter award batch here" class="form-control mt-2">
                </div>
                <div class="col-md-4">
        <strong>Status:*(Required)</strong>
      <input name="inp_status" type="text" placeholder="Enter award status here" class="form-control mt-2">
                </div>
                </div>

                    </div>
    <div class="card-footer">
        <span style="float: right">
            <button class="btn btn-success">
            Add New Student
            </button>
        </span>
    </div>
</form>

</div>
 
  </div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" 
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>

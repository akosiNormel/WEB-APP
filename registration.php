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
                                  <strong>Application ID:<b class="text-danger">*</b></strong>
                                <input name="inp_appid" required type="text" placeholder="Enter Application id here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-4">
                                  <strong>Tes Award Number:<b class="text-danger">*</b></strong>
                                <input name="inp_tesno" required type="text" placeholder="Enter tes award number here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-4">
                                  <strong>Student ID:<b class="text-danger">*</b></strong>
                                <input name="inp_sid" required type="text" placeholder="Enter student ID here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-3">
                                  <strong>First Name:<b class="text-danger">*</b></strong>
                                <input name="inp_fname" required type="text" placeholder="Enter first name here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-3">
                                  <strong>Last Name:<b class="text-danger">*</b></strong>
                                <input name="inp_lname" required type="text" placeholder="Enter last name here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-3">
                                  <strong>Ext. Name:(Optional)</strong>
                                <input name="inp_ename" type="text" placeholder="Enter ext. name here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-3">
                                  <strong>Middle Name:<b class="text-danger">*</b></strong>
                                <input name="inp_mname" required type="text" placeholder="Enter middle name here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-4">
                                  <strong>Gender:<b class="text-danger">*</b></strong>
                                  <select name="inp_gender" id="" required type="text" class="form-control mt-2">
                                      <option value="" disabled selected>--SELECT GENDER--</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                  </select>
                                          </div>
                                          <div class="col-md-4">
                                  <strong>Award Batch:<b class="text-danger">*</b></strong>
                                <input name="inp_batch" required type="text" placeholder="Enter award batch here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-4">
                                  <strong>Status:<b class="text-danger">*</b></strong>
                                <input name="inp_status" required type="text" placeholder="Enter award status here" class="form-control mt-2">
                                          </div>
                                          <div class="col-md-3">
                              <!--Address-->
                              <?php
                                    include './config/database.php';

                                    
                                ?>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <hr>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <strong>Region : <b class="text-danger">*</b></strong>
                                        <select name="inp_region" id="inp_region" onchange="display_province(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT REGION --</option>

                                            <?php
                                              $sql = "SELECT * FROM ph_region";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                                ?>
                                                 <option value="<?= $row['regCode'] ?>"><?= $row['regDesc']?></option> 
                                                <?php
                                            }
                                            } else {
                                            echo "0 results";
                                            }
                                            $conn->close();  
                                            ?>
                                        </select>   
                                    </div>
                                    <!--Provice-->
                                    <div class="col-md-12 mt-3">
                                    <strong>Province : <b class="text-danger">*</b></strong>
                                        <select name="inp_province" id="inp_province" onchange="display_citymun(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT PROVINCE --</option>
                                        </select>
                                    </div>
                                    <!--City / Municipality-->
                                    <div class="col-md-12 mt-3">
                                    <strong>City / Municipality : <b class="text-danger">*</b></strong>
                                        <select name="inp_citymun" id="inp_citymun" onchange="display_brgy(this.value)" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT CITY / MUNICIPALITY --</option>
                                        </select>
                                    </div>
                                    <!--Barangay-->
                                    <div class="col-md-12 mt-3">
                                    <strong>Barangay : <b class="text-danger">*</b></strong>
                                        <select name="inp_brgy" id="inp_brgy" required class="form-control mt-2">
                                            <option value="" disabled selected>-- SELECT BARANGAY --</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Add New Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


                    < <script>
                            function display_province(regCode) {
                                $.ajax({
                                url: './models/ph_address.php',
                                type: 'POST',
                                data: {
                                    'type': 'region',
                                    'post_code': regCode
                                },
                                success: function(response) {
                                    $('#inp_province').html(response);
                                }
                            });
                        
                            }

                            function display_citymun(provCode) {
                                $.ajax({
                                url: './models/ph_address.php',
                                type: 'POST',
                                data: {
                                    'type': 'province',
                                    'post_code': provCode
                                },
                                success: function(response) {
                                    $('#inp_citymun').html(response);
                                }
                            });
                        
                            }

                            function display_brgy(citymunCode) {
                                $.ajax({
                                url: './models/ph_address.php',
                                type: 'POST',
                                data: {
                                    'type': 'citymun',
                                    'post_code': citymunCode
                                },
                                success: function(response) {
                                    $('#inp_brgy').html(response);
                                }
                            });
                        
                            }

                        </script>

<script src="https://code.jquery.com/jquery-3.7.1.js" 
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>

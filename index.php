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
        <li class="nav-item">
          <a class="nav-link" href="/WEB-APP">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/WEB-APP/registration.php">Registration</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input onkeyup="search(this.value)" class="form-control me-2" type="text" placeholder="Search here">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
</nav>

  <div class="container">
    <p class="h2 mt-3">Dashboard</p>
    <p>You can view the student info</p>
  <div class="card mt-3">
  <div class="card-header">
    list of student 
  </div>
  <div class="card-body">
  
<table class="table table-bordered table-hover"> 
  <thead>
<tr>
<th width="250" style="text-align: center;">First Name</th>
<th style="text align: left; pudding left: 20px">Last name</th>
<th width="50" style="text-align: center;">Action</th>
</tr>
  </thead>
<tbody id="results">

</tbody>

</table>
  </div>
  <div class="card-footer"></div>
</div>
 
  </div>
  
  <div class="modal" id="view-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Student info</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" 
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>

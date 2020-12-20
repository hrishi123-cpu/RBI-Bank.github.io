<!doctype html>
<html lang="en">

<?php
include("functions.php");
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <title>RBI - Customers</title>
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
    <div class="container-fluid navcont">


      <a class="navbar-brand" href="./index.php">
        <img src="./images1/RBI.jpeg" height="60" width="200 ">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-sm-1"></div>
      <div class="collapse navbar-collapse" id="Navbar">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"></span>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span>About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span>Contact</a>
          </li>
        </ul>

      </div>
    </div>
    </div>
  </nav>

  <br>

  <div class="container" id="mar">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Customer ID</th>
          <th scope="col">Customer Name</th>
          <th scope="col">Customer Email</th>
          <th scope="col">Current Balance</th>
        </tr>
      </thead>
      <tbody>
        <?php
        getCustomers();
        ?>
      </tbody>
    </table>
  </div>








  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script src="script.js"></script>
</body>

</html>
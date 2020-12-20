<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@1,700&display=swap" rel="stylesheet">

  <title>Royal Bank of India</title>
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


  <div class="container" id="mar">

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Balance</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "rbi_india";


        $conn = mysqli_connect($host, $user, $password) or die("Cannot execute");
        mysqli_select_db($conn, $db);

        $selectquery = "select * from customers";
        $query = mysqli_query($conn, $selectquery);
        $nums = mysqli_num_rows($query);

        //echo $nums;


        //echo $res[1];

        while ($res = mysqli_fetch_array($query)) {
        ?>
          <tr>

            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['balance']; ?></td>

          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  x







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script scr="js/bank.js"></script>
</body>

</html>
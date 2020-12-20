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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/detail.css">

  <title>RBI - Customer Details</title>
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
    <div class="container-fluid navcont">


      <a class="navbar-brand" href="./index.html">
        <img src="./images1/RBI.jpeg" height="60" width="200 ">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="col-sm-1"></div>
      <div class="collapse navbar-collapse" id="Navbar">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="./index.html"><span class="fa fa-home fa-lg"></span>Home</a>
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

  <div class="container my-4">
    <?php
    if (isset($_GET['customer_id'])) {
      $c_id = $_GET['customer_id'];
      $get_customers = "select * from customers where id='$c_id'";
      $run_customers = mysqli_query($con, $get_customers);

      while ($row_customers = mysqli_fetch_array($run_customers)) {
        $customer_id = $row_customers['id'];
        $customer_name = $row_customers['name'];
        $customer_email = $row_customers['email'];
        $current_balance = $row_customers['balance'];

        echo "
                       <br>
                       <br>
                        <table class='table table-bordered' style='text-align: center; font-size: 18px;'>
                            <tr>
                                <th scope='col'>Customer ID</th>
                                <td>$customer_id</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Name</th>
                                <td>$customer_name</td>
                            </tr>
                            <tr>
                                <th scope='col'>Customer Email</th>
                                <td>$customer_email</td>
                            </tr>
                            <tr>
                                <th scope='col'>Current Balance</th>
                                <td>$current_balance</td>
                            </tr>
                        </table>
                        </div>
                          

                        <div class='row'>
                        <div class='col-sm-3'></div>
                            <div class='col-12 col-sm-3'>
                              
                                     
                                        <a href='customers.php' style='text-decoration: none;' class='btn res ' role='button'>Back to all customers</a>
                                     
                               
                                </div>
                  
                            <div class='col-12 col-sm-3 '>
                               
                                   
                                        <a href='transfer.php?customer_id=$c_id' style='text-decoration: none;'class='btn res' role='button'>Transfer Money</a>
                                   
                               
                            </div>
                            <div class='col-sm-3'></div>
                        </div>
                    ";
      }
    }
    ?>
  </div>










  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
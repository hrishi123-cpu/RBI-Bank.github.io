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
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/transfer.css">

  <title>RBI - Transfer Money</title>
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


  <div class="container">
    <?php
    if (isset($_GET['customer_id'])) {
      $c_id = $_GET['customer_id'];
      $get_customers = "select * from customers where id='$c_id'";
      $run_customers = mysqli_query($con, $get_customers);
      $row_customers = mysqli_fetch_array($run_customers);
      $customer_id = $row_customers['id'];
      $customer_name = $row_customers['name'];
      $current_balance = $row_customers['balance'];

      echo "
                      <form action='transfer.php?customer_id=$c_id' method='post' enctype='multipart/form-data'>
                          <label for='from' style='font-size: 20px;'>Transferring from</label>
                          <div class='form-row'>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='from_acc'>Customer ID</label>
                                  <input type='number' class='form-control' name='from_acc' value='$customer_id' readonly>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='from_acc_name'>Customer Name</label>
                                  <input type='text' class='form-control' name='from_acc_name' value='$customer_name' readonly>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='curr_bal'>Current Balance</label>
                                  <input type='number' class='form-control' name='curr_bal' value='$current_balance' readonly>
                              </div>
                          </div>
                          <br>
                          <label for='to' style='font-size: 20px;'>Transfer to</label>
                          <div class='form-row'>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='to_acc'>Customer Name</label>
                                  <select class='form-control' name='to_acc' required>
                                      <option value='0'>Select Name on Account</option>
                  ";
      $get_customers = "select * from customers";
      $run_customers = mysqli_query($con, $get_customers);
      while ($row_customers = mysqli_fetch_array($run_customers)) {
        $customer_id = $row_customers['id'];
        $customer_name = $row_customers['name'];
        echo "<option value='$customer_id'>$customer_name</option>";
      }
      echo "
                                  </select>
                              </div>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='transfer_amt'>Transfer Amount</label>
                                  <input type='number' class='form-control' name='transfer_amt' placeholder='Amount' required>
                              </div>
                          </div>
                          <div class='form-row'>
                              <div class='col-lg-4 col-md-8 col-sm-12 mb-3 mx-auto'>
                                  <label for='transfer_msg'>Message for the reciever</label>
                                  <input type='text' class='form-control' name='transfer_msg' placeholder='Message'>
                              </div>
                          </div>
                          <div class='row'>
                          <div class='col-sm-3'></div>
                          <div class='col-12 col-sm-3 '>
                          <center>
                              <button type='submit' class='btn  res ' name='transfer'>Transfer Now</button>
                          </center>
                          </div>
                          <div class='col-12 col-sm-3'>
                         
                          <center>
                             
                                  <a href='customers.php' style='text-decoration: none';  class='btn res res1' role='button'>Cancel Transfer</a>
                             
                          </center>
                      </div>
                          </div>
                      </form>
                     
                      
                  ";
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

<?php
if (isset($_POST['transfer'])) {
  $curr_bal = $_POST['curr_bal'];
  $transfer_date = date('d-m-Y H:i:s a');
  $from_acc = $_POST['from_acc'];
  $from_acc_name = $_POST['from_acc_name'];
  $to_acc = $_POST['to_acc'];
  $transfer_amt = $_POST['transfer_amt'];
  $transfer_msg = $_POST['transfer_msg'];

  if ($to_acc != 0) {
    $get_customer = "select balance from customers where id=$from_acc";
    $run_customer = mysqli_query($con, $get_customer);
    $row_customer = mysqli_fetch_array($run_customer);

    if ($transfer_amt <= $row_customer['balance']) {
      $f_customer = "update customers set balance=$curr_bal-$transfer_amt where id=$from_acc";
      $run_f_customer = mysqli_query($con, $f_customer);

      $t_customer = "select balance from customers where id=$to_acc";
      $run_t_customer = mysqli_query($con, $t_customer);
      $row_t_customer = mysqli_fetch_array($run_t_customer);
      $to_curr_bal = $row_t_customer['balance'];

      $t_customer_1 = "update customers set balance=$to_curr_bal+$transfer_amt where id=$to_acc";
      $run_t_customer_1 = mysqli_query($con, $t_customer_1);

      $insert_transfer = "insert into transfers (transfer_date, from_acc, from_acc_name, to_acc, transfer_amt, transfer_msg) values ('$transfer_date', $from_acc, '$from_acc_name', $to_acc, $transfer_amt, '$transfer_msg')";
      $run_transfer = mysqli_query($con, $insert_transfer);
      if ($run_f_customer && $run_t_customer && $run_t_customer_1 && $run_transfer) {
        echo '<script>alert("Transfer complete")</script>';
        echo '<script>window.open("customers.php", "_self")</script>';
      } else {
        echo '<script>alert("Unable to transfer")</script>';
      }
    } else {
      echo '<script>alert("Insufficient Balance!!!")</script>';
    }
  } else {
    echo '<script>alert("Please select an account!!!")</script>';
  }
}
?>
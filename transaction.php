<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
       
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="NF/android-icon-36x36.png"/>


    <title>Banking System</title>
    
    
    <?php
            $conn = mysqli_connect("localhost","root","mysqlpassword","bank");
            if(!$conn){
                echo "Error: Unable to connect to MySql";
                die();
            }

        if(isset($_POST['makepayment']))
            {
                $from = $_GET['id'];
                $to = $_POST['to'];
                $amount = $_POST['amount'];

                $sql = "select * from user_data where id=$from";
                $result = $conn->query($sql);
                $row=$result->fetch_assoc();

                $sql = "select * from user_data where id=$to";
                $result = $conn->query($sql);
                $row1=$result->fetch_assoc();


                if (($amount)<0)
                    {
                        echo '<script type="text/javascript">';
                        echo ' alert("Error! Enter Valid Amount..!!")';  // showing an alert box.
                        echo '</script>';
                    }

                else if($amount >$row['balance']) 
                    {
                        
                        echo '<script type="text/javascript">';
                        echo ' alert("Insufficient Balance in your account..!!")';  // showing an alert box.
                        echo '</script>';
                    }
                    

                else if($amount == 0)
                  {
                    echo "<script type='text/javascript'>";
                        echo "alert('Error! Enter Valid Amount..!!')";
                        echo "</script>";
                    }

                  
                else{
                    // deducting amount from sender's account
                    $newbalance = $row['balance'] - $amount;
                    $sql = "update user_data set balance=$newbalance where id=$from";
                    mysqli_query($conn,$sql);


                    // adding amount to reciever's account
                    $newbalance = $row1['balance'] + $amount;
                    $sql = "update user_data set balance=$newbalance where id=$to";
                    mysqli_query($conn,$sql);
                    
                    $sender = $row['name'];
                    $receiver = $row1['name'];
                    $sql = "insert into history(sender, receiver, amount) values ('$sender', '$receiver', '$amount')";
                    $query=mysqli_query($conn,$sql);
                    
                
                    if($query){
                        echo "<script> alert('Transaction Successful');
                              window.location = 'history.php';
                              </script>";
                    }
               
                    $newbalance= 0;
                    $amount =0;
                }
            }
            $conn->close();
            ?>

<style>
    body{
        min-height: 100vh;
    }
      .sticky-footer{
        position: sticky;
        top: 100%;
        color: white;
        background-color: #0a183d;
        text-align: center;

      }
    </style>

  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #97d3ff;">
            <div class="container-fluid">
            <img src="NF/android-icon-36x36.png" alt="">
              <a class="navbar-brand" href="index.php" id="name">GRIP BANK</a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="margin: 0 30px 0 0;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>&nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                  </li>&nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>&nbsp;&nbsp;&nbsp;
                </ul>
              </div>
            
            </div>
        </nav>
  </header>

<form method="POST" name="myform">
    <div class='container'>
        <h2 class="text-center pt-4">Transaction</h2>
            <?php     
                $conn = mysqli_connect("localhost","root","mysqlpassword","bank");
                if(!$conn){
                    echo "Error: Unable to connect to MySql";
                    die();
                }   
                        
                $sid=$_GET['id'];
                $query = "select * from user_data where id=$sid";
                $result = mysqli_query($conn,$query); 
                        
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                
                $row=mysqli_fetch_assoc($result);
            ?>
            
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['balance']; ?></td>
                </tr>
            </table>
        </div>
                
        <br>
                
        <label>Transfer To:</label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Choose</option>
                    <?php
                        $conn = mysqli_connect("localhost","root","mysqlpassword","bank");
                        if(!$conn){
                            echo "Error: Unable to connect to MySql";
                            die();
                        } 
                            
                        $sid=$_GET['id'];
                        $query = "select * from user_data where id!=$sid";
                        $result = mysqli_query($conn,$query);
                            
                        if(!$result)
                        {
                            echo "Error : ".$sql."<br>".mysqli_error($mysqli);
                        } 
                        
                        // LOOP TILL END OF DATA  
                        while($row=$result->fetch_assoc()) {
                    ?>
                    
                <option class="table" value="<?php echo $row['id'];?>">
                    <?php echo $row['name'] ;?> (Balance: <?php echo $row['balance'] ;?>)
                </option>
                    
                    <?php 
                        } 
                    ?>
            </select>
               
            <br>
            <br>
                
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Amount</span>
                        <input type="number" name="amount" class="form-control" aria-describedby="basic-addon1" required>
                    </div>
                </div>
            </div>
                
            <div class="text-center">
                <button class="btn btn-dark" name="makepayment" type="submit">Make Payment</button>
            </div>
    </div>
</form>
        <footer class="sticky-footer">
            <p>&copy; 2021–2025 TSF co-oprative bank ltd , Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            <div class="card-footer text-muted">
                <a href="https://github.com/RuTuL07" class="fa fa-github"></a>&nbsp&nbsp&nbsp
                <a href="https://www.linkedin.com/in/rutul-patel-7b36301b4/" class="fa fa-linkedin"></a>&nbsp&nbsp&nbsp
                <a href="#" class="fa fa-twitter"></a>&nbsp&nbsp&nbsp
            </div>
        </footer>



     <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  
</body>
</html>
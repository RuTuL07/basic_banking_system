<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   
   
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="NF/android-icon-36x36.png"/>

    <style>
        body{
            margin: 0px;
            background-color: #fde4dbbf;
            min-height: 100vh;
        
        a {
            color: rgb(247, 247, 247);
            text-decoration: none;
         }
         .sticky-footer{
          position: sticky;
          top: 100%;
          color: white;
          background-color: #0a183d;
          text-align: center;

        }
    </style>

    <title>TSF GRIP</title>
  </head>
  <body>
  
  <header class="text-gray-600 body-font">
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
  <?php
            $conn = mysqli_connect("localhost","root","mysqlpassword","bank");
            if(!$conn){
                echo "Error: Unable to connect to MySql";
                die();
            }
        ?>

        <?php
        
        if(isset($_POST['submit'])){
            $u_name = $_POST['name'];
            $u_mail = $_POST['email'];
            $u_balance = $_POST['balance'];

            $query = "insert into user_data(name, email, balance) values ('$u_name', '$u_mail', '$u_balance')";
            $result = mysqli_query($conn,$query) or die(mysqli_error());

            if ($result) {
                echo "<script> alert('User Added Successfully');
                window.location = 'user.php';
                </script>";
            }
            else{
                echo "<script> alert('Error while adding new user..!!');
                </script>";
            }
        }
        
        
        
        ?>

  <div class="container">
  <form method="POST">
        <div class="text-center">
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name='name' Required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputmail" class="col-sm-2 col-form-label">E-mail</label>
            <div class="col-md-6">
            <input type="email" class="form-control" name='email' Required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputbalance" class="col-sm-2 col-form-label">Balance</label>
            <div class="col-md-6">
            <input type="number" class="form-control" name='balance' Required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-6">
            <button type="submit" name="submit" class="btn btn-info">Add user</button>
            </div>
        </div>
      </div>
    
  </form>
        </div>
        <footer class="sticky-footer">
            <p>&copy; 2021–2025 TSF co-oprative bank ltd , Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            <div class="card-footer text-muted">
                <a href="https://github.com/RuTuL07" class="fa fa-github"></a>&nbsp&nbsp&nbsp
                <a href="https://www.linkedin.com/in/rutul-patel-7b36301b4/" class="fa fa-linkedin"></a>&nbsp&nbsp&nbsp
                <a href="#" class="fa fa-twitter"></a>&nbsp&nbsp&nbsp
            </div>
        </footer>
  
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


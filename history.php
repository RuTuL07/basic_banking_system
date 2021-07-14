<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <style>
        body{
            background-color: #fde4dbbf;
            min-height: 100vh;
        }
        .table{
            margin: 0 auto;
            width: 90%;
            margin-top: 7%;
        }
        .text-center{
            margin-top: 3%;
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
<figure class="text-center">
            <blockquote class="blockquote">
                <p>Transaction History</p>
            </blockquote>
        </figure>

        <?php
            $conn = mysqli_connect("localhost","root","mysqlpassword","bank");
            if(!$conn){
                echo "Error: Unable to connect to MySql";
                die();
            }
        ?>

        <table class="table table-striped table-hover">
            <?php
                $query = 'select * from history';
                $result = mysqli_query($conn,$query);
            ?>
        <tr>
            <th>No.</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Date And Time</th>

        </tr>
      <!-- PHP CODE TO FETCH DATA FROM ROWS-->
      <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?>
      <tr>
        <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->
        <td>
          <?php echo $rows['sn'];?>
        </td>
        <td>
          <?php echo $rows['sender'];?>
        </td>
        <td>
          <?php echo $rows['receiver'];?>
        </td>
        <td>
          <?php echo $rows['amount'];?>
        </td>
        <td>
          <?php echo $rows['datetime'];?>
        </td>

      </tr>
      <?php 
        } 
      ?>
    
    </table>
          <footer class="sticky-footer">
            <p>&copy; 2021–2025 TSF co-oprative bank ltd , Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
            <div class="card-footer text-muted">
                <a href="https://github.com/RuTuL07" class="fa fa-github"></a>&nbsp&nbsp&nbsp
                <a href="https://www.linkedin.com/in/rutul-patel-7b36301b4/" class="fa fa-linkedin"></a>&nbsp&nbsp&nbsp
                <a href="#" class="fa fa-twitter"></a>&nbsp&nbsp&nbsp
            </div>
        </footer>


         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

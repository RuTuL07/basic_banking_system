<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="NF/android-icon-36x36.png"/>

    <title>About Us</title>

    <style>
      body{
        min-height: 100vh;
      }
        .container-md{
            margin-top: 4%;
        }
        .container-md{
            margin-left: 5%;
            margin-right: 5%;
        }
        .fa {
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
        }
        .fa-github {
            
            color: white;
        }
        .fa:hover {
            color: red;
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
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>&nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                  </li>&nbsp;&nbsp;&nbsp;
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>&nbsp;&nbsp;&nbsp;
                </ul>
              </div>
            
            </div>
        </nav>
  </header>
    <div class="container-md">
        <div class="card text-center">
            <div class="card-header">
                <h2>About</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Graduate Rotational Internship Program</p>
                <p class="card-text">Rutul Patel</p>
                <p>I am an aspiring web developer pursuing B.E in Computer Science Engineering from Savitibai Phule Pune
                    University.I am skilled in the coordination and development of engineering projects, currently looking for a
                    position to expand my skillset. I have worked on different programming languages such as,HTML,CSS,JavaScript,PHP,MYSQL,PYTHON,JAVA. Looking for an organization where I can apply my knowledge and skills for
                    continuous improvement</p>
            </div>
        </div>
    </div>
        
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
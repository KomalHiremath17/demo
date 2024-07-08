<?php
$conn=new mysqli("localhost","root","","form",);
$servername="localhost";
$username="root";
$password="";
$dbname="form";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($_POST['submit'])
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $destination=$_POST['destination'];
 $text=$_POST['text'];

 $query=" INSERT INTO `abc` (`name`, `email`, `phone`, `destination`, `text`)  VALUES ( '$name', '$email', '$phone', '$destination', '$text')";
 $data=mysqli_query($conn,$query);
if ($data)
{
  echo "data inserted successfully";
}
 else{
  echo "data not inserted successfully";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="shortcut icon" href="images.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
         #rr{
        width: 100px;
       }
       #rr2{
        width: 400px;
        margin-left:40px:
       }

      #rr1{
        width: 30px;
        
      }
      body{
        text-decoration: none;
        font-family: 'Courier New', Courier, monospace;
      }
      footer{
        position:relative;
      }
      .text_title{
        font-family: "Trebuchet MS",Sans-serif;
    color: #046BBA;
    font-size:50px;
    text-align:center;
      }
    #sr{
      width: auto;
      height: 600px;
    }

    .container {
  position: relative;
  text-align: center;
  color: white;
}
    .centered {
        font-size: 100px;
        font-family: 'Courier New', Courier, monospace;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
   


    </style>


</head>
<body>
   
<nav style="" class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img id="rr" src="images.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">|Home|</a>
        <a class="nav-link active" href="about.php">|about us|</a>
        <a class="nav-link active " href="packages.php">|packages|</a>
        <a class="nav-link active" href="blogs.php">|blogs|</a>
        <a class="nav-link active " href="contact.php">|contact us|</a>
       <a class="nav-link active " href="contact.php" > <button type="button" class="btn btn-dark">GET A QUOTE </button></a>
      </div>
    </div>
  </div>
</nav>
<br>

<div class="elementor-background-overlay" class="container">

<img style="width:100%;height:500px;" src="cantact.webp" alt="Snow" style="width:100%;">

<div class="centered"><h1 style="font-size:50px;color:white;">contact us</h1>

</div>
</div>

<br>


<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="row align-items-start">
    <div class="col">
      <strong >location 1</strong>
      <p>+91 8660710**5</p>
      <p>bengaluru,karnatak</p>
      <p>india</p>
    </div>
    <div class="col">
      <strong>location 2 </strong>
   
      <p>+91 7296366***</p>
     <p> mumbai,maharastra</p>
     <p>india</p>
        </div>
    <div class="col">
      <strong>location 3 </strong>
     <p> +91 63630872***</p>
     <p>panaji,goa</p>
     <p>india</p>
    </div>
 </div>
</div>


<br>
<center>
<div style="width:700px;">
<form action="" method="POST">
<input class="form-control form-control-lg" name="name" type="text" placeholder="name" aria-label=".form-control-lg example" require>
<br>
<input class="form-control form-control-lg" name="phone" type="tel" placeholder="phone" aria-label=".form-control-lg example"  require>
<br>
<input class="form-control form-control-lg" name="email" type="email" placeholder="email" aria-label=".form-control-lg example"  require>
<br>
<input class="form-control form-control-lg" name="destination" type="text" placeholder="destination" aria-label=".form-control-lg example"  require>
<br>
<input class="form-control form-control-lg" name="text" type="text" placeholder="text" aria-label=".form-control-lg example"  require>
<br>
<input class="form-control form-control-lg" name="submit" type="submit" placeholder="submit" aria-label=".form-control-lg example"  >

</form>












</div>

</center>





<footer >
<div class="shadow p-3 mb-5 bg-body-tertiary rounded">
  <div class="row align-items-start">
    <div class="col">
      <strong >location </strong>
    </br>
      <p><img id="rr1" src="download.png" alt="">karnatak,india</p>
      
    </div>
    <div class="col">
      <strong>phone </strong>
      <p>8660710***</p>
      <p>7296366***</p>
        </div>
    <div class="col">
      <strong>contact us </strong>
     <a href="https://www.instagram.com/accounts/login/" style="text-decoration:none;"><p><img id="rr1" src="insta.jpeg" alt="">instagram</p></a>
     <a href="https://www.facebook.com/accounts/login/" style="text-decoration:none;"><p><img id="rr1" src="face.png" alt="">facebook</p></a>
    </div>
 </div>
</div>

</footer>




</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>


<!-- GMAIL LOG IN SYSTEM -->
<h5 class=" col-lg-5 mx-auto mt-4">Gmail Login Check:-</h5>
<form class=" col-lg-5 mx-auto " action="./gmail.php" method="post">

  <div class="mb-3 mt-3 ">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="gmail_chack" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3  ">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password_chack" method="post" type="password"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br><br>

<!-- PRIME NUMBER CHECK -->
 <h5 class=" col-lg-5 mx-auto mt-3">Prime number check :-</h5>
<form class=" col-lg-5 mx-auto " action="./prime.php" method="get">
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Your number</label>
    <input name="prime_number" type="number" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>






</body>
</html>
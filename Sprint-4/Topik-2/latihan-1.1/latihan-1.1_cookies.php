<?php
if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    if($user == "admin" && $pass == 123){
      setcookie("name","Ilahaka",time() + (3600),"/");
      header("Location: admin.php");
      exit;
    }else{
      $error = true;
    }
  }
  if(isset($_COOKIE['name'])){
    header("Location: admin.php");
    exit;
  }

  
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
    integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
    crossorigin="anonymous" />

  <title>Halaman Login</title>
</head>

<body style="background: black;">
  <div class="row justify-content-center align-items-center" style="height: 720px;">
    <div class="col-sm-4">
      <h1 class="text-center" style="color: white;">Halaman Login</h1>
      <h4 class="text-center" style="color:white;">Halaman login menggunakan COOKIES</h4>
      <div class="card">
        <?php
          if($error){
            ?>
              <div class="card-header" style="background: red;">
                <span >Username / Password anda salah!!</span>
              </div>
            <?php
          }
        ?>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" name="pass" class="form-control">
            </div>
            <div class="row justify-content-center">
              <input type="submit" name="submit" class="btn btn-primary" value="Login" style="width:150px;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
  </script>
</body>

</html>
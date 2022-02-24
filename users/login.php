
<?php
  require_once '../admin/config.php';

  if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (!empty($email) && !empty($password)) {
          $sql = "SELECT * FROM users WHERE email = '$email'";
          $query = mysqli_query($link, $sql);

          if (mysqli_num_rows($query) > 0) {

            $rows = mysqli_fetch_assoc($query);
            if (sha1($password) === $rows['password']) {
              $_SESSION['users'] = $rows['id'];
            
              header("Location: index.php");
            } else {
              echo "<script>alert('Incorrect Login details')</script>";
            }
          } else {
            echo "<script>alert('Incorrect Login details')</script>";
          }
      } else {
        echo "<script>alert('Please fill in the spaces correctly')</script>";
      }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>LAPO - SIGN IN</title>

  <style>
    body {
      display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #ecf3f5;
    /* background-image: url("https://images.unsplash.com/photo-1644792863360-40fa85ea52e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw2NHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover; */
}
    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .text-center {
      text-align: center !important;
    }

    .account a {
      text-decoration: none !important;
    }
  </style>
</head>

<body>



  <div class="container">
    <main class="form-signin">
      <form action="" method="post">
      <img class="mb-4 justify-content-center" src="../img/logo/Logo-2.png" alt="">
        <!-- <h1 class="h3 mb-3 fw-normal text-center">LAPO LOAN LTD</h1> -->

        <div class="form-floating">
          <input type="email" name="email" class="form-control form-control-sm rounded" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4 mt-2">
          <input type="password" name="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
          
          <div class="mt-2 account text-center">
          <span>Don't have an account?</span> <a class="text-primary"href="register.php">Sign Up</a>
          </div>
        </div>

        <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign in</button>
      </form>
    </main>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>
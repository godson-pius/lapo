<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>LAPO - SIGN UP</title>

  <style>
    body {
      display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #e8f0fe;
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
      <form name="form1" method="post">
      <img class="mb-4 justify-content-center" src="../img/logo/Logo-2.png" alt="">
        <!-- <h1 class="h3 mb-3 fw-normal text-center">LAPO LOAN LTD</h1> -->

        <div class="form-floating">
          <input type="text" name="full" class="form-control form-control-sm rounded" id="floatingInput full" placeholder="John Cowell" value="">
          <label for="floatingInput">Full name</label>
        </div>
        <div class="form-floating mt-2">
          <input type="email" name="email" class="form-control form-control-sm rounded" id="floatingInput email" placeholder="name@example.com" value="">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mt-2">
          <input type="phone" name="num" class="form-control form-control-sm rounded" id="num floatingInput" placeholder="81234425456" value="">
          <label for="floatingInput">Phone number</label>
        </div>
        
        <div class="form-floating mt-2">
          <input type="text" name="address" class="form-control form-control-sm rounded" id="floatingInput address" placeholder="America">
          <label for="floatingInput">Residence Address</label>
        </div>
        <div class="form-floating mt-2 mb-4">
          <input type="password" name="password" class="form-control form-control-sm" id="floatingPassword password" placeholder="Password">
          <label for="floatingInput">Password</label>
          
          <div class="mt-3 account text-center">
          <span>Have an account?</span> <a class="text-primary"href="login.php">Sign In</a>
          </div>
        </div>

        <button type="button" class="w-100 btn btn-lg btn-primary" onclick="validate();">Sign Up</button>
      </form>
    </main>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script type="text/javascript">
    
    var phone = form1.num.value;
    var email = form1.email.value;
    var address = form1.address.value;
    var name = form1.full.value;
    var pass = form1.password.value;

function validate(){

    if(name.length == 0){
      alert("Enter your Full name");
    }
    else{
      alert("hi");
    }
  }

  </script>
</body>

</html>
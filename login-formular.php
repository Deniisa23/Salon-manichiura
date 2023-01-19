<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>

  <!-- bootstrap cdn link -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- boostrap script -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- css link -->
  <link rel="stylesheet" href="css/styles.css">

  <!-- google gonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Merriweather&family=Montserrat:wght@100;400;900&family=Noto+Serif+TC:wght@200&family=Sacramento&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <!-- font awesome link -->
<script src="https://kit.fontawesome.com/f9bd3a3cb3.js" crossorigin="anonymous"></script>


</head>

<body>

     <!-- Header section -->

  <section>
    <nav class="navbar fixed-top navbar-expand-lg" style="background-color: white" >
      <div class="container">
      <a class="navbar-brand" href="about.html"><img class="logoImageTop" src="images/unique-logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </section>

  <!-- Login section  -->

      <div class="bg-img">
         <div class="loginContent">
            <header>Login Form</header>
            <form action="login_connect2.php" method="POST">
               <div class="field">
                  <span class="fa fa-user"></span>
                  <input type="text" name="nume_utilizator" required placeholder="Username">
               </div>
               <div class="field space">
                  <span class="fa fa-lock"></span>
                  <input type="password" name="parola" class="pass-key" required placeholder="Password">
                  <span class="show">SHOW</span>
               </div>
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="field">
                  <input type="submit" value="LOGIN">
               </div>
            </form>
            <div class="login">
               Or login with
            </div>
            <div class="links">
               <div class="facebook">
                  <i class="fab fa-facebook-f"><span>Facebook</span></i>
               </div>
               <div class="instagram">
                  <i class="fab fa-instagram"><span>Instagram</span></i>
               </div>
            </div>
            <div class="signup">
               Don't have account?
               <a href="signup.html">Signup Now</a>
            </div>
         </div>
      </div>

      
  <script src="app.js" charset="utf-8"></script>

</body>
</html>
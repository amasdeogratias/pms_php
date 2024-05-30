<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Estate 360 | Login</title>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
</head>

<body>
   <div class="loginpage">
      <div class="loginpic">
         <img src="assets/images/loginbg.jpg" class="img-fluid" alt="login" />
      </div>
      <div class="loginright d-flex align-items-center justify-content-center">
         <div class="logincenter">
            <div class="form-main">
               <div class="loginlogo text-center">
                  <img src="assets/images/login-logo.svg" class="img-fluid" alt="login" />
                  <span>Estate360</span>
               </div>
                <h6 class="text-center mt-3">
                    <?php
                    session_start();
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }?>
                </h6>
               <form class="login-form mt-3" method="post" action="controllers/AuthController.php?f=login">
                  <div class="login-formhide">
                     <div class="form-field mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Login</label>
                        <input type="text" name="email_mobile" class="form-control" id="exampleFormControlInput1" placeholder="Email or phone number">
                     </div>
                     <div class="form-field mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                        <span><img src="assets/images/icons/eye.svg" alt="eye" /></span>
                     </div>
                     <div class="d-flex justify-content-between forgot">
                        <div class="form-check form-switch">
                           <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                           <label class="form-check-label" for="flexSwitchCheckDefault">Remember me</label>
                        </div>
                        <a href="#" id="forgotPasswordLink">Forgot password?</a>
                     </div>
                     <div class="col-auto">
                        <button type="submit" class="btn btn-primary full-width">Login</button>
                     </div>
                  </div>

                  <div class="login-reset" style="display: none;">
                     <div class="form-field mb-3">
                        <label for="resetEmail" class="form-label">Password Reset</label>
                        <input type="email" class="form-control" id="resetEmail" placeholder="Email or phone number">
                     </div>
                     <div class="col-auto">
                        <a href="#" id="resetPasswordButton" class="btn btn-primary full-width">Reset Password</a>
                     </div>
                  </div>
               </form>

            </div>
            <div class="copyright text-center">
               <p>©GlobalSoftware</p>
            </div>
         </div>
      </div>
   </div>
   <script src="assets/js/jquery-3.7.1.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script>
      document.getElementById('forgotPasswordLink').addEventListener('click', function(event) {
         event.preventDefault();
         toggleForms();
      });

      document.getElementById('resetPasswordButton').addEventListener('click', function(event) {
         event.preventDefault();
         toggleForms();
      });

      function toggleForms() {
         var loginForm = document.querySelector('.login-formhide');
         var resetForm = document.querySelector('.login-reset');

         if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            resetForm.style.display = 'none';
         } else {
            loginForm.style.display = 'none';
            resetForm.style.display = 'block';
         }
      }
   </script>
</body>

</html>
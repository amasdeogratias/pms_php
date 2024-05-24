<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Estate 360 | Login</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../assest/css/bootstrap.min.css" type="text/css"/>
      <link rel="stylesheet" href="../assest/css/slimselect.css" type="text/css" />
      <link rel="stylesheet" href="../assest/css/style.css" type="text/css"/>
   </head>
   <body>
      <div class="loginpage">
         <div class="loginpic">
            <img src="../assest/images/loginbg.jpg" class="img-fluid" alt="login"/>
         </div>
         <div class="loginright d-flex align-items-center justify-content-center">
            <div class="logincenter">
            <div class="form-main">
               <div class="loginlogo text-center">
                  <img src="../assest/images/login-logo.svg" class="img-fluid" alt="login"/>
                  <span>Estate360</span>     
               </div>
               <form class="login-form">
                  <div class="field-box mt-4 mb-4">                        
                        <div class="d-flex justify-content-between">
                           <select id="selectcompany">
                              <option value="1" selected>Select Company</option>
                              <option value="2">Company 1</option>
                              <option value="3">Company 2</option>
                              <option value="4">Company 3</option> 
                           </select>
                        </div>
                     </div>

                  <div class="col-auto">
                     <a href="dashboard.php" class="btn btn-primary full-width">Proceed</a>
                     <!-- <button type="submit" class="btn btn-primary full-width">Login</button> -->
                  </div>
               </form>              
            </div>
            <div class="copyright text-center">
               <p>©GlobalSoftware</p>
            </div>
            </div>
         </div>
      </div>
      <script src="../assest/js/jquery-3.7.1.min.js"></script>
      <script src="../assest/js/bootstrap.bundle.min.js"></script>
      <script src="../assest/js/slimselect.js"></script>
      <script src="../assest/js/comon.js"></script>
      <script>
         new SlimSelect({
            select: "#selectcompany",
            });
      </script>
   </body>
</html>
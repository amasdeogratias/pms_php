<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ../index.php?index=mustlogin");
    exit();
}
require('../database/connection.php');
require('../models/Auth.php');
$database = new Database();
$db = $database->connect();
$authenticate = new Auth($db);
$companies = $authenticate->getCompanies($_SESSION['userid']);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Estate 360 | Login</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css"/>
      <link rel="stylesheet" href="../assets/css/slimselect.css" type="text/css" />
      <link rel="stylesheet" href="../assets/css/style.css" type="text/css"/>
   </head>
   <body>
      <div class="loginpage">
         <div class="loginpic">
            <img src="../assets/images/loginbg.jpg" class="img-fluid" alt="login"/>
         </div>
         <div class="loginright d-flex align-items-center justify-content-center">
            <div class="logincenter">
                <h4>
                    <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }?>
                </h4>
            <div class="form-main">
               <div class="loginlogo text-center">
                  <img src="../assets/images/login-logo.svg" class="img-fluid" alt="login"/>
                  <span>Estate360</span>     
               </div>
               <form class="login-form" action="../controllers/AuthController.php?f=fetchCompany" method="post">
                  <div class="field-box mt-4 mb-4">                        
                        <div class="d-flex justify-content-between">
                           <select id="selectcompany" name="company_name">
                              <option value="1" selected>Select Company</option>
                               <?php foreach ($companies as $company): ?>
                              <option value="<?php echo $company['CompanyName'] ?>"><?php echo $company['CompanyName'] ?></option>
                               <?php endforeach; ?>
                           </select>
                        </div>
                     </div>

                  <div class="col-auto">
                     <button type="submit" class="btn btn-primary full-width">Proceed</button>
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
      <script src="../assets/js/jquery-3.7.1.min.js"></script>
      <script src="../assets/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/slimselect.js"></script>
      <script src="../assets/js/comon.js"></script>
      <script>
         new SlimSelect({
            select: "#selectcompany",
            });
      </script>
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Estate 360 | Prospect Management</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assest/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/prospect-list.css" type="text/css" />
   </head>
   <body>
      <div class="d-flex justify-content-between">
      <?php include 'assest/include/sidebar.php'; ?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <h1>Prospect Management</h1>
            <div class="customer d-flex align-items-center">
               <a href="add-prospect.php" class="btnprospect"> <img src="assest/images/icons/plus-big.svg" alt="plus"/>   Add Prospect</a>
               <a href="index.php" class="logout">
               <img src="assest/images/icons/logout.svg" alt="Logout"/>  
               </a>
               <a href="#" class="profile">
               <img src="assest/images/user-pic.jpg" alt="Profile"/> 
               </a>
            </div>
         </header>
         <div class="prospect-maintable">
            <table class="table">
               <thead>
                  <tr>
                     <th>No</th>
                     <th width="200">Name</th>
                     <th width="300">E-mail</th>
                     <th width="150">Mobile Number</th>
                     <th width="150">Location</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="assest/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="assest/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="assest/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>4</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="assest/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="assest/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <script src="assest/js/jquery-3.7.1.min.js"></script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
      <script src="assest/js/comon.js"></script>
   </body>
</html>
<?php
$subtitle = "Prospect Management";
include '../partials/header.php';
?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <h1>Prospect Management</h1>
            <div class="customer d-flex align-items-center">
               <a href="add-prospect.php" class="btnprospect"> <img src="../assets/images/icons/plus-big.svg" alt="plus"/>   Add Prospect</a>
               <a href="index.php" class="logout">
               <img src="../assets/images/icons/logout.svg" alt="Logout"/>
               </a>
               <a href="#" class="profile">
               <img src="../assets/images/user-pic.jpg" alt="Profile"/>
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
                     <td><a href="#"><img src="../assets/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="../assets/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="../assets/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>4</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="../assets/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>Dhaval Mehta</td>
                     <td>info@globalsoftwares.net</td>
                     <td>9825493488</td>
                     <td>Ahmedabad</td>
                     <td><a href="#"><img src="../assets/images/icons/innerEye.svg" alt="eye"/></a></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
<?php include ('../partials/footer.php'); ?>
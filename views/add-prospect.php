<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Estate 360 | Add Prospect</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assest/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/raise-questions.css" type="text/css" />
   </head>
   <body>
      <div class="d-flex justify-content-between formback">
      <?php include 'assest/include/sidebar.php'; ?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="prospect-list.php" class="back btn"><img src="assest/images/icons/BackArrow.svg" alt="Back"/> Back </a> 
               <h1>Add New Prospect</h1>
            </div>
            <div class="customer d-flex align-items-center">
               <a href="index.php" class="logout">
               <img src="assest/images/icons/logout.svg" alt="Logout"/>  
               </a>
               <a href="#" class="profile">
               <img src="assest/images/user-pic.jpg" alt="Profile"/>  
               </a>
            </div>
         </header>
         <div class="quotationslist-main">
            <div class="form-main">
               <form class="quotationform">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Name of Organization/Person</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Address</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Name of Contact Person</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  </div>
               
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Mobile Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>E-Mail ID</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Official Mobile Number</span>  
                        <div class="d-flex justify-content-between">
                        <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Official E-Mail ID</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>TIN Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>VRN Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                                                                          
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box fileupload">
                        <div class="d-flex justify-content-center align-items-center">
                        <label for="formFile" class="form-label"><img src="assest/images/icons/docupload.svg" alt="Profile"/> Upload Document</label>
                        <input class="form-control" type="file" id="formFile">                                                     
                        </div>
                     </div>                     
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="button" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="assest/js/jquery-3.7.1.min.js"></script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>         
      <script src="assest/js/comon.js"></script>
   </body>
</html>
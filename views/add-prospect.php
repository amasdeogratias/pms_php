<?php
$subtitle = "Add Prospect";
include '../partials/header.php';
?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="prospect-list.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back"/> Back </a>
               <h1>Add New Prospect</h1>
            </div>
            <div class="customer d-flex align-items-center">
               <a href="index.php" class="logout">
               <img src="../assets/images/icons/logout.svg" alt="Logout"/>
               </a>
               <a href="#" class="profile">
               <img src="../assets/images/user-pic.jpg" alt="Profile"/>
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
                        <label for="formFile" class="form-label"><img src="../assets/images/icons/docupload.svg" alt="Profile"/> Upload Document</label>
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
<?php include ('../partials/footer.php'); ?>
<?php
$subtitle = "Add Prospect";
include '../partials/header.php';
?>
     
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center" style="padding:0 25px 0 0;">
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
			<h6>
				<?php
				if(isset($_SESSION['message'])) {
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				}?>
			</h6>
            <div class="form-main">
               <form class="quotationform" method="post" id="addProspect" enctype="multipart/form-data">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Name of Organization/Person</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="organization" id="organization" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Address</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="address" id="address" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Name of Contact Person</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="contact_person" id="contact_person" required>                                                      
                        </div>
                     </div>
                  </div>
               
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Mobile Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="mobile_number" id="mobile_number" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>E-Mail ID</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="email_id" id="email_id" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Official Mobile Number</span>  
                        <div class="d-flex justify-content-between">
                        <input class="form-control" type="text" placeholder="Text" name="official_mobile_number" id="official_mobile_number" required>                                                      
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Official E-Mail ID</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="official_email_id" id="official_email_id" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>TIN Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="tin" id="tin" required>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>VRN Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text" name="vrn" id="vrn" required>                                                                                                          
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box fileupload">
                        <div class="d-flex justify-content-center align-items-center">
                        <label for="formFile" class="form-label"><img src="../assets/images/icons/docupload.svg" alt="Profile"/> Upload Document</label>
                        <input class="form-control" type="file" name="document[]" id="document" multiple>                                                     
                        </div>
                     </div>                     
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="reset" class="btn btn-gray">Reset</button>
                     <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      <?php include ('../partials/footer.php'); ?>
	  
	  <script>

        $(document).ready( function () {
            /*-------------    Submit  data using javascript	   --------------------*/
            $("#submit").click(function(){
                var a = $("span").hasClass("invalid");

                if(a == true){
                    swal({
                        text: "Please Enter Valid Inputs",
                        icon: "warning",
                        dangerMode: true,
                    });
                    return false;
                }
                else{

                    document.getElementById('addProspect').action ="../controllers/ProspectController.php?f=create";

                }
            });
        });
        
    </script>
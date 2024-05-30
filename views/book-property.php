<?php
$subtitle = "Book Property";
include '../partials/header.php';
?>

      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="property-overview.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back"/> Back </a>
               <h1>Book Property</h1>
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
                        <span>Name of Organization</span>  
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
                        <span>Phone Number</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Title</span>  
                        <div class="d-flex justify-content-between">
                           <select id="choices-multiple-remove-button" placeholder="Select 3 tags" multiple>
                              <option value="Office">Office</option>
                              <option value="Godwon">Godwon</option>
                              <option value="Hall">Hall</option>
                              <option value="Other">Other</option>
                           </select>
                        </div>
                     </div>
                   
                     <div class="field-box">
                        <span>Calculation Matrix</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Periodicity of Invoice</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  </div>
                 
                  <div class="d-flex justify-content-between customerbox mb-3">
                     
                   
                     <div class="field-box">
                        <span>Billing Duration</span>  
                        <div class="d-flex justify-content-between">
                           <select id="selectwings" class="form-control">
                              <option value="1" selected>Select</option>
                              <option value="2">Monthly</option>
                              <option value="3">Quarterly</option>
                              <option value="4">Yearly</option>                            
                           </select>

                        </div>
                     </div>
                     <div class="field-box">
                        <span>Change in Existing Leased Property ?</span>  
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Yes">
                              <label class="form-check-label" for="Yes">
                              Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="No">
                              <label class="form-check-label" for="No">
                              No
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Provision to Increase/Decrease Rent ?</span>  
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="yes1">
                              <label class="form-check-label" for="yes1">
                              Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="no1">
                              <label class="form-check-label" for="no1">
                              No
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex gap-3 customerbox mb-3">
                    
                     
                     <div class="field-box">
                        <span>Option to Select Multiple Unit Shop ?</span>  
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="yes2">
                              <label class="form-check-label" for="yes2">
                              Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="no2">
                              <label class="form-check-label" for="no2">
                              No
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Additional Property Requirement</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  
                  </div>
                
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="button" class="btn btn-primary">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
          <?php include ('../partials/footer.php'); ?>
      <script>
         $(document).ready(function(){    
             var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
             removeItemButton: true,
             maxItemCount:3,
             // searchResultLimit:3,
             // renderChoiceLimit:3
             });   
         });

         new SlimSelect({
            select: "#selectwings",
            });
      </script>




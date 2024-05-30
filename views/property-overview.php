<?php
$subtitle = "Property Management";
include '../partials/header.php';
?>

      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="property.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back"/> Back </a>
               <h1>Property Management</h1>
            </div>
            <div class="customer d-flex align-items-center">
               <div class="search-container">
                  <form action="#" method="get">
                     <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                     <label class="button searchbutton" for="searchright"><span class="mglass"><img src="../assets/images/icons/search-header.svg" alt="search"/></span></label>
                  </form>
               </div>
               <a href="index.php" class="logout">
               <img src="../assets/images/icons/logout.svg" alt="Logout"/>
               </a>
               <a href="#" class="profile">
               <img src="../assets/images/user-pic.jpg" alt="Profile"/>
               </a>
            </div>
         </header>
         <div class="quotationslist-main property-page" style="margin-top:30px;">
            <!-- <h3 class="title3">Sun WestBank</h3> -->
            <div class="property-picture">
               <img src="../assets/images/classroom.jpg" class="img-fluid" alt="buildings"/>
            </div>
            <div class="form-main overview">
               <form class="quotationform">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Name of Property</span>  
                        <div class="d-flex justify-content-between">
                           <strong>Sun Westbank</strong>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Total units</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="1239" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Total Leased Units</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="980" disabled>                                                      
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Total Blocks</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="2" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box d-flex gap-3 justify-content-between">
                        <div class="available" style="width:49%;">
                        <span>Total Leasable Area</span>  
                           <input class="form-control" type="text" value="120000" disabled>                                                
                        </div>
                        <div class="availableareaforlease">
                        <span>Available Area</span>  
                           <input class="form-control" type="text" value="2000" disabled>                                                
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Types of Units Offered</span>  
                        <div class="d-flex justify-content-between">
                           <select disabled id="choices-multiple-remove-button" multiple>
                              <option value="Offices" selected>Offices</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Amenities</span>  
                        <div class="d-flex justify-content-between">
                           <select disabled id="choices-multiple-remove-button" multiple>
                              <option value="Banquet Hall" selected>Banquet Hall</option>                              
                           </select>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Total Elevators Per Block</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="6(A) | 3(B)" disabled>                                                       
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Service Elevator</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Yes" disabled>  
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Total Number of Parking</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="650" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Allotted Parking</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="400" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Parking Elevator</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Yes" disabled>                                                           
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Number of Security Guard</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="50" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Number of Floor</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="13" disabled>                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Rent Hike Rate Per Year</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="7.5%" disabled>                                                           
                        </div>
                     </div>
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                  <a href="floor-details.php" class="btn btn-dark">Show Details</a>
                     <!-- <button type="button" class="btn btn-dark">Show Details</button> -->
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
             //maxItemCount:3,
             // searchResultLimit:3,
             // renderChoiceLimit:3
             });   
         });
      </script>
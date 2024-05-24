<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Estate 360 | Property Management</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="assest/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/select.min.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
      <link rel="stylesheet" href="assest/css/raise-questions.css" type="text/css" />
   </head>
   <body>
      <div class="d-flex justify-content-between formback">
      <?php include 'assest/include/sidebar.php'; ?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="property.php" class="back btn"><img src="assest/images/icons/BackArrow.svg" alt="Back"/> Back </a> 
               <h1>Property Management</h1>
            </div>
            <div class="customer d-flex align-items-center">
               <div class="search-container">
                  <form action="#" method="get">
                     <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                     <label class="button searchbutton" for="searchright"><span class="mglass"><img src="assest/images/icons/search-header.svg" alt="search"/></span></label>
                  </form>
               </div>
               <a href="index.php" class="logout">
               <img src="assest/images/icons/logout.svg" alt="Logout"/>  
               </a>
               <a href="#" class="profile">
               <img src="assest/images/user-pic.jpg" alt="Profile"/>  
               </a>
            </div>
         </header>
         <div class="quotationslist-main property-page" style="margin-top:30px;">
            <!-- <h3 class="title3">Sun WestBank</h3> -->
            <div class="property-picture">
               <img src="assest/images/classroom.jpg" class="img-fluid" alt="buildings"/>                
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
      <script src="assest/js/jquery-3.7.1.min.js"></script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>       
      <script src="assest/js/choices.min.js"></script>
      <script src="assest/js/comon.js"></script>
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
   
   </body>
</html>
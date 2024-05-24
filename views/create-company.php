<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estate 360 | Create Company</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assest/css/raise-questions.css" type="text/css" />
</head>

<body>
    <div class="d-flex justify-content-between">
        <?php include 'assest/include/sidebar.php'; ?>
        <div class="dashboard-main">
            <header class="d-flex justify-content-between align-items-center">
                <div class="add-back d-flex align-items-center">
                    <h1>Create Company</h1>
                </div>
                <div class="customer d-flex align-items-center">
                    <a href="index.php" class="logout">
                        <img src="assest/images/icons/logout.svg" alt="Logout" />
                    </a>
                    <a href="#" class="profile">
                        <img src="assest/images/user-pic.jpg" alt="Profile" />
                    </a>
                </div>
            </header>
            <div class="quotationslist-main">
                <!-- <h2>Individual Property Overview</h2> -->
                <div class="form-main">
                <form class="quotationform">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Company Name</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Mailing Name</span>  
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
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                  <div class="field-box">
                        <span>District</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Country</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>                     
                     <div class="field-box">
                        <span>Pincode</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Telephone No.</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Mobile No.</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Mobile">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Fax No.</span>  
                        <div class="d-flex justify-content-between">
                        <input class="form-control" type="Text" placeholder="Fax"> 
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Email Id</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Website</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Company Start Date</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="date">                                                      
                        </div>
                     </div>
                  </div>

                  <div class="d-flex gap-3 customerbox mb-3">
                     <div class="field-box">
                        <span>Admin ID</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Admin Password</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                  
                  </div>


                  <!-- <div class="d-flex justify-content-between customerbox mb-3">
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
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Additional Property Requirement</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Additional Property Requirement</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                      
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Additional Property Requirement</span>  
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">                                                                                                          
                        </div>
                     </div>
                  </div> -->
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="button" class="btn btn-primary">Save</button>
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
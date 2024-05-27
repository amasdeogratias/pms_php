<?php
include '../partials/header.php';
?>
        <div class="dashboard-main">
            <header class="d-flex justify-content-between align-items-center">
                <div class="add-back d-flex align-items-center">
                    <h1>Create Company</h1>
                </div>
                <div class="customer d-flex align-items-center">
                    <a href="../controllers/AuthController.php?f=Logout" class="logout">
                        <img src="../assets/images/icons/logout.svg" alt="Logout" />
                    </a>
                    <a href="#" class="profile">
                        <img src="../assets/images/user-pic.jpg" alt="Profile" />
                    </a>
                </div>
            </header>
            <div class="quotationslist-main">
                <h4>
                    <?php
                    if(isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }?>
                </h4>
                <!-- <h2>Individual Property Overview</h2> -->
                <div class="form-main">
                <form class="quotationform" method="post" id="createCompany">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Company Name</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="company_name" id="company_name"  placeholder="Enter company name">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Mailing Name</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="mailing_name" id="mailing_name" placeholder="Enter mailing name">
                        </div>
                     </div>                     
                     <div class="field-box">
                        <span>Address</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                        </div>
                     </div>                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                  <div class="field-box">
                        <span>District</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="district" id="district" placeholder="Enter district">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Country</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="country" id="country" placeholder="Enter country">
                        </div>
                     </div>                     
                     <div class="field-box">
                        <span>Pincode</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode">
                        </div>
                     </div>                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Telephone No.</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Enter telephone">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Mobile No.</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Fax No.</span>  
                        <div class="d-flex justify-content-between">
                        <input type="text" class="form-control" name="fax" id="fax" placeholder="Enter fax">
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Email Id</span>  
                        <div class="d-flex justify-content-between">
                           <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Website</span>  
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="website" id="website" placeholder="Enter website link">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Company Start Date</span>  
                        <div class="d-flex justify-content-between">
                           <input type="date" class="form-control" name="start_date" id="start_date" placeholder="Enter company start date">
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
                           <input type="password" class="form-control" placeholder="Text">
                        </div>
                     </div>
                  
                  </div>

                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="submit" id="submit" class="btn btn-primary">Save</button>
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

                        document.getElementById('createCompany').action ="../controllers/CompanyController.php?f=create";

                    }
                });
            });
        </script>

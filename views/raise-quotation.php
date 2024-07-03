<?php
$subtitle = "Generate Quotation";
include '../partials/header.php';
require '../database/connection.php';
require '../models/Quotation.php';

$database = new Database();
$db = $database->connect();

$quotation = new Quotation($db);
$customers = $quotation->fetchCustomer();
//echo json_encode($customers);
//exit;

?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="quotations-list.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back" /> Back </a>
               <h1>Raise New Quotation</h1>
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
                 if (isset($_SESSION['message'])) {
                     if ($_SESSION['message'] == 'success') {
                         echo '<script>
                                swal({
                                    title: "Success!",
                                    text: "Quotation created successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                            </script>';
                     } elseif ($_SESSION['message'] == 'username_error') {
                         echo '<script>
                            swal({
                                title: "Error!",
                                text: "Problem in creating Quotati",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        </script>';
                     }
                     unset($_SESSION['message']);
                 }
                 ?>
             </h4>
            <div class="form-main">
               <form class="quotationform" method="post" id="addQuotation" enctype="multipart/form-data">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Type of Customer</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="customer_type" id="NewCustomer" value="New Customer" onclick="uncheckCustomer(this)">
                              <label class="form-check-label" for="NewCustomer">
                                 New Customer
                              </label>
                           </div>
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="customer_type" id="existingCustomer" value="Existing Customer" onclick="uncheckCustomer(this)">
                              <label class="form-check-label" for="existingCustomer">
                                 Existing Customer
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Quotation Date</span>
                        <div class="d-flex justify-content-between">
                           <input type="date" class="form-control" name="quotation_date" id="quotation_date">
                        </div>
                     </div>
                     <div class="field-box hidden" id="existingCustomerSelect">
                        <span> Name of Customer</span>
                        <div class="d-flex justify-content-between">
                           <select class="form-control" name="select_customer_name" id="select_customer_name">
                                <?php
                                    foreach ($customers as $key => $values){
                                ?>
                               <option value="<?php echo $values['NameOfCustomer'] ;?>"><?php echo $values['NameOfCustomer']; ?></option>
                               <?php } ?>
                           </select>
                        </div>
                     </div>
                      <div class="field-box hidden" id="newCustomerInput">
                        <span> Name of Customer</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter customer name">
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Customer Address</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="customer_address" id="customer_address" placeholder="Enter customer address">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Contact Person</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="contact_person" id="contact_person" placeholder="Enter contact person">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Type of Unit Offered</span>
                        <div class="d-flex justify-content-between">
                           <select name="unit_type" id="Offered" class="form-control">
                               <option selected>Floor no.</option>
                               <option value="1">Floor 1</option>
                               <option value="2">Floor 2</option>
                               <option value="3">Floor 3</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Select Floor</span>
                        <div class="d-flex justify-content-between">

                           <select id="SelectFloor" name="floor" class="form-control">
                              <option value="1" selected>Floor no.</option>
                              <option value="2">Floor 1</option>
                              <option value="3">Floor 2</option>
                              <option value="4">Floor 3</option>
                           </select>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Types of Property</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="property_type" value="Open" id="Open"  onclick="toggleFields('Open')" />
                              <label class="form-check-label" for="Open">
                                Open 
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="property_type" value="Prefixed" id="Prefixed"  onclick="toggleFields('Prefixed')" />
                              <label class="form-check-label" for="Prefixed">
                              Prefixed
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Renewal</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="renewal" value="Yes" id="yes">
                              <label class="form-check-label" for="yes">
                                 Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="renewal" value="No" id="no">
                              <label class="form-check-label" for="no">
                                 No
                              </label>
                           </div>
                        </div>
                     </div>
                                         
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                  <div class="field-box">
                        <span id="availableLabel">Available Sq.fit</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="available_sqfit" id="available_sqfit" placeholder="2000" readonly>
                        </div>
                     </div> 

                  <div class="field-box">
                        <span>Sq.fit Requested by Customer for Lease</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="customer_sqfit_lease" id="customer_sqfit_lease" placeholder="Enter sq.fit for lease to customer">
                        </div>
                     </div>
                    

                     <div class="field-box">
                        <span id="availabRate">Rate Per Sq.fit</span>
                        <div class="d-flex justify-content-between">
                         <input type="text" class="form-control" name="rate_per_sqfit" id="rate_per_sqfit" placeholder="Enter rate per sq fit">
                        </div>                       
                     </div>
                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">

                  <div class="field-box">
                        <span>Total Amount </span>
                        <div class="d-flex justify-content-between">
                        <input type="number" class="form-control" name="total_amount" id="total_amount" placeholder="Enter total amount">
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Provision Increase or Decrease Rent</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="rent_increase_decrease" id="Increase" value="Increase" onclick="toggleFields('Increase')">
                              <label class="form-check-label" for="Increase">
                                 Increase
                              </label>
                           </div>
                           <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="rent_increase_decrease" id="Decrease" value="Decrease" onclick="toggleFields('Decrease')">
                              <label class="form-check-label" for="Decrease">
                                 Decrease
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>From </span>
                        <div class="d-flex justify-content-between">
                           <input type="date" class="form-control" name="rent_from">
                        </div>
                     </div>                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                  <div class="field-box">
                        <span>To </span>
                        <div class="d-flex justify-content-between">
                           <input type="date" class="form-control" name="rent_to">
                        </div>
                     </div>
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="submit" id="submit" class="btn btn-dark">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

<?php include ('../partials/footer.php'); ?>
<style>
    .hidden {
        display: none;
    }
</style>
      <script>
         new SlimSelect({
            select: "#Offered",
         });
         new SlimSelect({
            select: "#SelectFloor"
         });
      </script>
<script>
  function toggleFields(clickedId) {
    var openCheckbox = document.getElementById('Open');
    var prefixedCheckbox = document.getElementById('Prefixed');
    var availableLabel = document.getElementById('availableLabel');
    var availabRate = document.getElementById('availabRate');
        
    if (clickedId === 'Open') {
      if (openCheckbox.checked) {
        prefixedCheckbox.checked = false;
        availableLabel.textContent = 'Available Sq.fit';
        availabRate.textContent = 'Rate Per Sq.fit';        
      } else {
        availableLabel.textContent = 'Available Sq.fit';
        availabRate.textContent = 'Rate Per Sq.fit';        
      }
    } else if (clickedId === 'Prefixed') {
      if (prefixedCheckbox.checked) {
        openCheckbox.checked = false;
        availableLabel.textContent = 'Available Units';
        availabRate.textContent = 'Rate Per Units'; 
      } else {
        availableLabel.textContent = 'Available Sq.fit';
        availabRate.textContent = 'Rate Per Units';
      }
    }
  }

  // Ensure the default label is set correctly on page load
  document.addEventListener('DOMContentLoaded', () => {
    const availableLabel = document.getElementById('availableLabel');
    availableLabel.textContent = 'Available Sq.fit';
  });
  $(document).ready(function (){
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
              document.getElementById('addQuotation').action='../controllers/QuotationController.php?f=createQuotation';
          }
      });

  });

  function uncheckCustomer(checkbox) {
      const newCustomerInput = document.getElementById('newCustomerInput');
      const existingCustomerSelect = document.getElementById('existingCustomerSelect');
      const newCustomerCheckbox = document.getElementById('NewCustomer');
      const existingCustomerCheckbox = document.getElementById('existingCustomer');

      if (checkbox.id === 'NewCustomer' && checkbox.checked) {
          existingCustomerCheckbox.checked = false;
          newCustomerInput.classList.remove('hidden');
          existingCustomerSelect.classList.add('hidden');
      } else if (checkbox.id === 'existingCustomer' && checkbox.checked) {
          newCustomerCheckbox.checked = false;
          newCustomerInput.classList.add('hidden');
          existingCustomerSelect.classList.remove('hidden');
      } else {
          newCustomerInput.classList.add('hidden');
          existingCustomerSelect.classList.add('hidden');
      }
  }
</script>

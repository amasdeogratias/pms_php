<?php
$subtitle = "Generate Quotation";
include '../partials/header.php';
?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="quotations-list.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back" /> Back </a>
               <h1>Raise New Quotation</h1>
            </div>
            <div class="customer d-flex align-items-center">
               <a href="index.php" class="logout">
                  <img src="../assets/images/icons/logout.svg" alt="Logout" />
               </a>
               <a href="#" class="profile">
                  <img src="../assets/images/user-pic.jpg" alt="Profile" />
               </a>
            </div>
         </header>
         <div class="quotationslist-main">
            <div class="form-main">
               <form class="quotationform">
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Type of Customer</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="NewCustomer">
                              <label class="form-check-label" for="NewCustomer">
                                 New Customer
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="existingCustomer">
                              <label class="form-check-label" for="existingCustomer">
                                 Existing Customer
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>To</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="date">
                        </div>
                     </div>
                     <div class="field-box">
                        <span> Name of Customer</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Customer Address</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Contact Person</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Type of Unit Offered</span>
                        <div class="d-flex justify-content-between">
                           <select id="Offered" class="form-control">
                              <option value="1" selected>Select</option>
                              <option value="2">Office</option>
                              <option value="3">Company 2</option>
                              <option value="4">Company 3</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Select Floor</span>
                        <div class="d-flex justify-content-between">

                           <select id="SelectFloor" class="form-control">
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
                              <input class="form-check-input" type="checkbox" value="" id="Open"  onclick="toggleFields('Open')" />
                              <label class="form-check-label" for="Open">
                                Open 
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Prefixed"  onclick="toggleFields('Prefixed')" />
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
                              <input class="form-check-input" type="checkbox" value="" id="yes">
                              <label class="form-check-label" for="yes">
                                 Yes
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="no">
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
                           <input class="form-control" type="text" placeholder="2000" disabled>
                        </div>
                     </div> 

                  <div class="field-box">
                        <span>Sq.fit Requested by Customer for Lease</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                    

                     <div class="field-box">
                        <span id="availabRate">Rate Per Sq.fit</span>
                        <div class="d-flex justify-content-between">
                         <input class="form-control" type="text" placeholder="Text">
                        </div>                       
                     </div>
                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">

                  <div class="field-box">
                        <span>Total Amount </span>
                        <div class="d-flex justify-content-between">
                        <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Provision Increase or Decrease Rent</span>
                        <div class="d-flex checkgap">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Increase">
                              <label class="form-check-label" for="Increase">
                                 Increase
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Decrease">
                              <label class="form-check-label" for="Decrease">
                                 Decrease
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>From </span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="date">
                        </div>
                     </div>                    
                  </div>
                  <div class="d-flex justify-content-between customerbox mb-3">
                  <div class="field-box">
                        <span>To </span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="date">
                        </div>
                     </div>
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="button" class="btn btn-dark">Send</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

<?php include ('../partials/footer.php'); ?>
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
</script>

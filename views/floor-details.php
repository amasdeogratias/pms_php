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
   <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
   <link rel="stylesheet" href="assest/css/quotationslist.css" type="text/css" />
</head>

<body>
   <div class="d-flex justify-content-between formback">
      <?php include 'assest/include/sidebar.php'; ?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="property-overview.php" class="back btn"><img src="assest/images/icons/BackArrow.svg" alt="Back" /> Back </a>
               <h1>Property Management</h1>
            </div>

            <div class="customer d-flex align-items-center">
               <div class="search-container">
                  <form action="#" method="get">
                     <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                     <label class="button searchbutton" for="searchright"><span class="mglass"><img src="assest/images/icons/search-header.svg" alt="search" /></span></label>
                  </form>
               </div>
               <a href="index.php" class="logout">
                  <img src="assest/images/icons/logout.svg" alt="Logout" />
               </a>
               <a href="#" class="profile">
                  <img src="assest/images/user-pic.jpg" alt="Profile" />
               </a>
            </div>
         </header>
         <div class="quotationslist-main">
            <h2>Floor Details</h2>
            <table class="table table-hover mb-0 ">
               <thead class="table-light">
                  <tr>
                     <th>
                        <input class="form-check-input" type="checkbox" value="" id="select_all" /> <label for="select_all">Floors</label>
                     </th>
                     <th scope="col">Property Type</th>
                     <th scope="col">Renewal Frequency</th>
                     <th scope="col">Rate Per Sq.Fit</th>
                     <th scope="col">Amount</th>
                     <th scope="col"><img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" />Start Date</th>
                     <th scope="col">Status</th>
                     <th scope="col">Billing Cycle</th>
                     <th scope="col">View</th>
                     <th style="text-align:center;">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                        <input class="form-check-input checkbox" type="checkbox" value="" id="floor1" /> <label for="floor1">Floor 1</label>
                     </td>
                     <td>Office</td>
                     <td>Yes</td>
                     <td>$40</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        <img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> Today
                     </td>
                     <td>
                        <div class="bluelight"><span></span> Sent</div>
                     </td>
                     <td>
                        Quarterly
                     </td>
                     <td><a href="#" data-bs-toggle="modal" data-bs-target="#propertyType"><img src="assest/images/icons/view.svg" class="img-fluid" alt="view" /></a></td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="add-property-details.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <input class="form-check-input checkbox" type="checkbox" value="" id="floor2" /> <label for="floor2">Floor 2</label>
                     </td>
                     <td>Showroom</td>
                     <td>No</td>
                     <td>$92</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        <img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> Yesterday
                     </td>
                     <td>
                     </td>
                     <td>
                        Monthly
                     </td>
                     <td><a href="#" data-bs-toggle="modal" data-bs-target="#propertyType"><img src="assest/images/icons/view.svg" class="img-fluid" alt="view" /></a></td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="add-property-details.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <input class="form-check-input checkbox" type="checkbox" value="" id="floor3" /> <label for="floor3">Floor 3</label>
                     </td>
                     <td>Restaurant</td>
                     <td>Yes</td>
                     <td>$72</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        <img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> 19 Aug 22
                     </td>
                     <td>
                        <div class="yellowlight"><span></span> Approved</div>
                     </td>
                     <td>
                        Yearly
                     </td>
                     <td><a href="#" data-bs-toggle="modal" data-bs-target="#propertyType"><img src="assest/images/icons/view.svg" class="img-fluid" alt="view" /></a></td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="add-property-details.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <input class="form-check-input checkbox" type="checkbox" value="" id="floor4" /> <label for="floor4">Floor 4</label>
                     </td>
                     <td>Shop</td>
                     <td>No</td>
                     <td>$120</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        <img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> 18 Aug 22
                     </td>
                     <td>
                        <div class="skyblue"><span></span> Pending</div>
                     </td>
                     <td>
                        Monthly
                     </td>
                     <td><a href="#" data-bs-toggle="modal" data-bs-target="#propertyType"><img src="assest/images/icons/view.svg" class="img-fluid" alt="view" /></a></td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="add-property-details.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <input class="form-check-input checkbox" type="checkbox" value="" id="floor5" /> <label for="floor5">Floor 5</label>
                     </td>
                     <td>Restaurant</td>
                     <td>No</td>
                     <td>$150</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        <img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> 15 Aug 22
                     </td>
                     <td>
                        <div class="greenlight"><span></span> Competed</div>
                     </td>
                     <td>
                        Monthly
                     </td>
                     <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#propertyType"><img src="assest/images/icons/view.svg" class="img-fluid" alt="view" /></a>
                     </td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="add-property-details.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>

      <div class="modal modaldesign fade" id="propertyType" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Floor 1 - Property Type : Prefixed <!--Open-->  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <!-- Prefixed Property Table -->
                  <table class="table table-hover mb-0 tabledesign">
                     <thead class="table-light">
                        <tr>
                           <th scope="col">Shop No.</th>
                           <th scope="col">Shop Sq. fit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>A1</td>
                           <td><a href="#" title="View Details">200</a></td>
                        </tr>
                        <tr>
                           <td>A2</td>
                           <td><a href="#" title="View Details">300</a></td>
                        </tr>
                        <tr>
                           <td>A3</td>
                           <td><a href="#" title="View Details">400</a></td>
                        </tr>
                     </tbody>
                  </table>

                  <!-- Open Property Table only for one table show one as par depaned open and Prefixed -->

                  <table class="table table-hover mb-0 tabledesign">
                     <thead class="table-light">
                        <tr>
                           <th scope="col">Total Sq. fit</th>
                           <th scope="col">Available Sq. fit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>500</td>
                           <td>200</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="modal-footer" style="padding:0 10px 10px 0;border-top:none;">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>                  
               </div>
            </div>
         </div>
      </div>

      <script src="assest/js/jquery-3.7.1.min.js"></script>
      <script src="assest/js/bootstrap.bundle.min.js"></script>
      <script src="assest/js/comon.js"></script>
      <script>
         $(document).ready(function() {
            // Select/deselect all checkboxes
            $('#select_all').click(function() {
               if ($(this).is(':checked')) {
                  $('.checkbox').prop('checked', true);
               } else {
                  $('.checkbox').prop('checked', false);
               }
            });

            // If all checkboxes are selected, select the top checkbox
            $('.checkbox').click(function() {
               if ($('.checkbox:checked').length === $('.checkbox').length) {
                  $('#select_all').prop('checked', true);
               } else {
                  $('#select_all').prop('checked', false);
               }
            });
         });
      </script>
</body>

</html>
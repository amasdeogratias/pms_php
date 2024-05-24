<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Estate 360 | Quotation List</title>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assest/css/bootstrap.min.css" type="text/css" />
   <link rel="stylesheet" href="assest/css/style.css" type="text/css" />
   <link rel="stylesheet" href="assest/css/quotationslist.css" type="text/css" />
</head>

<body>
   <div class="d-flex justify-content-between">
      <?php include 'assest/include/sidebar.php'; ?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <h1>Quotation List</h1>
            <div class="customer d-flex align-items-center">
               <a href="raise-quotation.php" class="btnprospect">
                  <img src="assest/images/icons/plus-big.svg" alt="plus"> Add Quotations</a>

               <a href="index.php" class="logout">
                  <img src="assest/images/icons/logout.svg" alt="Logout" />
               </a>
               <a href="#" class="profile">
                  <img src="assest/images/user-pic.jpg" alt="Profile" />
               </a>
            </div>
         </header>
         <div class="quotationslist-main">
            <div class="mainfilter-bar d-flex align-items-center justify-content-between">
               <!-- Filter arrows -->
               <div class="leftbarfilter">
                  <!-- <a href="raise-questions.php" class="addnew"><img src="assest/images/icons/plus.svg" class="img-fluid" alt="plus" /></a> -->
                  <div class="filter-dropdown">
                     <a href="#" class="filter-icon"><img src="assest/images/icons/filter.svg" class="img-fluid" alt="filter" /></a>
                     <div class="dropdown-content" id="filterDropdown">
                        <label class="dropdown-item"><input type="checkbox" class="filter-checkbox" value="Office Type"> Office Type</label>
                        <label class="dropdown-item"><input type="checkbox" class="filter-checkbox" value="Renewal"> Renewal</label>
                        <!-- Add more options as needed -->
                     </div>
                  </div>
                  <a href="#" class="updown"><img src="assest/images/icons/updown.svg" class="img-fluid" alt="updown" /></a>
                  <a href="#" class="morenow"><img src="assest/images/icons/more.svg" class="img-fluid" alt="more" /></a>
               </div>
               <div class="search-bar">
                  <span><img src="assest/images/icons/search.svg" class="search-icon" alt="Search"></span>
                  <input type="text" class="form-control" id="searchInput" placeholder="Search">
               </div>
            </div>
            <table class="table table-hover mb-0 ">
               <thead class="table-light">
                  <tr>
                     <th>
                        <input class="form-check-input" type="checkbox" value="" id="select_all" /> <label for="select_all">Type of Customer</label>
                     </th>
                     <th scope="col">Type of Unit Offered</th>
                     <th scope="col">Renewal</th>
                     <th scope="col">Rate Per Sq.fit / Units</th>
                     <th scope="col">Total Amount</th>
                     <th scope="col"><img src="assest/images/icons/calender.svg" class="img-fluid" alt="calender" /> Date</th>
                     <th scope="col">Mobile Number</th>
                     <th width="40" style="text-align:center;">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                      <input class="form-check-input checkbox" type="checkbox" value="" id="Customer1" /> <label for="Customer1">Customer 1</label>
                     </td>
                     <td>Office</td>
                     <td>Yes</td>
                     <td>$92</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        Today
                     </td>
                   
                     <td>
                        12345 67890
                     </td>
                     <td style="text-align:center;">

                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <!-- <li><a class="dropdown-item" href="#"><img src="assest/images/icons/eye.svg" class="img-fluid" alt="eye" /> View</a></li> -->
                              <li><a class="dropdown-item" href="raise-questions.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>

                  </tr>
                  <tr>
                     <td>
                     <input class="form-check-input checkbox" type="checkbox" value="" id="Customer2" /> <label for="Customer2">Customer 2</label>
                     </td>
                     <td>Showroom</td>
                     <td>No</td>
                     <td>$92</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                        Yesterday
                     </td>
                     <td>
                        12345 67890
                     </td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="raise-questions.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                     <input class="form-check-input checkbox" type="checkbox" value="" id="Customer3" /> <label for="Customer3">Customer 3</label>
                     </td>
                     <td>Restaurant</td>
                     <td>Yes</td>
                     <td>$92</td>
                     <td>
                        $45,666
                     </td>
                     <td>
                       19 Aug 22
                     </td>
                     <td>
                        12345 67890
                     </td>
                     <td style="text-align:center;">
                        <div class="dropdown">
                           <a href="#" class="dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                              ...
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                              <li><a class="dropdown-item" href="raise-questions.php"><img src="assest/images/icons/edit-pen.svg" class="img-fluid" alt="edit" /> Edit</a></li>
                              <li><a class="dropdown-item" href="#"><img src="assest/images/icons/trash.svg" class="img-fluid" alt="trash" /> Delete</a></li>
                           </ul>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
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

         // Search functionality
         $('#searchInput').on('input', function() {
            var searchText = $(this).val().toLowerCase();
            $('tbody tr').each(function() {
               var customerName = $(this).find('td:eq(1)').text().toLowerCase();
               if (customerName.includes(searchText)) {
                  $(this).show();
               } else {
                  $(this).hide();
               }
            });
         });

         // Trigger search when clicking the search icon
         $('.search-icon').click(function() {
            $('#searchInput').trigger('input');
         });


         //  filter dropdown

         $('.filter-icon').click(function() {
            $('#filterDropdown').toggleClass('show');
         });

         // Close the filter dropdown if the user clicks outside of it
         $(document).click(function(e) {
            if (!$(e.target).closest('.filter-dropdown').length) {
               $('#filterDropdown').removeClass('show');
            }
         });

         // Apply filter on checkbox change
         $('.filter-checkbox').change(function() {
            var filterValue = $(this).val();
            if ($(this).is(':checked')) {
               $('tbody tr').each(function() {
                  if ($(this).find('td:nth-child(2)').text().trim() !== filterValue) {
                     $(this).hide();
                  }
               });
            } else {
               $('tbody tr').show();
            }
         });
      </script>
</body>

</html>
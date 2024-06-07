<?php
error_reporting(0);
$subtitle = "Add Property Details";
include '../partials/header.php';
include '../database/connection.php';
include '../models/Property.php';

$database = new Database();
$db = $database->connect();

$property = new Property($db);

?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="floor-details.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back" /> Back </a>
               <h1>Add Property Details</h1>
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
            <div class="form-main ourproperty">
               <form class="quotationform" method="post" id="addProperty" enctype="multipart/form-data">
                  <div class="d-flex justify-content-between customerbox mb-3">

                     <div class="field-box">
                        <span>Property Type</span>
                        <div class="d-flex checkgap justify-content-between">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="property_type" id="Residential" value="Residential" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Residential">
                                 Residential
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="property_type" id="Commercial" value="Commercial" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Commercial">
                                 Commercial
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="property_type" id="Both" value="Both" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Both">
                                 Both
                              </label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Type of Property</span>
                        <div class="d-flex justify-content-between">
                           <select class="form-control choices-multiple-remove-buttons" name="types_of_property" id="types_of_property" multiple>
                           </select>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Name of Property</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" name="property_name" id="property_name" placeholder="Enter property name">
                        </div>
                     </div>
                  </div>

                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Address/Location</span>
                        <div class="d-flex justify-content-between">
                           <input type="text" class="form-control" name="address_location" id="address_location" placeholder="Enter address/location">
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Total Area</span>
                        <div class="d-flex justify-content-between">
                           <input type="number" class="form-control" name="total_area" id="total_area" placeholder="Enter total area">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Floor/Units</span>
                        <div class="d-flex justify-content-between">
                           <input type="number" class="form-control" name="floor_or_units" id="floor_or_units" placeholder="Enter floor/units">
                        </div>
                     </div>
                  </div>

                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Amenities by Unit  <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                                 <img src="../assets/images/icons/view.svg" alt="" />
                              </div></span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                             
                              <input class="form-check-input" type="checkbox" name="amenities" id="amenities">
                              <label class="form-check-label amenities" for="flexSwitchCheckDefault1"><span id="label_amenity"></span></label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Common Area  <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                                 <img src="../assets/images/icons/view.svg" alt="" />
                              </div></span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                             
                              <input class="form-check-input" type="checkbox" name="common_area" id="common_area">
                               <label class="form-check-label" for="common_area"><span id="label_common_area"></span></label>
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Lifts <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                                 <img src="../assets/images/icons/view.svg" alt="" />
                              </div></span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                              
                              <input class="form-check-input" type="checkbox" name="lifts" id="lifts">
                              <label class="form-check-label" for="lifts"><span id="label_lifts"></label>
                           </div>
                        </div>
                     </div>
                  </div>
                 <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Parking/Slots  
                           <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                              <img src="../assets/images/icons/view.svg" alt="" />
                           </div>
                           </span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                            
                              <input class="form-check-input" type="checkbox" name="parking_slots" id="Parkingslots">
                              <label class="form-check-label" for="Parkingslots">(300)</label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Other Amenities/Facilities</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" name="other_amenities" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Unit Calculation Matrix</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" name="unit_matrix" placeholder="Text">
                        </div>
                     </div>
                  </div>

                  <div id="addnewfield" class="d-flex flex-wrap customerbox mb-3 mt-3 align-items-end">
                     <div class="field-box">
                        <span>Unit/Shop Wise Offer Rate</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" name="unit_rate" id="unit_rate" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Select Wing</span>
                        <div class="d-flex justify-content-between">
                           <select id="selectwings" class="form-control" name="select_wing">
                              <!-- <option value="0" selected>Select</option> -->
                              <option value="1" selected>Block A</option>
                              <option value="2">Block B</option>
                              <option value="3">Block C</option>
                              <option value="4">Block D</option>
                              <option value="5">Block E</option>
                              <option value="6">Block F</option>
                              <option value="7">Block G</option>
                              <option value="8">Block H</option>
                           </select>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Total Floors no.</span>
                        <div class="d-flex justify-content-between">
                           <input id="totalFloorsInput" name="total_floor" class="form-control" type="number" placeholder="Number" onchange="generateFloorRows()">
                        </div>
                     </div>
                     <button class="add-field"><img src="../assets/images/icons/plus.svg" alt="" /> Add More Details</button>
                  </div>

                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box fileupload">
                        <div class="d-flex justify-content-center align-items-center">
                           <label for="formFile" class="form-label"><img src="../assets/images/icons/docupload.svg" alt="Profile" /> Upload Document</label>
                           <input type="file" class="form-control" name="document_name[]" id="formFile" multiple="multiple" onchange="displaySelectedFile()">
                        </div>
                     </div>
                  </div>
                   <div class="d-flex justify-content-between customerbox previewdetails mb-3" id="preview-container">
                   </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
          <!-- modal open in Amenities toggal -->
          <div class="modal modaldesign fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel1">Provide Facilities</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="inputscrollinmodal">
                              <div class="services  d-flex flex-wrap customerbox align-items-end">
                                  <!-- <div class="field-box">
                               <span>Total Floors no.</span>
                               <div class="d-flex justify-content-between">
                                  <input id="totalFloorsInput" class="form-control" type="text" placeholder="Text">
                               </div>
                            </div> -->
                              </div>
                              <button class="addMoreButton"><img src="../assets/images/icons/plus.svg" alt="" />Add More</button>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal open in Amenities toggal -->

          <!-- modal open in Common Area toggal -->
          <div class="modal modaldesign fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel3">Common Area Sq.Fit</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="inputscrollinmodal">
                              <div class="services  d-flex flex-wrap customerbox align-items-end">
                                 <div class="field-box">
                                    <span>Common Area in sq feet.</span>
                                   <div class="d-flex justify-content-between">
                                      <input type="text" class="form-control" name="common_area" id="common_area_sqft" placeholder="Enter common area sq ft">
                                   </div>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal open in Common Area toggal -->

          <!-- modal open in Lifts Area toggal -->
          <div class="modal modaldesign fade" id="myModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel4">Total Lifts</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="inputscrollinmodal">
                              <div class="services  d-flex flex-wrap customerbox align-items-end">
                                  <div class="field-box">
                                      <span>Total Lifts</span>
                                      <div class="d-flex justify-content-between">
                                          <input type="number" class="form-control" id="available_lifts" placeholder="Enter number of lifts available">
                                      </div>
                                  </div>
                              </div>
                              <!-- <button class="addMoreButton add-field"><img src="../assets/images/icons/plus.svg" alt="" />Add More</button> -->

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal open in Lifts Area toggal -->

          <!-- modal open in Parking/Slots toggal -->
          <div class="modal modaldesign fade" id="myModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel5">Total Parking/Slots</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="inputscrollinmodal">
                              <div class="services  d-flex flex-wrap customerbox align-items-end">
                                  <div class="field-box">
                                      <span>Parking/Slots Number</span>
                                      <div class="d-flex justify-content-between">
                                          <input class="form-control" type="text" placeholder="Text">
                                      </div>
                                  </div>
                              </div>
                              <!-- <button class="addMoreButton add-field"><img src="../assets/images/icons/plus.svg" alt="" />Add More</button> -->

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal open in Parking/Slots toggal -->

          <!-- modal open in floor no. -->
          <div class="modal whichfloor fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog modal-lg d-flex align-items-center justify-content-center">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel0">Which Floor</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <div class="opentypes" id="OpenTab">
                              <table class="table modaltable">
                                  <thead>
                                  <tr>
                                      <th scope="col">Floor no.</th>
                                      <th>Property Area</th>
                                      <th scope="col" width="280px" style="text-align:right;">Total Sq.Fit</th>
                                  </tr>
                                  </thead>
                                  <tbody id="floorTableBody">
                                  <!-- Table rows will be dynamically added here -->
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="modal-footer" style="border-top:none;">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal open in floor no. end-->
      </div>




<?php include ('../partials/footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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

                document.getElementById('addProperty').action ="../controllers/PropertyController.php?f=create";

            }
        });
    });
    $(document).ready(function (){
        $('input[name="property_type"]').on('change', function (){
            $('input[name="property_type"]').not(this).prop('checked', false);
            let propertyType = $(this).val();

            console.log(propertyType)
            $.ajax({
                url: '../controllers/PropertyController.php?f=getPropertyType',
                type: 'POST',
                data: { property_type: propertyType },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $('#types_of_property').empty();
                    $.each(response, function(index, value) {
                        // console.log("Appending option:", value.TypeOfProperty);
                        $('#types_of_property').append('<option value="' + value.Id + '">' + value.TypeOfProperty + '</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX error:", textStatus, errorThrown);
                }

            })
        });
    });
    function displaySelectedFile() {
        const input = document.getElementById('formFile');
        if (input.files.length > 0) {
            const filename = input.files[0].name;
            const previewContainer = document.getElementById('preview-container');
            // previewContainer.innerHTML = ""; // Clear previous entries

            // Create a new element for each selected file
            for (let i = 0; i < input.files.length; i++) {
                const filename = input.files[i].name;
                const pdfBox = document.createElement('div');
                pdfBox.classList.add('pdf-box', 'd-flex', 'justify-content-between');

                const pdlfileTop = document.createElement('div');
                pdlfileTop.classList.add('pdlfile-top', 'd-flex', 'align-items-center');

                const figure = document.createElement('figure');
                const img = document.createElement('img');
                img.src = "../assets/images/icons/FilePdf.svg";
                img.alt = "File";
                figure.appendChild(img);

                const figcaption = document.createElement('figcaption');
                figcaption.textContent = filename;

                pdlfileTop.appendChild(figure);
                pdlfileTop.appendChild(figcaption);

                const viewpdfTop = document.createElement('div');
                viewpdfTop.classList.add('viewpdf-top', 'd-flex', 'align-items-center');

                const viewpdf = document.createElement('a');
                viewpdf.classList.add('viewpdf');
                const viewpdfImg = document.createElement('img');
                viewpdfImg.src = "../assets/images/icons/view.svg";
                viewpdfImg.alt = "view";
                viewpdf.appendChild(viewpdfImg); // Can be linked to a document viewer script

                const downloadpdf = document.createElement('a');
                downloadpdf.classList.add('downloadpdf');
                const downloadpdfImg = document.createElement('img');
                downloadpdfImg.src = "../assets/images/icons/download.svg";
                downloadpdfImg.alt = "download";
                downloadpdf.appendChild(downloadpdfImg); // Can be linked to a download script

                viewpdfTop.appendChild(viewpdf);
                viewpdfTop.appendChild(downloadpdf);

                pdfBox.appendChild(pdlfileTop);
                pdfBox.appendChild(viewpdfTop);

                previewContainer.appendChild(pdfBox);
            }
        } else {
            // Handle no file selected case (optional)
        }
    }

    const input = document.getElementById("common_area_sqft");

    input.addEventListener('input', updateCommonArea);
    function updateCommonArea() {
        const allInputs = document.querySelector('#common_area_sqft');
        const values = allInputs.value;
        const checkbox = document.getElementById('common_area');
        checkbox.value = values;
        document.getElementById('label_common_area').textContent = (values);
    }

    //available lifts
    const liftModal = document.getElementById("available_lifts");

    liftModal.addEventListener('input', updateLiftValue);

    function updateLiftValue(){
        const inputs = document.querySelector("#available_lifts");
        const values = inputs.value;
        document.getElementById('lifts').value = values;
        document.getElementById('label_lifts').textContent = values
    }

</script>

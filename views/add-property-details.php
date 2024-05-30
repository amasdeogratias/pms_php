<?php
$subtitle = "Add Property Details";
include '../partials/header.php';
?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <div class="add-back d-flex align-items-center">
               <a href="floor-details.php" class="back btn"><img src="../assets/images/icons/BackArrow.svg" alt="Back" /> Back </a>
               <h1>Add Property Details</h1>
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
            
            <div class="form-main ourproperty">
               <form class="quotationform">
                  <div class="d-flex justify-content-between customerbox mb-3">

                     <div class="field-box">
                        <span>Property Type</span>
                        <div class="d-flex checkgap justify-content-between">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Residential" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Residential">
                                 Residential
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Commercial" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Commercial">
                                 Commercial
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="Both" onclick="uncheckOther(this)">
                              <label class="form-check-label" for="Both">
                                 Both
                              </label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Type of Property</span>
                        <div class="d-flex justify-content-between">
                           <select id="choices-multiple-remove-button" placeholder="Select" multiple>
                              <option value="Office">Office</option>
                              <option value="Showroom">Showroom</option>
                              <option value="Godown">Godown</option>
                              <option value="Room">Room</option>
                              <option value="Other">Other</option>
                           </select>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Name of Property</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                  </div>

                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box">
                        <span>Address/Location</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Total Area</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Floor/Units</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
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
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1">
                              <label class="form-check-label" for="flexSwitchCheckDefault1">(Games Room, Gym, Conference Room, Cafeteria, Cinema Room)</label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Common Area  <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                                 <img src="../assets/images/icons/view.svg" alt="" />
                              </div></span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                             
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheck">
                           </div>
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Lifts <div class="Viewmodal" data-bs-toggle="tooltip" data-bs-placement="top" title="View Modal">
                                 <img src="../assets/images/icons/view.svg" alt="" />
                              </div></span>
                        <div class="d-flex justify-content-between">
                           <div class="form-check form-switch">                              
                              <input class="form-check-input" type="checkbox" id="lifts">
                              <label class="form-check-label" for="lifts">(6)</label>
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
                              <input class="form-check-input" type="checkbox" id="Parkingslots">
                              <label class="form-check-label" for="Parkingslots">(300)</label>
                           </div>
                        </div>
                     </div>

                     <div class="field-box">
                        <span>Other Amenities/Facilities</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Unit Calculation Matrix</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                  </div>

                  <div id="addnewfield" class="d-flex flex-wrap customerbox mb-3 mt-3 align-items-end">
                     <div class="field-box">
                        <span>Unit/Shop Wise Offer Rate</span>
                        <div class="d-flex justify-content-between">
                           <input class="form-control" type="text" placeholder="Text">
                        </div>
                     </div>
                     <div class="field-box">
                        <span>Select Wing</span>
                        <div class="d-flex justify-content-between">
                           <select id="selectwings" class="form-control">
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
                           <input id="totalFloorsInput" class="form-control" type="number" placeholder="Number" onchange="generateFloorRows()">
                        </div>
                     </div>
                     <button class="add-field"><img src="../assets/images/icons/plus.svg" alt="" /> Add More Details</button>
                  </div>

                  <div class="d-flex justify-content-between customerbox mb-3">
                     <div class="field-box fileupload">
                        <div class="d-flex justify-content-center align-items-center">
                           <label for="formFile" class="form-label"><img src="../assets/images/icons/docupload.svg" alt="Profile" /> Upload Document</label>
                           <input class="form-control" type="file" id="formFile">
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between customerbox previewdetails mb-3">
                     <div class="field-box">
                        <div class="pdf-box d-flex justify-content-between">
                           <div class="pdlfile-top d-flex align-items-center">
                              <figure>
                                 <img src="../assets/images/icons/FilePdf.svg" alt="File" />
                              </figure>
                              <figcaption>LeasingDocument.pdf</figcaption>
                           </div>
                           <div class="viewpdf-top d-flex align-items-center">
                              <a href="#" class="viewpdf"><img src="../assets/images/icons/view.svg" alt="view" /></a>
                              <a href="#" class="downloadpdf"><img src="../assets/images/icons/download.svg" alt="download" /></a>
                           </div>
                        </div>
                        <a class="btn renewal-btn">For Renewal</a>
                     </div>
                     <div class="field-box">
                        <div class="pdf-box d-flex justify-content-between">
                           <div class="pdlfile-top d-flex align-items-center">
                              <figure>
                                 <img src="../assets/images/icons/FilePdf.svg" alt="File" />
                              </figure>
                              <figcaption>IDProof.pdf</figcaption>
                           </div>
                           <div class="viewpdf-top d-flex align-items-center">
                              <a href="#" class="viewpdf"><img src="../assets/images/icons/view.svg" alt="view" /></a>
                              <a href="#" class="downloadpdf"><img src="../assets/images/icons/download.svg" alt="download" /></a>
                           </div>
                        </div>
                        <a class="btn renewal-btn">Tenant Details</a>
                     </div>
                     <div class="field-box">
                        <div class="pdf-box d-flex justify-content-between">
                           <div class="pdlfile-top d-flex align-items-center">
                              <figure>
                                 <img src="../assets/images/icons/FilePdf.svg" alt="File" />
                              </figure>
                              <figcaption>LightBill.pdf</figcaption>
                           </div>
                           <div class="viewpdf-top d-flex align-items-center">
                              <a href="#" class="viewpdf"><img src="../assets/images/icons/view.svg" alt="view" /></a>
                              <a href="#" class="downloadpdf"><img src="../assets/images/icons/download.svg" alt="download" /></a>
                           </div>
                        </div>
                        <a class="btn renewal-btn">Previous Rental Proof</a>
                     </div>
                     <div class="field-box">
                        <div class="pdf-box d-flex justify-content-between">
                           <div class="pdlfile-top d-flex align-items-center">
                              <figure>
                                 <img src="../assets/images/icons/FilePdf.svg" alt="File" />
                              </figure>
                              <figcaption>RenewalReqequest.pdf</figcaption>
                           </div>
                           <div class="viewpdf-top d-flex align-items-center">
                              <a href="#" class="viewpdf"><img src="../assets/images/icons/view.svg" alt="view" /></a>
                              <a href="#" class="downloadpdf"><img src="../assets/images/icons/download.svg" alt="download" /></a>
                           </div>
                        </div>
                        <a class="btn renewal-btn">Quote Mailed after Conformation</a>
                     </div>
                  </div>
                  <div class="field-box d-flex justify-content-end submit-btn">
                     <button type="button" class="btn btn-gray">Reset</button>
                     <button type="button" class="btn btn-primary">Submit</button>
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
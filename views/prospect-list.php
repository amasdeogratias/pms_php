<?php
$subtitle = "Prospect List";
include '../partials/header.php';

require('../database/connection.php');
require('../models/Prospect.php');
$database = new Database();
$db = $database->connect();
$prospect_list = new Prospect($db);
$prospect = $prospect_list->getProspect();
?>

<link rel="stylesheet" href="../assets/css/prospect-list.css" type="text/css" />

<div class="dashboard-main">
    <header class="d-flex justify-content-between align-items-center">
        <h1>Prospect Management</h1>
        <div class="customer d-flex align-items-center">
            <a href="add-prospect.php" class="btnprospect"> <img src="../assets/images/icons/plus-big.svg"
                    alt="plus" />Add Prospect</a>
            <a href="index.php" class="logout">
                <img src="../assets/images/icons/logout.svg" alt="Logout" />
            </a>
            <a href="#" class="profile">
                <img src="../assets/images/user-pic.jpg" alt="Profile" />
            </a>
        </div>
    </header>
    <div class="prospect-maintable">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th width="200">Name</th>
                    <th width="300">E-mail</th>
                    <th width="150">Mobile Number</th>
                    <th width="150">Location</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <?php
						$i = 1;
						foreach ($prospect as $row){
					?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["NameOfOrganization"]; ?></td>
                    <td><?php echo $row["OfficialEMailID"]; ?></td>
                    <td><?php echo $row["OfficialMobileNumber"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="javascript:void(0)" class="prospect_id open-dialog"
                                data-id="<?php echo $row['Id']; ?>">
                                <img src="../assets/images/icons/innerEye.svg" alt="eye" />
                            </a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <!-- modal open for propect -->
    <div class="modal modaldesign fade" id="myModalProspects" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-hover mb-0 tabledesign">
                        <thead class="table-light">
                            <tr>
                                <th colspan="2">View Details</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">

                        </tbody>
                    </table>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end for prospect -->
    <?php include ('../partials/footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".prospect_id").click(function() {
            var prospectId = $(this).data('id');
            //console.log(prospectId);
            $.ajax({
                url: '../controllers/ProspectController.php?f=fetchProspectById',
                type: 'POST',
                data: {
                    id: prospectId
                },
                success: function(response) {
                    console.log(response);
                    var data = JSON.parse(response);
                    console.log(data.prospect.ContactPersonName)

                    var tableRaw = `<tr><td>Contact Person</td><td><a>${data.prospect.ContactPersonName}</a></td></tr>
									<tr><td>Mobile Number</td><td><a>${data.prospect.ContactPersonMobile}</a></td></tr>
									<tr><td>Email Id</td><td><a>${data.prospect.ContactPersonEmailID}</a></td></tr>
									<tr><td>TIN Number</td><td><a>${data.prospect.TINNumber}</a></td></tr>
									<tr><td>VRN Number</td><td><a>${data.prospect.VRNNumber}</a></td></tr>`;
                                    $.each(data.documents, function(index, document) {
                                        tableRaw += `<tr>
                                            <td>Document</td>
                                            <td>
                                                <div class="field-box">
                                                    <div class="pdf-box d-flex justify-content-between">
                                                        <div class="pdlfile-top d-flex align-items-center">
                                                            <figcaption>${document.Document}</figcaption>
                                                        </div>
                                                        <div class="viewpdf-top d-flex align-items-center">
                                                            <a href="../prospectDocument/${document.Document}" class="viewpdf" target="new"><img src="../assets/images/icons/view.svg" alt="view" /></a>
                                                            <a href="../prospectDocument/${document.Document}" download class="downloadpdf"><img src="../assets/images/icons/download.svg" alt="download" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>`;
                                    });
                    $('#tbody').html(tableRaw);
                    $('#myModalProspects').modal('show');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("AJAX error:", textStatus, errorThrown);
                }
            });

        });
    });
    </script>
<?php
$subtitle = "Company Management";
include '../partials/header.php';

require('../database/connection.php');
require('../models/Company.php');
$database = new Database();
$db = $database->connect();
$company = new Company($db);
$companies = $company->fetch();
?>

<link rel="stylesheet" href="../assets/css/prospect-list.css" type="text/css" />

<div class="dashboard-main">
    <header class="d-flex justify-content-between align-items-center">
        <h1>Company Management</h1>
        <div class="customer d-flex align-items-center">
            <a href="create-company.php" class="btnprospect"> <img src="../assets/images/icons/plus-big.svg"
                                                                 alt="plus" />Add Company</a>
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
                <th width="200">Company Name</th>
                <th width="200">Mailing Name</th>
                <th width="200">Address</th>
                <th width="200">District</th>
                <th width="200">Country</th>
                <th width="300">E-mail</th>
                <th width="150">Mobile Number</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($companies as $row){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["CompanyName"]; ?></td>
                    <td><?php echo $row["MailingName"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <td><?php echo $row["District"]; ?></td>
                    <td><?php echo $row["Country"]; ?></td>
                    <td><?php echo $row["EmailId"]; ?></td>
                    <td><?php echo $row["MobileNo"]; ?></td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="edit-company.php?f=<?php echo $row['Id'];?>" class="btn btn-info btn-group-sm"> Edit</a>
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
<?php
$subtitle = "Edit Company";
include '../partials/header.php';

require('../database/connection.php');
require('../models/Company.php');
$database = new Database();
$db = $database->connect();
$company = new Company($db);
$companies = $company->fetchUserCompanyData($_GET['company_name']);
?>
<div class="dashboard-main">
    <header class="d-flex justify-content-between align-items-center">
        <div class="add-back d-flex align-items-center">
            <h1>Edit Company</h1>
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
                                    text: "Company updated successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                            </script>';
                } elseif ($_SESSION['message'] == 'username_error') {
                    echo '<script>
                            swal({
                                title: "Error!",
                                text: "Problem in updating company",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        </script>';
                }
                unset($_SESSION['message']);
            }
            ?>
        </h4>
        <!-- <h2>Individual Property Overview</h2> -->
        <div class="form-main">
            <form class="quotationform" method="post" id="createCompany">
                <div class="d-flex justify-content-between customerbox mb-3">
                    <div class="field-box">
                        <span>Company Name</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="company_name" id="company_name" value="<?php echo $companies[0]['CompanyName'] ?>"  placeholder="Enter company name" required>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="company" id="company" value="<?php echo $_GET['company_name']; ?>"  placeholder="Enter company name" required>
                    <div class="field-box">
                        <span>Mailing Name</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="mailing_name" id="mailing_name" value="<?php echo $companies[0]['MailingName'] ?>" placeholder="Enter mailing name">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Address</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $companies[0]['Address'] ?>" placeholder="Enter address">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between customerbox mb-3">
                    <div class="field-box">
                        <span>District</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="district" id="district" value="<?php echo $companies[0]['District'] ?>" placeholder="Enter district">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Country</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="country" id="country" value="<?php echo $companies[0]['Country'] ?>" placeholder="Enter country">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Pincode</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="pincode" id="pincode" value="<?php echo $companies[0]['Pincode'] ?>" placeholder="Enter pincode">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between customerbox mb-3">
                    <div class="field-box">
                        <span>Telephone No.</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="telephone" id="telephone" value="<?php echo $companies[0]['TelephoneNo'] ?>" placeholder="Enter telephone">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Mobile No.</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $companies[0]['MobileNo'] ?>" placeholder="Enter mobile">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Fax No.</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="fax" id="fax" value="<?php echo $companies[0]['FaxNo'] ?>" placeholder="Enter fax">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between customerbox mb-3">
                    <div class="field-box">
                        <span>Email Id</span>
                        <div class="d-flex justify-content-between">
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $companies[0]['Email'] ?>" placeholder="Enter email" required>
                        </div>
                        <small class="email_validate" style="color: red"></small>
                    </div>
                    <div class="field-box">
                        <span>Website</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="website" id="website" value="<?php echo $companies[0]['Website'] ?>" placeholder="Enter website link">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>Company Start Date</span>
                        <div class="d-flex justify-content-between">
                            <input type="date" class="form-control" name="start_date" id="start_date" value="<?php echo $companies[0]['CompanyStartDate'] ?>" placeholder="Enter company start date">
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" style="border-bottom-color: #dee2e6;border-bottom-width: 1px;font-weight:normal">Add User Details</th>
                    </tr>
                    </thead>
                    <?php if ($_GET['company_name'] !=''){ ?>
                    <tbody id="tbody">
                    <?php foreach ($companies as $key => $val){ ?>
                        <tr>
                            <td>
                                <div class="field-box" style="width: 100%;">
                                    <span>User Type</span>
                                    <input type="text" class="form-control" style="border: none;" name="userType[]" id="alias" value="<?php echo $val['UserType'];?>">
                                </div>
                            </td>
                            <td>
                                <div class="field-box" style="width: 100%;">
                                    <span>User Name</span>
                                    <input type="text"class="form-control" style="border: none;" name="userName[]" id="alias" value="<?php echo $val['UserName'];?>">
                                </div>
                            </td>
                            <td>
                                <div class="field-box" style="width: 100%;">
                                    <span>User Email Id</span>
                                    <input type="text"class="form-control" style="border: none;" name="userEmail[]" id="alias" value="<?php echo $val['EmailId'];?>">
                                </div>
                            </td>
                            <td>
                                <div class="field-box" style="width: 100%;">
                                    <span>User Password</span>
                                    <input type="password" class="form-control" style="border: none;" name="userPassword[]" id="alias" value="<?php echo $val['Password'];?>">
                                </div>
                            </td>
                            <td><span type="button" class="btn-sm addUser" onclick="removeUser(this)" style="width:100%;height:100%">x</span></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <?php } ?>
                </table>

                <div class="d-flex gap-3 customerbox mb-3">
                    <div class="field-box">
                        <span>User Type</span>
                        <div class="d-flex justify-content-between">
                            <select class="form-control" name="usertype" id="usertype">
                                <option>Select</option>
                                <option value="Admin">Admin</option>
                                <option value="Manager">Manager</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-box">
                        <span>User Name</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="username_or_email" id="username_or_email" placeholder="Enter username">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>User Email</span>
                        <div class="d-flex justify-content-between">
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="field-box">
                        <span>User Password</span>
                        <div class="d-flex justify-content-between">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        </div>
                    </div>
                    <button type="button" class="btn-sm addUser" onclick="addUser()">+</button>
                </div>

                <div class="field-box d-flex justify-content-end submit-btn">
                    <button type="button" class="btn btn-gray">Reset</button>
                    <button type="submit" id="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?php include ('../partials/footer.php'); ?>
    <script>
        new SlimSelect({
            select: "#usertype",
        });

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

                    document.getElementById('createCompany').action ="../controllers/CompanyController.php?f=update";

                }
            });
        });
        const addedUsers = [];
        function addUser() {
            const usertype = document.getElementById('usertype').value.trim();
            const userName = document.getElementById('username_or_email').value.trim();
            const userEmail = document.getElementById('user_email').value.trim();
            const password = document.getElementById('password').value.trim();

            if ((usertype === '' || userEmail === '' || password ==='')) {
                alert("Please fill in all fields!");
                return; // Exit the function if a field is empty
            }

            //validate email
            // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            // if (!emailRegex.test(userEmail)) {
            //     const valid_email = document.querySelector('.email_validate');
            //     valid_email.textContent="Invalid email format!";
            //     // alert("Invalid email format!");
            //     return;
            // }

            // Check for duplicate user based on email only
            if (addedUsers.includes(userEmail)) {
                alert("Duplicate email entry!");
                return;
            }
            addedUsers.push(usertype)
            addedUsers.push(userName)
            addedUsers.push(userEmail)
            addedUsers.push(password)

            const tableBody = document.getElementById('tbody');
            const newRow = document.createElement('tr');
            // newRow.setAttribute(border, 'none');
            newRow.innerHTML = `
                <td>
					<div class="field-box" style="width: 100%;">
						<span>User Type</span>
						<input type="text" class="form-control" style="border: none;" name="userType[]" id="alias" value="${usertype}"></td>
					</div>
				<td>
					<div class="field-box" style="width: 100%;">
						<span>User Name</span>
						<input type="text"class="form-control" style="border: none;" name="userName[]" id="alias" value="${userName}">
					</div>
				</td>
<td>
					<div class="field-box" style="width: 100%;">
						<span>User Email Id</span>
						<input type="text"class="form-control" style="border: none;" name="userEmail[]" id="alias" value="${userEmail}">
					</div>
				</td>
                <td>
					<div class="field-box" style="width: 100%;">
						<span>User Password</span>
						<input type="password" class="form-control" style="border: none;" name="userPassword[]" id="alias" value="${password}">
					</div>
				</td>
                <td><span type="button" class="btn-sm addUser" onclick="removeUser(this)" style="width:100%;height:100%">x</span></td>
              `;

            tableBody.appendChild(newRow);
            document.getElementById('usertype').value = "";
            document.getElementById('username_or_email').value = "";
            document.getElementById('password').value = "";

        }

        function removeUser(button){
            const row = button.closest('tr');
            row.remove();
        }
    </script>

    <style>
        .addUser{
            background: none;
            border: solid 1px #000;
            font-size: 14px;
            color: #000;
            cursor: pointer;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
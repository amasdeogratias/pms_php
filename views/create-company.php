<?php
$subtitle = "Create Company";
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
            if (isset($_SESSION['message'])) {
                if ($_SESSION['message'] == 'success') {
                    echo '<script>
                                swal({
                                    title: "Success!",
                                    text: "Company added successfully!",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                            </script>';
                } elseif ($_SESSION['message'] == 'username_error') {
                    echo '<script>
                            swal({
                                title: "Error!",
                                text: "Problem in creating company",
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
                            <input type="text" class="form-control" name="company_name" id="company_name"  placeholder="Enter company name" required>
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
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                        </div>
                        <small class="email_validate" style="color: red"></small>
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
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="4" style="border-bottom-color: #dee2e6;border-bottom-width: 1px;font-weight:normal">Add User Details</th>
                    </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
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
                        <span>User Email/User Name</span>
                        <div class="d-flex justify-content-between">
                            <input type="text" class="form-control" name="username_or_email" id="username_or_email" placeholder="Enter username or username">
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
                    <button type="submit" id="submit" class="btn btn-primary">Save</button>
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

                    document.getElementById('createCompany').action ="../controllers/CompanyController.php?f=create";

                }
            });
        });
        const addedUsers = [];
        function addUser() {
            const usertype = document.getElementById('usertype').value.trim();
            const userEmail = document.getElementById('username_or_email').value.trim();
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
						<span>User Email Id</span>
						<input type="text"class="form-control" style="border: none;" name="userNameOrEmail[]" id="alias" value="${userEmail}">
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
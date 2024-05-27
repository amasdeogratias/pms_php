<?php
    include '../partials/header.php';
?>
    <div class="dashboard-main">
      <header class="d-flex justify-content-between align-items-center">
        <h1>DashBoard</h1>
        <div class="customer d-flex align-items-center">
          <a href="create-company.php" class="btnprospect">
            <img src="../assets/images/icons/plus-big.svg" alt="plus"> Create Company
          </a>

          <a href="../controllers/AuthController.php?f=Logout" class="logout">
            <img src="../assets/images/icons/logout.svg" alt="Logout" />
          </a>
          <a href="#" class="profile">
            <img src="../assets/images/user-pic.jpg" alt="Profile" />
          </a>
        </div>
      </header>

      <div class="column-top d-flex">
        <div class="count-column">
          <div class="properties-count bgcolor">
            <h5>Total Properties</h5>
            <h4>523</h4>
            <img src="../assets/images/icons/properties.svg" alt="properties" />
          </div>

          <div class="properties-count bgcolor mb-0">
            <h5>Total Customers</h5>
            <h4>234</h4>
            <img src="../assets/images/icons/customers.svg" alt="customers" />
          </div>
        </div>


        <div class="totalcustomers bgcolor">
          <h5>Revenue by Property</h5>

          <!-- <div id="properyMap"></div>  -->
          <div id="RevenueProperty"></div>

          <div class="progress_bar">
            <div class="progress_bar_item">
              <div class="d-flex justify-content-between">
                <span>Property1</span>
                <span class="item_value">0K</span>
              </div>
              <div class="item_bar">
                <div class="progress" data-progress="72"></div>
              </div>
            </div>
            <div class="progress_bar_item">
              <div class="d-flex justify-content-between">
                <span>Property2</span>
                <span class="item_value">0K</span>
              </div>
              <div class="item_bar">
                <div class="progress" data-progress="39"></div>
              </div>
            </div>
            <div class="progress_bar_item">
              <div class="d-flex justify-content-between">
                <span>Property3</span>
                <span class="item_value">0K</span>
              </div>
              <div class="item_bar">
                <div class="progress" data-progress="25"></div>
              </div>
            </div>
            <div class="progress_bar_item">
              <div class="d-flex justify-content-between">
                <span>Property4</span>
                <span class="item_value">0K</span>
              </div>
              <div class="item_bar">
                <div class="progress" data-progress="61"></div>
              </div>
            </div>
          </div>


        </div>

        <div class="capacityoccupancy bgcolor">
          <h5>Capacity vs Occupancy</h5>
          <div id="chartContainer"></div>
        </div>


        <div class="totalsales bgcolor">
          <h5>Total Sales</h5>
          <div id="chartSale"></div>
          <ul>
            <li>
              <p><span></span> Showrooms</p> <label>$300K</label>
            </li>
            <li>
              <p><span></span> Offices</p> <label>$135K</label>
            </li>
            <li>
              <p><span></span> Restaurants</p> <label>$48K</label>
            </li>
            <li>
              <p><span></span> Renewal</p> <label>$154K</label>
            </li>
          </ul>
        </div>

        <div class="totalutstanding bgcolor">
          <h5>Total Outstanding</h5>
          <div id="ChartTotalUtstanding"></div>
          <ul>
            <li>
              <p><span></span> Property1</p> <label>$300K</label>
            </li>
            <li>
              <p><span></span> Property2</p> <label>$135K</label>
            </li>
            <li>
              <p><span></span> Property3</p> <label>$48K</label>
            </li>
            <li>
              <p><span></span> Property4</p> <label>$154K</label>
            </li>
          </ul>
        </div>
      </div>

      <div class="revenueofmonth column-top d-flex justify-content-between">

        <div class="revenuebymonth bgcolor">
          <div class="d-flex justify-content-between align-items-center">
            <h5>Revenue by Month</h5>

            <div class="dropdown">
              <a class="onclickshow" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">...</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
          <div id="RevenueMonthby"></div>
        </div>

        <div class="revenuebycatagory bgcolor">
          <h5>Revenue by Catagory</h5>
          <div id="RevenueCatagory"></div>
        </div>

      </div>

      <div class="revenueyears bgcolor column-top mb-4" style="background:#EFF7FF;">
        <h5>Revenue: This Year <span>vs</span> Last Year</h5>
        <div id="RevenueYears"></div>
      </div>

    </div>

<?php include ('../partials/footer.php'); ?>


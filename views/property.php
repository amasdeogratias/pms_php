<?php
include '../partials/header.php';
?>
      <div class="dashboard-main">
         <header class="d-flex justify-content-between align-items-center">
            <h1>Property Management</h1>
            <div class="customer d-flex align-items-center">
               <div class="search-container">
                  <form action="#" method="get">
                     <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                     <label class="button searchbutton" for="searchright"><span class="mglass"><img src="../assets/images/icons/search-header.svg" alt="search"/></span></label>
                  </form>
               </div>
               <a href="../index.php" class="logout">
               <img src="../assets/images/icons/logout.svg" alt="Logout"/>
               </a>
               <a href="#" class="profile">
               <img src="../assets/images/user-pic.jpg" alt="Profile"/>
               </a>
            </div>
         </header>
         <div class="propertybox-main d-flex">
            <a href="property-overview.php" class="propertybox">
            <div class="property-pic">
            <img src="../assets/images/hall-building.jpg" class="img-fluid" alt="property-pic"/>
            <div class="showfloor d-flex justify-content-between">
               <span>Property 1</span> 
               <span class="quantity">12/18</span>
            </div>
            </div>
            <ul>
                <li><h4>Parking <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p> <span>42,332 Sqft2</span></div> </li>
                <li><h4>Amenities <strong>:</strong></h4>  <div class="property-dteils flex-column"><p>Yes</p> <span class="swimming">Swimming Pool, Basketball court, Games Room, Gym.</span></div> </li>
                <li><h4>Common Hall <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p></li>
                <li><h4>Balcony <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>No</p></li>
                <li><h4>Total Floors <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>48</p></li>
                <li><h4>Elevators <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>12</p></li>
                <li><h4>Retail Centers <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>1</p></li>
                <li><h4>Total Parking Spaces <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>234</p></li>
            </ul>          
            </a>  
            <a href="property-overview.php" class="propertybox">
            <div class="property-pic">
            <img src="../assets/images/classroom.jpg" class="img-fluid" alt="property-pic"/>
            <div class="showfloor d-flex justify-content-between">
               <span>Property 2</span>                 
            </div>
            </div>
            <ul>
                <li><h4>Parking <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p> <span>42,332 Sqft2</span></div> </li>
                <li><h4>Amenities <strong>:</strong></h4>  <div class="property-dteils flex-column"><p>Yes</p> <span class="swimming">Swimming Pool, Basketball court, Games Room, Gym.</span></div> </li>
                <li><h4>Common Hall <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p></li>
                <li><h4>Balcony <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>No</p></li>
                <li><h4>Total Floors <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>48</p></li>
                <li><h4>Elevators <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>12</p></li>
                <li><h4>Retail Centers <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>1</p></li>
                <li><h4>Total Parking Spaces <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>234</p></li>
            </ul>          
            </a>  
            
            <a href="property-overview.php" class="propertybox">
            <div class="property-pic">
            <img src="../assets/images/property-pic.png" class="img-fluid" alt="property-pic"/>
            <div class="showfloor d-flex justify-content-between">
               <span>Property 3</span> 
            </div>
            </div>
            <ul>
                <li><h4>Parking <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p> <span>42,332 Sqft2</span></div> </li>
                <li><h4>Amenities <strong>:</strong></h4>  <div class="property-dteils flex-column"><p>Yes</p> <span class="swimming">Swimming Pool, Basketball court, Games Room, Gym.</span></div> </li>
                <li><h4>Common Hall <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p></li>
                <li><h4>Balcony <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>No</p></li>
                <li><h4>Total Floors <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>48</p></li>
                <li><h4>Elevators <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>12</p></li>
                <li><h4>Retail Centers <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>1</p></li>
                <li><h4>Total Parking Spaces <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>234</p></li>
            </ul>          
            </a>  
            <a href="property-overview.php" class="propertybox">
            <div class="property-pic">
            <img src="../assets/images/business-building.jpg" class="img-fluid" alt="property-pic"/>
            <div class="showfloor d-flex justify-content-between">
               <span>Property 4</span> 
            </div>
            </div>
            <ul>
                <li><h4>Parking <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p> <span>42,332 Sqft2</span></div> </li>
                <li><h4>Amenities <strong>:</strong></h4>  <div class="property-dteils flex-column"><p>Yes</p> <span class="swimming">Swimming Pool, Basketball court, Games Room, Gym.</span></div> </li>
                <li><h4>Common Hall <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p></li>
                <li><h4>Balcony <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>No</p></li>
                <li><h4>Total Floors <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>48</p></li>
                <li><h4>Elevators <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>12</p></li>
                <li><h4>Retail Centers <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>1</p></li>
                <li><h4>Total Parking Spaces <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>234</p></li>
            </ul>          
            </a>  
            <a href="property-overview.php" class="propertybox">
            <div class="property-pic">
            <img src="../assets/images/property-pic.png" class="img-fluid" alt="property-pic"/>
            <div class="showfloor d-flex justify-content-between">
               <span>Property 5</span> 
            </div>
            </div>
            <ul>
                <li><h4>Parking <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p> <span>42,332 Sqft2</span></div> </li>
                <li><h4>Amenities <strong>:</strong></h4>  <div class="property-dteils flex-column"><p>Yes</p> <span class="swimming">Swimming Pool, Basketball court, Games Room, Gym.</span></div> </li>
                <li><h4>Common Hall <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>Yes</p></li>
                <li><h4>Balcony <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>No</p></li>
                <li><h4>Total Floors <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>48</p></li>
                <li><h4>Elevators <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>12</p></li>
                <li><h4>Retail Centers <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>1</p></li>
                <li><h4>Total Parking Spaces <strong>:</strong></h4>  <div class="property-dteils align-items-center"><p>234</p></li>
            </ul>          
            </a>  
         </div>
      </div>
<?php include ('../partials/footer.php'); ?>
$(document).ready(function () {
  var multipleCancelButton = new Choices("#choices-multiple-remove-button", {
    removeItemButton: true,
    maxItemCount: 3,
  });
});
//dropdown multipal check

function uncheckOther(checkbox) {
  var checkboxes = document.querySelectorAll(".form-check-input");
  checkboxes.forEach(function (cb) {
    if (cb !== checkbox) {
      cb.checked = false;
    }
  });
}
//checkbox singlecheck anyone check

//select wins check end
new SlimSelect({
  select: "#selectwings",
});

document.addEventListener("DOMContentLoaded", function () {
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});

// modal open in floor no.
document
  .getElementById("totalFloorsInput")
  .addEventListener("change", function () {
    var totalFloors = this.value;
    // Open the modal when the input value changes
    if (totalFloors) {
      var myModal = new bootstrap.Modal(document.getElementById("myModal2"));
      myModal.show();

      // Add event listener to remove modal-open class and styles after modal is hidden
      myModal._element.addEventListener("hidden.bs.modal", function () {
        $(".modal-backdrop").hide();
        $("body").removeClass("modal-open");
        $("body").css({ overflow: "", "padding-right": "" }); // Reset overflow and padding-right
      });
    }
  });

function generateFloorRows() {
  var totalFloors = document.getElementById("totalFloorsInput").value;
  var floorTableBody = document.getElementById("floorTableBody");

  // Clear previous rows
  floorTableBody.innerHTML = "";

  // Generate new rows based on the input value
  for (var i = 1; i <= totalFloors; i++) {
    var row = `
        <tr>
            <td scope="row">${i}</td>
            <td>
                <div class="d-flex align-items-center gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Open${i}" onchange="toggleSubRows(this)">
                        <label class="form-check-label" for="Open${i}"> Open </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="Prefixed${i}" onchange="toggleSubRows(this)">
                        <label class="form-check-label" for="Prefixed${i}"> Prefixed </label>
                    </div>
                </div>
            </td>
            <td>
                <div class="totalSqFitText totalsq" style="display: none;"><div class="d-flex gap-2 align-items-center"><span>Total Sq.Fit</span> <input class="form-control totalSqFitInput" type="number" placeholder="Sqfit Value"></div></div>
                <div class="shopText totalsq" style="display: none;"><div class="d-flex gap-2 align-items-center"><span>Shop</span> <input class="form-control totalSqFitInput" type="number" placeholder="Total Shop no." onchange="generateSubRows(this)"></div></div>                        
            </td>
        </tr>
    `;
    floorTableBody.innerHTML += row;
  }
}

function toggleSubRows(checkbox) {
  var row = checkbox.closest("tr");
  var checkboxes = row.querySelectorAll(".form-check-input");
  var totalSqFitText = row.querySelector(".totalSqFitText");
  var shopText = row.querySelector(".shopText");
  var subRows = row.querySelectorAll(".sub-row");

  // Hide all input fields
  totalSqFitText.style.display = "none";
  shopText.style.display = "none";

  // Uncheck all other checkboxes in the row
  checkboxes.forEach(function (cb) {
    if (cb !== checkbox) {
      cb.checked = false;
    }
  });

  // Show corresponding input based on the checked checkbox
  if (checkbox.checked) {
    // if (checkbox.id.includes('Open')) {
    if (checkbox.checked && checkbox.id.includes("Open")) {
      totalSqFitText.style.display = "inline-block";
      subRows.forEach(function (subRow) {
        subRow.style.display = "none";
      });
    } else if (checkbox.id.includes("Prefixed")) {
      shopText.style.display = "inline-block";
    }
  }
}

function generateSubRows(input) {
  var newValue = parseInt(input.value);
  var secondrow = input.closest("tr");
  var subRows = secondrow.querySelectorAll(".sub-row");

  // Remove extra sub-rows if the new value is less than the number of existing sub-rows
  if (newValue < subRows.length) {
    for (var i = subRows.length; i > newValue; i--) {
      subRows[i - 1].remove();
    }
  }

  // Generate new subrows based on the updated input value
  for (var i = subRows.length + 1; i <= newValue; i++) {
    var subRow = `
                            <tr class="sub-row">
                               <td></td>
                               <td></td>
                               <td>
                                  <div class="d-flex gap-2">
                                        <input class="form-control" style="width:70px" type="text" placeholder="Shop No.">
                                        <input class="form-control" type="text" placeholder="Shop Sq. fit">
                                  </div>
                               </td>
                            </tr>
                      `;
    secondrow.insertAdjacentHTML("afterend", subRow);
  }
}

//  floor no end modal js

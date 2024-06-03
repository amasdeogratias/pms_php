// open modal Amenities
$(document).ready(function () {
    $("#amenities").click(function () {
      // Toggle the modal
      $("#myModal1").modal("toggle");
    });
  
    // Close the modal and its backdrop when the modal is hidden
    $("#myModal1").on("hidden.bs.modal", function () {
      $(".modal-backdrop").hide();
    });
  
    $("#common_area").click(function () {
      // Toggle the modal
      $("#myModal3").modal("toggle");
    });
  
    // Close the modal and its backdrop when the modal is hidden
    $("#myModal3").on("hidden.bs.modal", function () {
      $(".modal-backdrop").hide();
    });
  
    $("#lifts").click(function () {
      // Toggle the modal
      $("#myModal4").modal("toggle");
    });
    // Close the modal and its backdrop when the modal is hidden
    $("#myModal4").on("hidden.bs.modal", function () {
      $(".modal-backdrop").hide();
    });
  
    $("#Parkingslots").click(function () {
      // Toggle the modal
      $("#myModal5").modal("toggle");
    });
  
    // Close the modal and its backdrop when the modal is hidden
    $("#myModal5").on("hidden.bs.modal", function () {
      $(".modal-backdrop").hide();
    });
  });
  
$(document).ready(function() {
   // Event delegation for dynamically added fields
   $(document).on('click', '.edit-on-click', function() {
      var $text = $(this);
      var $input = $('<input type="text" class="form-control" />');

      // Set the input value to the current text content
      $input.val($text.text());

      // Replace the text with the input
      $text.hide().after($input);

      // Focus on the input
      $input.focus();

      // When the input loses focus, update the text content and show it again
      $input.focusout(function() {
         var newText = $input.val().trim();
         if (newText !== '') {
            $text.text(newText);
         }
         $input.remove();
         $text.show();
      });

      // When Enter key is pressed, update the text content and show it again
      $input.keypress(function(e) {
         if (e.which === 13) {
            $input.trigger('focusout');
         }
      });
   });

   // Event delegation for removing fields
   $(document).on('click', '.remove-field', function() {
      $(this).closest('.field-box').remove();
       updateAnemitiesValue();
   });

   // Event listener for the "Add More" button
   $(document).on('click', '.addMoreButton', function(event) {
      event.preventDefault(); // Prevent default behavior of the button click
      addField($(this)); // Call the addField function with the clicked button
   });

   // Function to add a new field
   function addField(clickedButton) {
      const container = clickedButton.siblings('.services');
      const field = document.createElement('div');
      field.classList.add('field-box');

      const removeButton = document.createElement('span');
      removeButton.classList.add('remove-field');
      removeButton.textContent = 'X';

      const label = document.createElement('span');
      label.classList.add('edit-on-click');
      label.textContent = 'Title';

      const input = document.createElement('input');
      input.classList.add('form-control');
      input.type = 'text';
      input.placeholder = 'Details';

      const flexContainer = document.createElement('div');
      flexContainer.classList.add('d-flex', 'justify-content-between');
      flexContainer.appendChild(input);
      flexContainer.appendChild(removeButton);

      field.appendChild(label);
      field.appendChild(flexContainer);

      container.append(field); // Append the new field to the container
       
       //add event listener to the input field
       input.addEventListener('input',updateAnemitiesValue);
   }

    function updateAnemitiesValue() {
        const allInputs = document.querySelectorAll('.services .form-control');
        const values = Array.from(allInputs).map(input => input.value).join(', ');
        const checkbox = document.getElementById('amenities');
        checkbox.value = values;
        document.getElementById('label_amenity').textContent = (values);
    }
});

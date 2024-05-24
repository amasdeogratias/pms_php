let addButton;

// Function to add a new field
function addField() {
    const container = document.getElementById('addnewfield');
    const field = document.createElement('div');
    field.classList.add('field-box');

    const removeButton = document.createElement('span');
    removeButton.classList.add('remove-field');
    removeButton.textContent = 'X';
    removeButton.addEventListener('click', function() {
        container.removeChild(field);
    });

    const label = document.createElement('span');
    label.classList.add('edit-on-click');
    label.textContent = 'Title';

    const input = document.createElement('input');
    input.classList.add('form-control');
    input.type = 'text';
    input.placeholder = 'Details';
    input.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the Enter key from creating a new field
        }
    });

    const flexContainer = document.createElement('div');
    flexContainer.classList.add('d-flex', 'justify-content-between');
    flexContainer.appendChild(input);
    flexContainer.appendChild(removeButton);

    field.appendChild(label);
    field.appendChild(flexContainer);

    container.insertBefore(field, addButton); // Insert before the "+" button
}

document.addEventListener('DOMContentLoaded', function() {
    addButton = document.querySelector('.add-field'); // Assign to the global variable

    // Add event listener to plus button
    addButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default behavior of the button click
        addField(); // Call the addField function
    });
});

$(document).ready(function() {
    // Event delegation for dynamically added fields
    $('#addnewfield').on('click', '.edit-on-click', function() {
        var $text = $(this),
            $input = $('<input type="text" />');

        $text.hide().after($input);

        $input.val($text.html()).show().focus()
            .keypress(function(e) {
                var key = e.which;
                if (key == 13) { // enter key
                    $input.hide();
                    $text.html($input.val()).show();
                    return false;
                }
            })
            .focusout(function() {
                $input.hide();
                $text.show();
            });
    });
});
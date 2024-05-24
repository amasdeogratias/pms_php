    // Function to set active menu item in local storage
    function setActiveMenuItem(item) {
        localStorage.setItem('activeMenuItem', item);
    }

    // Function to get active menu item from local storage
    function getActiveMenuItem() {
        return localStorage.getItem('activeMenuItem');
    }

    // Set active menu item on page load
    $(window).on('load', function() {
        var activeMenuItem = getActiveMenuItem();
        if (activeMenuItem) {
            $('.menuleft li a').removeClass('active');
            $('.menuleft li a[href="' + activeMenuItem + '"]').addClass('active');
        }
    });

    $(document).ready(function() {
        // Add 'active' class to the clicked anchor tag
        $('.menuleft li a').on('click', function() {
            // Remove 'active' class from all anchor tags
            $('.menuleft li a').removeClass('active');
            // Add 'active' class to the clicked anchor tag
            $(this).addClass('active');
            // Set active menu item in local storage
            setActiveMenuItem($(this).attr('href'));
        });
    });

// Custom Navigation JavaScript for Nested Dropdowns

(function ($) {
    'use strict';

    // Helper function to check if mobile viewport
    function isMobile() {
        return $(window).width() < 992;
    }

    // Mobile: Handle nested dropdown (submenu) clicks
    // Uses event delegation on document for reliability
    $(document).on('click touchend', '.dropdown-menu .has-submenu', function (e) {
        // Only handle on mobile viewports
        if (isMobile()) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();

            var $this = $(this);
            var $submenu = $this.next('.dropdown-menu');
            var $parentDropdown = $this.parent('.dropdown');

            if ($submenu.length) {
                // Check if this submenu is currently open
                var isOpen = $submenu.hasClass('show');

                // Close all sibling submenus at the same level only
                // Find the parent dropdown-menu that contains this item
                var $parentMenu = $this.closest('.dropdown-menu');
                $parentMenu.find('> .dropdown > .dropdown-menu.show').not($submenu).each(function () {
                    $(this).removeClass('show');
                    // Also close any nested submenus inside
                    $(this).find('.dropdown-menu.show').removeClass('show');
                    $(this).find('.has-submenu[aria-expanded="true"]').attr('aria-expanded', 'false');
                });
                $parentMenu.find('> .dropdown > .has-submenu[aria-expanded="true"]').not($this).attr('aria-expanded', 'false');

                // Toggle this submenu
                if (isOpen) {
                    // Close this submenu and all nested ones
                    $submenu.removeClass('show');
                    $submenu.find('.dropdown-menu.show').removeClass('show');
                    $submenu.find('.has-submenu[aria-expanded="true"]').attr('aria-expanded', 'false');
                    $this.attr('aria-expanded', 'false');
                } else {
                    // Open this submenu
                    $submenu.addClass('show');
                    $this.attr('aria-expanded', 'true');
                }
            }

            return false;
        }
    });

    // Prevent clicks on dropdown wrapper divs from closing parent menus (at ALL nesting levels)
    $(document).on('click touchend', '.dropdown-menu .dropdown', function (e) {
        if (isMobile()) {
            // Only stop propagation, don't prevent default
            // This allows the nested click handlers to work while preventing bubbling
            e.stopPropagation();
        }
    });

    // Prevent Bootstrap's dropdown hide behavior on nested menu items
    $(document).on('hide.bs.dropdown', '.nav-item.dropdown', function (e) {
        if (isMobile()) {
            // Check if the click was on a nested submenu toggle
            var $target = $(e.clickEvent && e.clickEvent.target);
            if ($target.closest('.dropdown-menu .has-submenu').length ||
                $target.closest('.dropdown-menu .dropdown').length) {
                // Prevent the main dropdown from closing
                e.preventDefault();
                return false;
            }
        }
    });

    // Helper to toggle Bootstrap attributes based on viewport
    function updateDropdownBehavior() {
        if (isMobile()) {
            // Mobile: Remove data-bs-toggle to prevent Bootstrap from handling nested dropdowns
            $('.dropdown-menu .has-submenu').removeAttr('data-bs-toggle');
        } else {
            // Desktop: Restore Bootstrap behavior for hover dropdowns
            $('.dropdown-menu .has-submenu').attr('data-bs-toggle', 'dropdown');
        }
    }

    // Initialize behavior on page load
    $(document).ready(function () {
        updateDropdownBehavior();
    });

    // Re-apply behavior after Bootstrap opens ANY dropdown
    $(document).on('shown.bs.dropdown', function (e) {
        if (isMobile()) {
            // Ensure nested submenu toggles don't use Bootstrap on mobile
            // Use a small timeout to ensure DOM is ready
            setTimeout(function () {
                $('.dropdown-menu .has-submenu').removeAttr('data-bs-toggle');
            }, 10);
        }
    });

    // Handle window resize with debounce
    var resizeTimer;
    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            updateDropdownBehavior();

            if (!isMobile()) {
                // Reset mobile styles when switching to desktop
                $('.dropdown-menu .dropdown-menu').removeClass('show');
                $('.dropdown-menu .has-submenu').attr('aria-expanded', 'false');
            }
        }, 100);
    });

    // Close all nested dropdowns when clicking outside the navbar
    $(document).on('click', function (e) {
        if (isMobile()) {
            if (!$(e.target).closest('.navbar').length) {
                $('.dropdown-menu .dropdown-menu').removeClass('show');
                $('.dropdown-menu .has-submenu').attr('aria-expanded', 'false');
            }
        }
    });

})(jQuery);

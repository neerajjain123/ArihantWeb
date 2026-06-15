(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 100);
    };

    // ── Animated Stats Counter ─────────────────────────────────────────────
    function animateCounters() {
        var counters = document.querySelectorAll('.counter-number');
        if (!counters.length || !window.IntersectionObserver) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting && !entry.target.dataset.animated) {
                    entry.target.dataset.animated = 'true';
                    var el = entry.target;
                    var target = parseInt(el.dataset.target, 10);
                    var suffix = el.dataset.suffix || '';
                    var isDecimal = el.dataset.decimal === 'true';
                    var duration = 1800;
                    var start = null;

                    function step(timestamp) {
                        if (!start) start = timestamp;
                        var progress = Math.min((timestamp - start) / duration, 1);
                        var eased = 1 - Math.pow(1 - progress, 3);
                        var current = Math.floor(eased * target);
                        if (isDecimal) {
                            el.textContent = (current / 10).toFixed(1) + suffix;
                        } else {
                            el.textContent = current.toLocaleString() + suffix;
                        }
                        if (progress < 1) {
                            requestAnimationFrame(step);
                        } else {
                            el.textContent = isDecimal
                                ? (target / 10).toFixed(1) + suffix
                                : target.toLocaleString() + suffix;
                        }
                    }
                    requestAnimationFrame(step);
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.3 });

        counters.forEach(function (counter) { observer.observe(counter); });
    }

    // ── Scroll Reveal ──────────────────────────────────────────────────────
    function initScrollReveal() {
        var revealEls = document.querySelectorAll(
            '.stat-counter-card, .trust-badge, .service-item, .excursion-item, .blog-card'
        );
        if (!revealEls.length || !window.IntersectionObserver) return;

        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealEls.forEach(function (el) {
            el.classList.add('reveal-on-scroll');
            revealObserver.observe(el);
        });
    }

    // ── Category Strip → Service Tab Integration ───────────────────────────
    function initCategoryStrip() {
        var tabMap = {
            'desert':        'tab-dubai-activities-btn',
            'city':          'tab-dubai-activities-btn',
            'water':         'tab-dubai-activities-btn',
            'theme':         'tab-dubai-activities-btn',
            'balloon':       'tab-dubai-activities-btn',
            'international': 'tab-international-btn',
            'packages':      'tab-packages-btn'
        };

        $('.category-tab-btn[data-filter]').on('click', function (e) {
            var filter = $(this).data('filter');
            if (!filter) return;
            e.preventDefault();

            var targetId = tabMap[filter];
            if (targetId) {
                var tabEl = document.getElementById(targetId);
                if (tabEl && typeof bootstrap !== 'undefined') {
                    var bsTab = new bootstrap.Tab(tabEl);
                    bsTab.show();
                }
            }

            // Smooth scroll to services section
            var servicesTop = $('#ourservices').offset();
            if (servicesTop) {
                $('html, body').animate({ scrollTop: servicesTop.top - 80 }, 600, 'easeInOutExpo');
            }

            // Mark active strip button
            $('.category-tab-btn').removeClass('active');
            $(this).addClass('active');
        });
    }

    // Initialize spinner when DOM is ready
    $(document).ready(function () {
        spinner();
        animateCounters();
        initScrollReveal();
        initCategoryStrip();
    });

    // Throttled scroll handler using requestAnimationFrame
    var ticking = false;
    $(window).scroll(function () {
        if (!ticking) {
            window.requestAnimationFrame(function () {
                var scrollTop = $(window).scrollTop();

                // Sticky Navbar
                if (scrollTop > 45) {
                    $('.navbar').addClass('sticky-top shadow-sm');
                } else {
                    $('.navbar').removeClass('sticky-top shadow-sm');
                }

                // Back to top button
                if (scrollTop > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }

                ticking = false;
            });
            ticking = true;
        }
    });

    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });

    // Search functionality
    $('#homeSearchForm').on('submit', function(e) {
        var searchQuery = $('#searchInput').val().trim();
        if (searchQuery === '') {
            e.preventDefault();
            alert('Please enter a search term');
            return false;
        }
    });

    // Allow Enter key to submit search
    $('#searchInput').on('keypress', function(e) {
        if (e.which === 13) {
            $('#homeSearchForm').submit();
        }
    });

})(jQuery);

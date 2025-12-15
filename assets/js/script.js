$(document).ready(function() {
    initCounterCount();
    initNavLink();
    initAnimate();
    initSearch();
    initSearchResult();
    initSidebar();
    initSidebarDropdown();
    initHeaderScroll();
    initSubmitContact();
    initSubmitNewsletter();
    initSubmitReply();
});

function initCounterCount() {
    var $counters = $(".counter");

    $counters.each(function() {
        $(this).html("0");
    });

    var observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var $el = $(entry.target);
                var target = parseInt($el.attr("data-target"));
                var current = 0;
                var duration = 2000;
                var steps = 60;
                var increment = Math.ceil(target / steps);
                var count = 0;

                function animateCount() {
                    count += increment;
                    if (count >= target) {
                        count = target;
                    }
                    // Format tampilan
                    var displayValue = "";
                    if (target >= 1000) {
                        if (target % 1000 === 0) {
                            displayValue = (target / 1000) + "K+";
                        } else {
                            displayValue = (target / 1000).toFixed(1) + "K+";
                        }
                    } else {
                        displayValue = count + "+";
                    }
                    if (target >= 1000) {
                        $el.html(displayValue);
                    } else {
                        $el.html(count + "+");
                    }
                    if (count < target) {
                        setTimeout(animateCount, duration / steps);
                    } else {
                        // Pastikan nilai akhir benar
                        if (target >= 1000) {
                            if (target % 1000 === 0) {
                                displayValue = (target / 1000) + "K+";
                            } else {
                                displayValue = (target / 1000).toFixed(1) + "K+";
                            }
                        } else {
                            displayValue = target + "+";
                        }
                        $el.html(displayValue);
                    }
                }

                animateCount();

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.6
    });

    $counters.each(function() {
        observer.observe(this);
    });
}


function initNavLink() {
    const currentUrl = window.location.href;
    $(".navbar-nav .nav-link").each(function() {
        if (this.href === currentUrl) {
            $(this).addClass("active");
        }
    });
    $(".navbar-nav .dropdown-menu .dropdown-item").each(function() {
        if (this.href === currentUrl) {
            $(this).closest(".dropdown").find(".nav-link.dropdown-toggle").addClass("active");
        }
    });
}


function initAnimate() {
    var $elements = $('[data-animate]');
    var observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                var $el = $(entry.target);
                var delay = $el.attr('data-delay') || 0;
                setTimeout(function() {
                    $el.addClass($el.attr('data-animate'));
                    $el.css('opacity', 1);
                    observer.unobserve(entry.target);
                }, delay);
            }
        });
    }, {
        threshold: 0.1
    });
    $elements.each(function() {
        observer.observe(this);
    });
}

function initSidebar() {
    var $menuBtn = $(".nav-btn");
    var $closeBtn = $(".close-btn");
    var $overlay = $(".sidebar-overlay");
    var $sidebar = $(".sidebar");

    $menuBtn.on("click", function () {
        $overlay.addClass("active");
        setTimeout(function () {
            $sidebar.addClass("active");
        }, 200);
    });

    $closeBtn.on("click", function () {
        $sidebar.removeClass("active");
        setTimeout(function () {
            $overlay.removeClass("active");
        }, 200);
    });

    $overlay.on("click", function () {
        $sidebar.removeClass("active");
        setTimeout(function () {
            $overlay.removeClass("active");
        }, 200);
    });
}

function initSidebarDropdown() {
    var $dropdownButtons = $(".sidebar-dropdown-btn");
    $dropdownButtons.on("click", function () {
        var $dropdownMenu = $(this).parent().next(".sidebar-dropdown-menu");
        var isOpen = $dropdownMenu.hasClass("active");

        $(".sidebar-dropdown-menu").not($dropdownMenu).removeClass("active");
        $dropdownMenu.toggleClass("active", !isOpen);
    });
}

function initHeaderScroll() {
    var $header = $('.header-fixed');
    var scrollThreshold = 50;

    function handleScroll() {
        if ($(window).scrollTop() > scrollThreshold) {
            $header.addClass('scrolled');
        } else {
            $header.removeClass('scrolled');
        }
    }

    handleScroll();
    $(window).on('scroll', handleScroll);
}

function initSearchResult() {
    var data = [
        {
            title: "Home",
            description: "Welcome to Lia Strategic Digital Solutions for Lasting Impact urus sit amet luctus venenatis lectus magna fringilla urna. In iaculis nunc sed augue lacus viverra vitae congue. Tincidunt augue interdum velit euismod in. Nunc mattis enim ut tellus elementum sagittis vitae et. Get Started 25 Years of Experience About Your Partner in Digital Growth and […]",
            url: "index.html"
        },
    ];

    var params = new URLSearchParams(window.location.search);
    var keyword = params.get("q");

    var $resultContainer = $("#search-results");
    var $resultTitle = $("#result-title");

    if (keyword) {
        $resultTitle.text(`Search Result for "${keyword}" Digital Marketing Agency`);

        var result = data.filter(function(item) {
            return item.title.toLowerCase().includes(keyword.toLowerCase()) ||
                   item.description.toLowerCase().includes(keyword.toLowerCase());
        });

        if (result.length > 0) {
            $resultContainer.empty();
            result.forEach(function(item) {
                var $div = $("<div>").addClass("result");
                $div.html(
                    `<a href="${item.url}"><span>${item.title}</span></a>
                    <p>${item.description}</p>`
                );
                $resultContainer.append($div);
            });
        } else {
            $resultContainer.html(`<p>No results found for the keyword.</p>`);
        }
    } else {
        $resultTitle.text("Enter search keywords.");
    }
}

function initSearch() {
    const params = new URLSearchParams(window.location.search);
    const query = params.get('q') || '';
    $('#search-title').text(`Search Result for "${query}"`);
}
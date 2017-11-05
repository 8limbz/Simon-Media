// Hide Mobile Header on scroll down

var didScrollm;
var lastScrollTopm = 0;
var deltam = 5;
var navbarHeight = $('#mobile-site-nav').outerHeight();

$(window).scroll(function(event){
    didScrollm = true;
});

setInterval(function() {
    if (didScrollm) {
        hasScrolledm();
        didScrollm = false;
    }
}, 250);

function hasScrolledm() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than deltam
    if(Math.abs(lastScrollTopm - st) <= deltam)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTopm && st > navbarHeight){
        // Scroll Down
        $('#mobile-site-nav').removeClass('mnav-up').addClass('mnav-down');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#mobile-site-nav').removeClass('mnav-down').addClass('mnav-up');
        }
    }
    
    lastScrollTopm = st;
}


//
//
//


// Hide Desktop Header on scroll down

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#desktop-header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#desktop-header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#desktop-header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
jQuery(document).ready(function($) {

    $(".gridwp-nav-secondary .gridwp-secondary-nav-menu").addClass("gridwp-secondary-responsive-menu").before('<div class="gridwp-secondary-responsive-menu-icon"></div>');

    $(".gridwp-secondary-responsive-menu-icon").click(function(){
        $(this).next(".gridwp-nav-secondary .gridwp-secondary-nav-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".gridwp-nav-secondary .gridwp-secondary-nav-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".gridwp-secondary-responsive-menu > li").removeClass("gridwp-secondary-menu-open");
        }
    });

    $(".gridwp-secondary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-secondary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-secondary-menu-open");
        });
    });

    $("div.gridwp-secondary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-secondary-menu-open");
        });
    });

    if(gridwp_ajax_object.sticky_menu){
    // grab the initial top offset of the navigation 
    var gridwpstickyNavTop = $('.gridwp-primary-menu-container').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var gridwpstickyNav = function(){
        var gridwpscrollTop = $(window).scrollTop(); // our current vertical position from the top
             
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if(gridwp_ajax_object.sticky_menu_mobile){
            if (gridwpscrollTop > gridwpstickyNavTop) {
                $('.gridwp-primary-menu-container').addClass('gridwp-fixed');
            } else {
                $('.gridwp-primary-menu-container').removeClass('gridwp-fixed'); 
            }
        } else {
            
                if(window.innerWidth > 1112) {
                    if (gridwpscrollTop > gridwpstickyNavTop) {
                        $('.gridwp-primary-menu-container').addClass('gridwp-fixed');
                    } else {
                        $('.gridwp-primary-menu-container').removeClass('gridwp-fixed'); 
                    }
                }
            
        }
    };

    gridwpstickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        gridwpstickyNav();
    });
    }

    $(".gridwp-nav-primary .gridwp-nav-primary-menu").addClass("gridwp-primary-responsive-menu").before('<div class="gridwp-primary-responsive-menu-icon"></div>');

    $(".gridwp-primary-responsive-menu-icon").click(function(){
        $(this).next(".gridwp-nav-primary .gridwp-nav-primary-menu").slideToggle();
    });

    $(window).resize(function(){
        if(window.innerWidth > 1112) {
            $(".gridwp-nav-primary .gridwp-nav-primary-menu, nav .sub-menu, nav .children").removeAttr("style");
            $(".gridwp-primary-responsive-menu > li").removeClass("gridwp-primary-menu-open");
        }
    });

    $(".gridwp-primary-responsive-menu > li").click(function(event){
        if (event.target !== this)
        return;
        $(this).find(".sub-menu:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-primary-menu-open");
        });
        $(this).find(".children:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-primary-menu-open");
        });
    });

    $("div.gridwp-primary-responsive-menu > ul > li").click(function(event) {
        if (event.target !== this)
            return;
        $(this).find("ul:first").slideToggle(function() {
            $(this).parent().toggleClass("gridwp-primary-menu-open");
        });
    });

    $(".gridwp-social-search-icon").on('click', function (e) {
        e.preventDefault();
        document.getElementById("gridwp-search-overlay-wrap").style.display = "block";
    });

    $(".gridwp-search-closebtn").on('click', function (e) {
        e.preventDefault();
        document.getElementById("gridwp-search-overlay-wrap").style.display = "none";
    });

    $(".post").fitVids();

    $( 'body' ).prepend( '<div class="gridwp-scroll-top"></div>');
    var scrollButtonEl = $( '.gridwp-scroll-top' );
    scrollButtonEl.hide();

    $( window ).scroll( function () {
        if ( $( window ).scrollTop() < 20 ) {
            $( '.gridwp-scroll-top' ).fadeOut();
        } else {
            $( '.gridwp-scroll-top' ).fadeIn();
        }
    } );

    scrollButtonEl.click( function () {
        $( "html, body" ).animate( { scrollTop: 0 }, 300 );
        return false;
    } );

    if(gridwp_ajax_object.sticky_sidebar){
    $('.gridwp-main-wrapper, .gridwp-sidebar-one-wrapper').theiaStickySidebar({
        containerSelector: ".gridwp-content-wrapper",
        additionalMarginTop: 0,
        additionalMarginBottom: 0,
        minWidth: 890,
    });
    }

});
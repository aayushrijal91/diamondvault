// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$(() => {
    $('#product-slider').slick({
        slidesToShow: 4,
        arrows: true,
        prevArrow: "<img class='a-left control-c prev slick-prev' src='assets/images/icons/slick-prev.png'>",
        nextArrow: "<img class='a-right control-c next slick-next' src='assets/images/icons/slick-next.png'>",
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    $('#watch-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
    });
});

$(".accordion-head").on('click', function () {
    $(".accordion-head").removeClass("active");
    $(this).addClass('active');

    if ($('.accordion-body').is(':visible')) {
        $(".accordion-body").slideUp(300);
    }
    if ($(this).next(".accordion-body").is(':visible')) {
        $(this).next(".accordion-body").slideUp(300);
    } else {
        $(this).next(".accordion-body").slideDown(300);
    }
});

$("#diamond-type-toggle").on('click', function() {
    $('.diamond-type-dropdown-menu').slideToggle();
})
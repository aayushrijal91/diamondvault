// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#products"], a[href="#collection"],a[href="#faq"]').forEach(function (anchor) {
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

    let watchSlider = $('#watch-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: "50px",
                    autoplay: false,
                }
            }
        ]
    });

    $('.watch-slider-goTo').on('click', function () {
        $('.watch-slider-goTo').removeClass('active');
        $(this).addClass('active');
        watchSlider.slick('slickGoTo', parseInt($(this).attr('data-slide')) - 1);
    });

    var filterActive;

    function filterCategory(cat1, cat2) {
        $('.filter-collection-results .f-cat').removeClass('active');

        var selector = ".diamond-choices-wrapper-sm .f-cat";
        if (cat1 !== 'cat-all') {
            selector = '[data-cat=' + cat1 + "]";
        }
        if (cat2 !== 'cat-all') {
            selector = selector + '[data-cat2=' + cat2 + "]";
        }

        $(selector).addClass('active');

        filterActive = cat1;
    }

    $('.diamond-choices-wrapper-sm .cat1').on('change', function () {
        $(`.diamond-choices-wrapper-sm .cat2`).removeClass('active');
        $(`.diamond-choices-wrapper-sm .cat2#${$(this).val()}`).addClass('active');
    });

    $('.diamond-choices-wrapper-sm select').on('change', function () {
        filterCategory($('.diamond-choices-wrapper-sm select.cat1').val(), $('.diamond-choices-wrapper-sm select.cat2.active').val());
    });

    $('#interestedJewellery').on('change', function () {
        let selectedGroup = $(this).val().toLowerCase();

        $('.form-options').removeClass('active');
        $('.form-sub-options').removeClass('active');
        $(`.form-options.group-${selectedGroup}`).addClass('active');

        $(`.group-${selectedGroup} select.preferredAlloy`).on('change', function () {
            if ($(this).val() == 'Gold') {
                $(`.form-sub-options.group-${selectedGroup}.sub-goldColor`).addClass('active');
                $(`.form-sub-options.group-${selectedGroup}.sub-goldCarat`).addClass('active');
            } else {
                $(`.form-sub-options.group-${selectedGroup}.sub-goldColor`).removeClass('active');
                $(`.form-sub-options.group-${selectedGroup}.sub-goldCarat`).removeClass('active');
            }
        });

        $(`.group-${selectedGroup} select.chooseDiamond`).on('change', function () {
            if ($(this).val() == 'Yes') {
                $(`.form-sub-options.group-${selectedGroup}.sub-diamondType`).addClass('active');
            } else {
                $(`.form-sub-options.group-${selectedGroup}.sub-diamondType`).removeClass('active');
            }
        });
    });


    $('select.chooseDiamond').on('change', function () {
        if ($(this).val() == 'Yes') {
            $('.form-options-diamondType').css('display', 'block');
        } else {
            $('.form-options-diamondType').css('display', 'none');
        }
    })
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

$("#diamond-type-toggle").on('click', function () {
    $('.diamond-type-dropdown-menu').slideToggle();
})
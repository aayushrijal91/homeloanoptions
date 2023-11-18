// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#home-loans"], a[href="#lenders"],a[href="#why-choose-us"],a[href="#how-it-works"]').forEach(function (anchor) {
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

let loanCap = 2000000;
let termCap = 7;
let currentBorrowAmount = $("#borrowSlider").val();

$('.sliderThumb.borrow').css('left', (currentBorrowAmount * (95 / loanCap)) + "%");
$('.progressBar.borrow').css('width', (currentBorrowAmount * (98 / loanCap)) + "%");

$('#borrowSlider').on('input', function () {
    let value = $("#borrowSlider").val();
    let formattedVal = value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    $('#borrowAmount').html(formattedVal);

    $(this).parents('.range').find('.sliderThumb').css('left', (value * (95 / loanCap)) + "%");
    $(this).parents('.range').find('.progressBar').css('width', (value * (98 / loanCap)) + "%");
});

$('#show-form-tab-2').on('click', function () {
    $('#form-tab-1').hide();
    $('#form-tab-2').fadeIn();
});

$('#form').on('submit', function (e) {
    e.preventDefault();

    let fullname = $('#fullname').val();
    let phone_number = $('#phone_number').val();
    let email = $('#email').val();
    let namePattern = /^[A-Za-z]+(?:\s[A-Za-z]+)?$/;
    let phonePattern = /^(?:\+?61|0)[2-57-8](?:\d{8}|\s\d{4}\s\d{4})$/;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    let error = !namePattern.test(fullname) || !phonePattern.test(phone_number) || !emailPattern.test(email);

    !namePattern.test(fullname) ? $('#fullname_error').fadeIn() : $('#fullname_error').hide();
    !phonePattern.test(phone_number) ? $('#phonenumber_error').fadeIn() : $('#phonenumber_error').hide();
    !emailPattern.test(email) ? $('#email_error').fadeIn() : $('#email_error').hide();

    if (!error) {
        // Use the native form submit method
        this.submit();
    }
});


$('#banks-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    autoplay: true,
    dots: true,
    responsive: [
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3,
            }
        },
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "80px",
                dots: false,
            }
        }
    ]
})
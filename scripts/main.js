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

$('#banks-slider').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    arrows: false,
    dots: true,
})
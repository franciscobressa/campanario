require('./bootstrap');

$('.link-interno').click(function(e) {
    e.preventDefault();
    var link = $(this).attr('href'),
         target = $(link).offset().top,
         header = $('header').innerHeight();

    $('html, body').animate({
        scrollTop: target - header
    }, 800)
})
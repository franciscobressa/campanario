require('./bootstrap');

header = $('header').innerHeight();

$('body').css("padding-top",header);

$(window).resize(function() {
    header = $('header').innerHeight();
    $('body').css("padding-top",header);
})

$('.link-interno').click(function(e) {
    e.preventDefault();
    var link = $(this).attr('href'),
         target = $(link).offset().top;

    $('html, body').animate({
        scrollTop: target - header + 1
    }, 800)
})
require('./bootstrap');

$('.link-interno').click(function(e) {
    e.preventDefault();
    var link = $(this).attr('href'),
         target = $(link).offset().top;

    $('html, body').animate({
        scrollTop: target 
    }, 800)
})
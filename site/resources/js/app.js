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

let color = true;

var searchFunc = function(){
    let input = $('.search-input');
    let box = $('.search-box');

    if(input.css('width') == '0px'){
        input.animate({
            width: '10vw',
        });

        box.css('background-color', '#fff')

        color = false;
    }else{
        input.animate({
            width: '0'
        });
        box.css('border-color', 'gray')

        box.css('background-color', 'transparent')

        color = true;
    }
};

$('.search-btn').click(searchFunc);

$(document).click(function(e){
    let searchBox = document.querySelector('.search-box');

    // console.log(e.target);

    if(!searchBox.contains(e.target)){
        if($('.search-input').css('width') != '0px')
            searchFunc();
    }
    
    
});

$('.search-btn').hover(function(){
    $('.search-box').css('border-color', 'rgb(0, 158, 0)')
}, function(){
        if(color){
        $('.search-box').css('border-color', 'gray')
        }
})
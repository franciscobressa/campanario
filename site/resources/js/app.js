require('./bootstrap');
require('./carrinho')

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
            width: '10vw'
        });

        box.css('margin-right', '0.8vw');
        box.animate({
            backgroundColor: 'rgb(245, 246, 247)'
        });
        
        color = false;
    }else{
        input.animate({
            width: '0'
        });

        box.css('border-color', 'transparent');
        box.css('background-color', 'rgb(245, 246, 247)');

        color = true;
    }
};

$('.search-btn').click(searchFunc);

$(document).click(function(e){
    var searchBox = document.querySelector('.search-box');

    // console.log(e.target);

    if(!searchBox.contains(e.target)){
        if($('.search-input').css('width') != '0px')
            searchFunc();
    }
    
    
});

$('.search-btn').hover(function(){
    
$('.search-box').css('border-color', 'gray');
}, function(){
        if(color){
        $('.search-box').css('border-color', 'transparent')
        }
})

$('#myalert').click(function(){
    return confirm('Certeza que deseja excluir este item?');
}
);
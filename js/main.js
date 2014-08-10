
$(function(){
    // $( "#tennant" ).attr("style", "opacity: 0.5;");
    var fade = $('.fade');
    $(window).scroll(function(){
       var percent = $(document).scrollTop() / ($(document).height() - $(window).height());
       fade.css('opacity', 1 - ( percent / 4 ) * 40 );
    });
});

$('.carousel').carousel({
  interval: 4000
})

// Scroll down slowly on anchor tag

function scrollToAnchor(aid){
    var aTag = $("div[id='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},2000);
}

$("a#slow-scroll").click(function() {
   scrollToAnchor('qualifications');
});


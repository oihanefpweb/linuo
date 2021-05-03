$(function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    slogan_intro();
    linkedin_autoplay();
    $(document).on("scroll" , function(e){
        e.preventDefault()
        background_color_change()
    });
})
function slogan_intro(){
    $('.slogan').typeIt();
}
function linkedin_autoplay(){
    window.setInterval(reloadIFrame(), 5);

    function reloadIFrame() {
        var src= $('.linkedin-video iframe').src;
        $('.linkedin-video iframe').src = src;
    }
    
}
function background_color_change(){
    if ($(document).scrollTop() >= $(".section1").position().top) {
        $('.home-content').css('background', $(".section1").attr("data-background"));
        $('.slogan').show();
    };

    if ($(document).scrollTop() > $(".section2").position().top) {
        $('.slogan').hide();
        $('.home-content').css('background', $(".section2").attr("data-background"))
    };

    if ($(document).scrollTop() > $(".section3").position().top) {
        $('.home-content').css('background', $(".section3").attr("data-background"))
    };
};



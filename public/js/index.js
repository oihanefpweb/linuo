$(function() {
    slogan_intro();
    linkedin_autoplay();
});

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
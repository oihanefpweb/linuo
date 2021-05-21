$(function() {
    var slogan_count = 0;
    var video_count = 0;
    var web_video_count = 1;
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    slogan_intro();
    linkedin_autoplay();
    $(document).on("scroll" , function(e){
        e.preventDefault()
        background_color_change()
        items_animations($(document).scrollTop())
    });
    function items_animations(y){
        console.log(y)
        if(y < 550){
            if(slogan_count == 1){
                $('.slogan-content').toggle(1000);
                slogan_count = 0;
            }
        }
        else if(y > 550){
            if(slogan_count == 0){ 
                $('.slogan-content').toggle(1000);
                slogan_count = 1;
            }
        }
        
        /* if(y < 650 || y > 1300){
            if(video_count == 1){
                $(".linkedin-video").hide( "drop", {direction: "left"}, 1000 );
                video_count = 0;
            }
        } 
        else if(y >= 750 ){
            if(video_count == 0){
                $(".linkedin-video").show( "drop", {direction: "left"}, 2000 );
                video_count = 1
            }
        }*/
        if(y < 750 || y > 1300){
            if(web_video_count == 1){
                $(".website-making-video").hide( "drop", {direction: "left"}, 500 );
                $(".web-developers-content").hide( "drop", {direction: "right"}, 500 );
                web_video_count = 0;

            }
        }
        if(y > 750 && y > 1300){
            if(web_video_count == 0){
                console.log('entra')
                $(".website-making-video").show( "drop", {direction: "left"}, 1000 );
                $(".web-developers-content").show( "drop", {direction: "right"}, 1000 );

                //$('.linkedin-video').effect("drop")
                web_video_count = 1
            }
        }
    }

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




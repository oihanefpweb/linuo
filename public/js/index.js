$(function() {
    var slogan_count = 0;
    var coding_count = 1;
    var web_video_count = 1;
    var bubble_count = 0;
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    items_animations();
    $('.floating a ').on("mouseover" , function(e){
        var img = $(this).data('floating');
        switch (img) {
            case 1:
                url = '/images/index/design.jpg'
                break;
            case 2:
                url = '/images/index/codigo.png'
                break;
            case 3:
                url = '/images/index/testing.png'
                break;
            case 4:
                url = '/images/index/coding.jpg'
                break;
            case 5:
                url = '/images/index/functionality.jpg'
                break;
        } 

        $(this).parent().css({
            'background':'url('+ url+') no-repeat',
            'background-size':' 50%'

        });
    });
    $('.floating a ').on("mouseout" , function(e){
        $(this).parent().css({
            'background':'transparent',
            'border': 'none'

        });
    });

    $(document).on("scroll" , async function(e){
        e.preventDefault();
        scrollPercent = Math.round(100 * $(window).scrollTop() / ($(document).height() - $(window).height()));
        await background_color_change();
        items_animations($(document).scrollTop());
    });
    
    function items_animations(y){
        var  total_page = $(document).height() - $(window).height()
        if(y < (total_page* 0.174)){
            if(slogan_count == 1){
                $('.slogan-content').toggle(1000);
                slogan_count = 0;
            }
        }
        if(y > (total_page* 0.174)){
            if(slogan_count == 0){ 
                $('.slogan-content').toggle(1000);
                slogan_count = 1;
            }
        }
        if(y < (total_page* 0.253) || y >(total_page* 0.537)){
            if(web_video_count == 1){
                $(".website-making-video").hide( "drop", {direction: "left"}, 500 );
                $(".web-developers-content").hide( "drop", {direction: "right"}, 900 );
                web_video_count = 0;
            }
            
        }
        if(y > (total_page* 0.253) && y < (total_page* 0.537)){
            if(web_video_count == 0){
                $(".website-making-video").toggle( "slide", {direction: "left"}, 1500 );
                $(".web-developers-content").show( "drop", {direction: "right"}, 1000 );
                web_video_count = 1
            }
        }
        
        if(y < (total_page* 0.537) || y > (total_page* 0.791)){
            if(coding_count == 1){
                $(".functionality").hide( "slide", {direction: "up"}, 1000 );
                $(".coding").hide('slide', {direction: 'up'}, 1500);
                $(".testing").hide( "slide", {direction: "up"}, 2000 );
                $(".programming").hide( "slide", {direction: "up"}, 2500 );
                $(".design").hide( "slide", {direction: "up"}, 3000 );
                coding_count = 0
            } 
        }
        if(y > (total_page* 0.537) && y < (total_page* 0.791)){
            if(coding_count == 0){
                console.log('entrs2')

                $(".design").show('slide', {direction: 'left'}, 600);
                $(".programming").show('slide', {direction: 'right'}, 600);
                $(".testing").show('slide', {direction: 'down'}, 1650);
                $(".coding").show('slide', {direction: 'left'}, 1770);
                $(".functionality").show('slide', {direction: 'right'}, 1850);
                coding_count = 1
            } 
        }
        if(y > (total_page* 0.948)){
            if(bubble_count == 0){
                if( /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                    // some code..
                    $(" #bubble-section").show(500);
                    $(".contact-us").show(500);
                    $(".contact-us").animate({
                        fontSize: "3rem"
                    }, 1000);
                }else{
                    $(" #bubble-section").show(500);
                    $(".contact-us").show(500);
                    $(".contact-us").animate({
                        fontSize: "7rem"
                    }, 1000);
                }
                bubble_count = 1
            } 
        }
        if(y < (total_page* 0.948)){
            if(bubble_count == 1){
                $("#bubble-section").hide(1000);
                $(".contact-us").css('font-size', "8px");
                $(".contact-us").hide(500);
                bubble_count = 0
            } 
        }
        
    }

});

function disableAll(){
    $('.section').css("opacity", "0");
}
function activate(index){
    $('.section'.index).css("opacity", "1");
}
function background_color_change(){
    return new Promise(resolve=>{
        if ($(document).scrollTop() >= $(".section1").position().top) {
            state = 0;
            $('.home-content').css('background', $(".section1").data("background"));
        }
        if ($(document).scrollTop() >= $(".section2").position().top) {
            state = 1;
            $('.home-content').css('background', $(".section2").data("background"));
        }
        if ($(document).scrollTop() >= $(".section3").position().top) {
            state = 2;
            $('.home-content').css('background', $(".section3").data("background"));
        }
        if ($(document).scrollTop() >= $(".section4").position().top) {
            state = 3;
            $('.home-content').css('background', $(".section4").data("background"));
        }
        resolve();
    });
};




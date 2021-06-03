$(function() {
    var slogan_count = 0;
    var coding_count = 1;
    var web_video_count = 1;
    var bubble_count = 0;
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    slogan_intro();
    $('.floating a ').on("mouseover" , function(e){
        var img = $(this).data('floating');
        switch (img) {
            case 1:
                url = '/images/index/design.jpg'
                break;
            case 2:
                url = '/images/index/programming.png'

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
    $(document).on("scroll" , function(e){
        e.preventDefault()
        background_color_change()
        items_animations($(document).scrollTop())
    });
    function items_animations(y){
        if(y < 550){
            if(slogan_count == 1){
                $('.slogan-content').toggle(1000);
                slogan_count = 0;
            }
        }
        if(y > 550){
            if(slogan_count == 0){ 
                $('.slogan-content').toggle(1000);
                slogan_count = 1;
            }
        }
        if(y < 800 || y > 1700){
            if(web_video_count == 1){
                $(".website-making-video").hide( "drop", {direction: "left"}, 500 );
                $(".web-developers-content").hide( "drop", {direction: "right"}, 900 );
                web_video_count = 0;
            }
            
        }
        if(y > 800 && y < 1700){
            if(web_video_count == 0){
                $(".website-making-video").toggle( "slide", {direction: "left"}, 1500 );
                $(".web-developers-content").show( "drop", {direction: "right"}, 1000 );
                web_video_count = 1
            }
        }
        
        if(y < 1700 || y > 2500){
            if(coding_count == 1){
                $(".functionality").hide( "slide", {direction: "up"}, 1000 );
                $(".coding").hide('slide', {direction: 'up'}, 1500);
                $(".testing").hide( "slide", {direction: "up"}, 2000 );
                $(".programming").hide( "slide", {direction: "up"}, 2500 );
                $(".design").hide( "slide", {direction: "up"}, 3000 );
                coding_count = 0
            } 
        }
        if(y > 1700 && y < 2500){
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
        if(y > 3000){
            if(bubble_count == 0){
                $(" #bubble-section").show(500);
                $(".contact-us").show(500);
                $(".contact-us").animate({
                    fontSize: "80px"
                }, 1000);
                
                
                bubble_count = 1
            } 
        }
        if(y < 3000){
            if(bubble_count == 1){
                $("#bubble-section").hide(1000);
                $(".contact-us").css('font-size', "8px");
                $(".contact-us").hide(500);
                bubble_count = 0
            } 
        }
    }

})
function slogan_intro(){
    $('.slogan').typeIt();
}
function background_color_change(){
    if ($(document).scrollTop() >= $(".section1").position().top) {
        $('.home-content').css('background', $(".section1").attr("data-background"));
    };
    if ($(document).scrollTop() >= $(".section2").position().top) {
        $('.home-content').css('background', $(".section2").attr("data-background"))
    };

    if ($(document).scrollTop() >= $(".section3").position().top) {
        $('.home-content').css('background', $(".section3").attr("data-background"))
    };
    if ($(document).scrollTop() >= $(".section4").position().top) {
        $('.home-content').css('background', $(".section4").attr("data-background"))
    };
};




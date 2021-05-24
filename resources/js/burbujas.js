
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}


$(()=>{
    const color_range = ["#d9a326","#d98826", "#d99726", "#d99126", "#d95c26", "#d94726", "#d94126"];
    const bubbles = $(".bubble-wrap").find(".bubble");
    
    if( bubbles.length > 0 )setupBubbles(0);


    function setupBubbles(index){
        let x = Math.random()*screen.width,
        y= Math.random()* screen.height,
        z = Math.random()*1000,
        translate = `translate3d(${x},${y},${z})`,
        vertical = Math.floor(Math.random()*100),
        horizontal = Math.floor(Math.random()*100);
        $(bubbles[index]).css({
            transform: ""+translate+"",
            "background-color" : color_range[Math.floor(Math.random() * color_range.length)],
            "animation-delay": `${Math.random()*5}s`,
            "top":(vertical)+"%",
            "left": (horizontal)+"%",
        });
        if(index < bubbles.length)setTimeout(setupBubbles(index+1), (Math.random()*2)*100)
    }
});
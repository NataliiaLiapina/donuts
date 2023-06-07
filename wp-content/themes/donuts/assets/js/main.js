//open mobile menu
jQuery('#burger').on('click', function(){
    jQuery(".main-navigation").toggleClass('open');
});

//play video
jQuery('#video video').on("click", function () {
    if (!jQuery(this).hasClass('clicked')) { 
        jQuery(this).addClass('clicked');
        jQuery(this).get(0).play();
    }
    else { 
        jQuery(this).removeClass('clicked'); 
        jQuery(this).get(0).pause();
      }
});

//parallax
jQuery(function(){
    let w = jQuery(window);
    w.on('scroll', function(){
        let top = jQuery(this).scrollTop();
        parallax(top);
    });
});

function parallax(top){
    jQuery('.main-screen_donut').css('transform', 'translateY(' + (top / 4) + 'px)');
}


//running text
jQuery(function() {

    var marquee = jQuery("#marquee");
    marquee.css({"overflow": "hidden", "width": "100%"});
 
    marquee.wrapInner("<span>");
    marquee.find("span").css({ "width": "50%", "display": "inline-block", "text-align":"center" });
    marquee.append(marquee.find("span").clone()); 
 
    marquee.wrapInner("<div>");
    marquee.find("div").css("width", "200%");
 
    var reset = function() {
        jQuery(this).css("margin-left", "0%");
        jQuery(this).animate({ "margin-left": "-100%" }, 12000, 'linear', reset);
    };
 
    reset.call(marquee.find("div"));
 
   });
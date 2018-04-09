/*
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
[ COMMON SCRIPTS ]
AUTHOR :Seck Mor Tall
PROJECT :Juste Prix
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
*/

(function($) {
	"use strict";

	$(window).load(function(){		
	App.loader();
	});

	var App={
            init:function()
            {
                         
              App.navigate();
              App.stats()
              App.screecarousel();
              App.scrollreveal();
             	
            },
    
    
    navigate:function()
    {
        $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    },

   stats:function()
   {
        $('.our-stats-box').each(function () {
        $('.our-stat-info').fappear(function (direction) {
            $('.stats').countTo();
        }, {offset: "100px"});
    });
   },
   
     menuAnimation:function()
   {
       $(window).scroll(function()
       {
       var top_v=$(window).scrollTop();
       var themecolor="#f8198d";
      if(top_v>=10)
      {
        
          $(".amd-menu").css({height:"80px",padding:"15px",background:"#fff",boxShadow:"2px 2px 3px 3px rgba(0,0,0,0.3"});
          $(".amd-menu.navbar-default .navbar-nav > li > a,a.navbar-brand").css("color","#000");
           $(".amd-menu.navbar-default .navbar-nav > li > a").hover(function(){$(this).css("color",themecolor)},function(){$(this).css("color","#000")})
       }
      else
      {
          $(".amd-menu").css({height:"0px",padding:"15px",background:"#000",boxShadow:"2px 2px 3px 3px rgba(0,0,0,0.3"});
          $("a.navbar-brand").css("color","#fff");          
          $(".amd-menu.navbar-default .navbar-nav > li > a").css("color","#fafafa");
          $(".amd-menu.navbar-default .navbar-nav > li > a:hover").css("color",themecolor);
          $(".amd-menu.navbar-default .navbar-nav > li > a").hover(function(){$(this).css("color",themecolor)},function(){$(this).css("color","#fafafa")})
      }
       }
       )
   },
   
   screecarousel:function()
   {
     $('.carousel[data-type="multi"] .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
  
   },

   
   loader:function()
			{
                         
			 $("div.preloader").fadeOut("slow");
                         
                         
			},
                        scrollreveal:function()
    {
        window.scrollReveal = new scrollReveal();
    }
    
			
        };
        App.init();

})(jQuery);

// Navigation Scripts to Show Header on Scroll-Up


/*+++++++++++++++++++++++++COMMON FUNCTIONS++++++++++++++++++++++++++++*/

/*KENBERG SLIDER*/

 var fullscreenslider=function()
  {
      $("section.main-gallery").vegas({
	delay: 3000,
    slides: [
        { src: "images/aliment.jpg" },
        { src: "images/visuel2.jpeg" },
        { src: "images/visuel03.jpg" },
        { src: "images/visuel04.jpg" }
    ],animation: 'kenburns'
});
  }
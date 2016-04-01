(function($){
    var statusSearch = 0;
    var timeSearch = null;
    var delaySearch = 5000;

    var setMenuMobile = function(){
        $("#btn-menu").on("click",function(){
            if($("body").hasClass("show-menu")){
                closeMenuMobile();
            }else{
                $("body").addClass("show-menu");
                var height_device = $(window).height();
//                var width_device = $(window).width();
                var padding_menu = 30;
               /* if(width_device < 640){
                    padding_menu = 45;
                }*/
                var height_menu = $("#menu-mobile .inner").height() + padding_menu;
                /*if(height_menu <= height_device){
                    height_menu = height_device;
                }*/
                $("#wrapper").css({height: height_menu});
                $("#overlay").css({display: "block"});
            }
        });
    };

    var resetMenuMobile = function(){
        $("#overlay").on("click",function(){
            closeMenuMobile();
        });
    };
    var closeMenuMobile = function(){
        $("body").removeClass("show-menu");
        $("#wrapper").removeAttr("style");
        $("#overlay").css({display: "none"});
    };

    var checkSearch = function(){
        if(statusSearch == 0){
            window.clearTimeout(timeSearch);
            timeSearch = window.setTimeout(function(){
                $("#box-search").stop().animate({width: 230});
            },0);
        }else{
            window.clearTimeout(timeSearch);
            timeSearch = window.setTimeout(function(){
                $("#box-search").stop().animate({width: 30});
            },delaySearch);
        }
    };

    var changeSearch = function(){
        $("#box-search").hover(function(){
            checkSearch();
            statusSearch = 1;
        },function(){
            checkSearch();
            statusSearch = 0;
        });
    };

    var slideHomepage = function(){
        $('#slide-homepage').owlCarousel({
            loop:true,
            margin:0,
            responsiveClass:true,
            autoplay : 5000,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:1,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };

    var slideEvents = function(){
        $('#slide-events').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true
        });
    };
    var slideProject = function(){
        $('#slide-project').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                640:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:false,
                    loop:true
                }
            }
        });
    };

    var slideNewQuestion = function(){
        $('#slide-new-question').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                640:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:false,
                    loop:true
                }
            }
        });
    };

    var slideIntro = function(){
        $('#slide-intro').owlCarousel({
            loop:true,
            margin:20,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:2,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };

    var slideOffice = function(){
        $('#slide-office').owlCarousel({
            loop:true,
            margin:20,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:1,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };
    var slideOffice01 = function(){
        $('#slide-office01').owlCarousel({
            loop:true,
            margin:20,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:1,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };

    var slideQuestion = function(){
        $('#slide-question').owlCarousel({
            loop:true,
            margin:20,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true,
                    dots: false
                },
                640:{
                    items:2,
                    nav:true,
                    dots: false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true,
                    dots: false
                }
            }
        });
    };
    var tabContent = function(){
        $("a[data-type='tab']").on('click',function(e){
            e.preventDefault();
            var parent = $(this).data('parent');
            var content = $(this).data('content');
            var reset = $(this).data('reset');
            $("." + parent + " li").removeClass('active');
            $(this).parent("li").addClass('active');
            $("."+reset).css({display:"none"});
            $("#"+content).css({display:"block"});
        });
    };
    var equalHeight = function(selector) {
        minheight = 0;
        $(selector).each(function() {
            thisheight = $(this).height();
            if (thisheight > minheight) {
                minheight = thisheight
            }
        });
        minheight = minheight + 2;
        $(selector).css("min-height", minheight)
    };
    $("#content div").hide(); // Initially hide all content
    $("#tabs li:first").attr("id","current"); // Activate first tab
    $("#content div:first").fadeIn(); // Show first tab content
    $('#tabs li a').click(function(e) {
        e.preventDefault();
        if ($(this).attr("id") == "current"){ //detection for current tab
         return       
        }
        else{             
        $("#content div").hide(); //Hide all content
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $( $(this).attr('href')).fadeIn(); // Show content for current tab
        }
    });
    
    jQuery(document).ready(function() {
        changeSearch();
        slideIntro();
        slideOffice();
        slideOffice01();
        slideEvents();
        slideProject();
        slideNewQuestion();
        slideQuestion();
        setMenuMobile();
        resetMenuMobile();
        slideHomepage();
        tabContent();
    });
})(jQuery);


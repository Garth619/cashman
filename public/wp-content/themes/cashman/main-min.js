jQuery(document).ready((function($){$("body").addClass("ilawyer-ready"),$(".wistia_embed").on("click",(function(){const e=this,s=$(this).attr("data-wistia");"undefined"==typeof Wistia&&function(e,s){jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js",(function(i,o,t){var n=setInterval((function(){$(e).attr("id")&&window._wq&&(_wq.push({id:s,onReady:function(e){e.play()}}),clearInterval(n))}),100)}))}(e,s)})),function(e,s,i,o,t,n){if(jQuery("#"+e).length)new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(s).addClass(i),"function"==typeof t&&(t(),this.destroy())):"up"===e&&n&&jQuery(s).removeClass(i)},offset:o})}("section-one","#body","mobile-header-change",68,null,!0),$((function(){$('a[href*="#"]:not([href="#"])').click((function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if((e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}}))})),$("#sec-two-sp").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:974,settings:{fade:!1,arrows:!1,slidesToShow:3,slidesToScroll:3}}]}),$(".logos-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,slidesToShow:3,slidesToScroll:3}},{breakpoint:974,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:1800,settings:{slidesToShow:5,slidesToScroll:5}}]}),$("#sec-four-testimonials").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,fade:!0,dots:!0,arrows:!1,responsive:[{breakpoint:1199,settings:{slidesToShow:1,slidesToScroll:1,dots:!1,arrows:!0,prevArrow:"#sec-four-arrow-left",nextArrow:"#sec-four-arrow-right"}}]}),$("#sec-six-case-results").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,adaptiveHeight:!1,slidesToShow:3,slidesToScroll:3}},{breakpoint:974,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1649,settings:{slidesToShow:4,slidesToScroll:4}}]}),$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href"),$("span.go-back").on("click",(function(e){window.history.back()})),$(".widget_nav_menu ul.menu > li.menu-item-has-children a").on("click",(function(e){$(this).toggleClass("active"),$(this).next("ul").toggleClass("open")}));var e=window.location.href;function s(){$("header nav").addClass("nav_desktop"),$("header nav li.menu-item-has-children > a").next("ul.sub-menu").removeClass("open"),$("header nav").removeClass("nav_device")}function i(){$("header nav").removeClass("nav_desktop"),$("header nav").addClass("nav_device")}function o(){$(this).parent().toggleClass("active"),$(this).toggleClass("active"),$(this).next("ul.sub-menu").toggleClass("active")}$(".widget_block ul li").each((function(){$(this).find("a").attr("href")==e&&$(this).addClass("blog-active")})),$("#menu-wrap").on("click",(function(e){$("nav").slideToggle("slow"),$("body").toggleClass("ilawyer-menu-open"),$("html, body").toggleClass("ilawyer-fixed")})),$(window).width()>=1200&&s(),$(window).width()<1200&&(i(),$("header nav li.menu-item-has-children > a").off().on("click",o)),$(window).resize(_.debounce((function(){$(window).width()>=1200&&(s(),$("header nav li.menu-item-has-children > a").off("click",o)),$(window).width()<1200&&(i(),$("header nav li.menu-item-has-children > a").off().on("click",o))}),100))}));
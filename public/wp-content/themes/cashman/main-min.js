jQuery(document).ready((function($){function e(e,i,s,o,t,n){if(jQuery("#"+e).length)new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(i).addClass(s),"function"==typeof t&&(t(),this.destroy())):"up"===e&&n&&jQuery(i).removeClass(s)},offset:o})}$("body").addClass("ilawyer-page-loaded"),$(".wistia_embed").on("click",(function(){const e=this,i=$(this).attr("data-wistia");"undefined"==typeof Wistia&&function(e,i){jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js",(function(s,o,t){var n=setInterval((function(){$(e).attr("id")&&window._wq&&(_wq.push({id:i,onReady:function(e){e.play()}}),clearInterval(n))}),100)}))}(e,i)})),e("section-one","#body","mobile-header-change",68,null,!0),e("internal-main","#body","mobile-header-change",68,null,!0),$((function(){$('a[href*="#"]:not([href="#"])').click((function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if((e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}}))})),$(".selling-points-slides").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:974,settings:{fade:!1,arrows:!1,slidesToShow:3,slidesToScroll:3}}]}),$(".logos-slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,slidesToShow:3,slidesToScroll:3}},{breakpoint:974,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1100,settings:{slidesToShow:4,slidesToScroll:4}},{breakpoint:1800,settings:{slidesToShow:5,slidesToScroll:5}}]}),$("#sec-four-testimonials").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,fade:!0,dots:!0,arrows:!1,responsive:[{breakpoint:1199,settings:{slidesToShow:1,slidesToScroll:1,dots:!1,arrows:!0,prevArrow:"#sec-four-arrow-left",nextArrow:"#sec-four-arrow-right"}}]}),$("#sec-six-case-results").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,arrows:!1,adaptiveHeight:!0,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,arrows:!1,adaptiveHeight:!1,slidesToShow:3,slidesToScroll:3}},{breakpoint:974,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:1649,settings:{slidesToShow:4,slidesToScroll:4}}]}),$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href"),$("span.go-back").on("click",(function(e){window.history.back()})),$(".widget_nav_menu ul.menu > li.menu-item-has-children a").on("click",(function(e){$(this).toggleClass("active"),$(this).next("ul").toggleClass("open")}));var i=window.location.href;function s(){$("header nav").addClass("nav_desktop"),$("header nav li.menu-item-has-children > a").next("ul.sub-menu").removeClass("open"),$("header nav").removeClass("nav_device")}function o(){$("header nav").removeClass("nav_desktop"),$("header nav").addClass("nav_device")}function t(){$(this).parent().toggleClass("active"),$(this).toggleClass("active"),$(this).next("ul.sub-menu").toggleClass("active")}$(".widget_block ul li").each((function(){$(this).find("a").attr("href")==i&&$(this).addClass("blog-active")})),$(".single-accolade-title").on("click",(function(e){$(this).toggleClass("active"),$(this).next(".single-accolade-content").slideToggle()})),$("#menu-wrap").on("click",(function(e){$("nav").slideToggle("slow"),$("body").toggleClass("ilawyer-menu-open"),$("html, body").toggleClass("ilawyer-fixed")})),$(window).width()>=1200&&s(),$(window).width()<1200&&(o(),$("header nav li.menu-item-has-children > a").off().on("click",t)),$(window).resize(_.debounce((function(){$(window).width()>=1200&&(s(),$("header nav li.menu-item-has-children > a").off("click",t)),$(window).width()<1200&&(o(),$("header nav li.menu-item-has-children > a").off().on("click",t))}),100))}));
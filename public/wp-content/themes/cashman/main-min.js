jQuery(document).ready((function($){$("body").addClass("ilawyer-ready"),$(".wistia_embed").on("click",(function(){const e=this,n=$(this).attr("data-wistia");"undefined"==typeof Wistia&&function(e,n){jQuery.getScript("https://fast.wistia.com/assets/external/E-v1.js",(function(t,a,i){var o=setInterval((function(){$(e).attr("id")&&window._wq&&(_wq.push({id:n,onReady:function(e){e.play()}}),clearInterval(o))}),100)}))}(e,n)})),function(e,n,t,a,i,o){if(jQuery("#"+e).length)new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(n).addClass(t),"function"==typeof i&&(i(),this.destroy())):"up"===e&&o&&jQuery(n).removeClass(t)},offset:a})}("section-one","#body","mobile-header-change",68,null,!0),$((function(){$('a[href*="#"]:not([href="#"])').click((function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if((e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length)return $("html, body").animate({scrollTop:e.offset().top},1e3),!1}}))})),$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href"),$("span.go-back").on("click",(function(e){window.history.back()})),$(".widget_nav_menu ul.menu > li.menu-item-has-children a").on("click",(function(e){$(this).toggleClass("active"),$(this).next("ul").toggleClass("open")}));var e=window.location.href;function n(){$("header nav").addClass("nav_desktop"),$("header nav li.menu-item-has-children > a").next("ul.sub-menu").removeClass("open"),$("header nav").removeClass("nav_device")}function t(){$("header nav").removeClass("nav_desktop"),$("header nav").addClass("nav_device")}function a(){$(this).parent().toggleClass("active"),$(this).toggleClass("active"),$(this).next("ul.sub-menu").toggleClass("active")}$(".widget_block ul li").each((function(){$(this).find("a").attr("href")==e&&$(this).addClass("blog-active")})),$("#menu-wrap").on("click",(function(e){$("body").toggleClass("ilawyer-menu-open"),$("html, body").toggleClass("ilawyer-fixed")})),$(window).width()>=1200&&n(),$(window).width()<1200&&(t(),$("header nav li.menu-item-has-children > a").off().on("click",a)),$(window).resize(_.debounce((function(){$(window).width()>=1200&&(n(),$("header nav li.menu-item-has-children > a").off("click",a)),$(window).width()<1200&&(t(),$("header nav li.menu-item-has-children > a").off().on("click",a))}),100))}));
(function(e){e(function(){e('#main-content .view-header a[href="#Mark"]').addClass("active");e("#main-content .view-header a").click(function(){e(".view-header .active").removeClass("active");e(this).addClass("active");e("#main-content > ul li:visible").hide();e(e(this).attr("href")).fadeIn();e("body").scrollTop()<400&&e("html, body").animate({scrollTop:420},600);var t=e(this).attr("id");e('.view-filters input[type="text"]').val(t);e('.view-filters input[type="submit"]').click();return!1})})})(jQuery);
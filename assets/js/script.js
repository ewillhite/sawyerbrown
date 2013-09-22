(function ($) {

  // Menu Hover
  $("header nav li").hover(function() {
    $(this).children("a").addClass('active');
    $(this).children('ul').addClass('shown');
  }, function() {
    $(this).children('ul').removeClass('shown');
    $(this).children("a").removeClass('active');
  });

})(jQuery);

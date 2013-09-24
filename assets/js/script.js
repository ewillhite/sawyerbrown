(function ($) {

$(function() {
  // Menu Hover
  if ($("#logo").css("width") == '166px') {
    // Mobile Menu Hover
    $("header nav").hover(function() {
      $(this).children("ul").addClass("shown");
    }, function() {
      $(this).children("ul").removeClass("shown");
    });
  }
  else {
    // Desktop Menu Hover
    $("header nav li").hover(function() {
      $(this).children("a").addClass('active');
      $(this).children('ul').addClass('shown');
    }, function() {
      $(this).children('ul').removeClass('shown');
      $(this).children("a").removeClass('active');
    });
  }

  // ALBUMS

  // Disable Track Links
  $(".node-mp3-track h2 a, .lyrics").click(function() {
    return false;
  })

  // icon play button
  $(window).load(function() {
    $(".mejs-controls .mejs-play button").text("A");
  });

  // Lyrics
  $("<a href='#' class='lyrics'>Lyrics</a>").insertBefore(".node-mp3-track .content > div:hidden").toggle(function() {
    $(this).next().show();
  }, function() {
    $(this).next().hide();
  });

});

})(jQuery);

(function ($) {

  $(function() {

    $('#main-content .view-header a[href="#Mark"]').addClass('active');
    $('#main-content .view-header a').click(function() {
      $('.view-header .active').removeClass('active');
      $(this).addClass('active');
      $('#main-content > ul li:visible').hide();
      $($(this).attr('href')).fadeIn();
      if ($('body').scrollTop() < 400) {
        $('html, body').animate({ scrollTop: 420 }, 600);
      }
      var nid = $(this).attr('id');
      $('.view-filters input[type="text"]').val(nid);
      $('.view-filters input[type="submit"]').click();
      return false;
    });

  });

})(jQuery);


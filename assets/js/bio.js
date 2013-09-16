(function ($) {

  $(function() {

    $('#main-content .view-header a[href="#Mark"]').addClass('active');
    $('#main-content .view-header a').click(function() {
      $('.view-header .active').removeClass('active');
      $(this).addClass('active');
      $('#main-content > ul li:visible').hide();
      $($(this).attr('href')).fadeIn();
      if ($('body').scrollTop() < 400) {
        $('html, body').animate({ scrollTop: 400 }, 600);
      }
      var url = '/node/' + $(this).attr('id') + ' #post-inner > div';
      $(".view-empty").load(url, function() {
        Drupal.attachBehaviors('.view-empty > div');
      });
      return false;
    });

  });

})(jQuery);


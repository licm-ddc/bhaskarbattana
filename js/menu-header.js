$(window).scroll(function() {
      if ($(this).scrollTop() > 125){
          $('#menu-header').addClass("header-sticky");
      }
      else{
          $('#menu-header').removeClass("header-sticky");
      }
  });

  $(".dropdown").hover(
    function() {
        $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    },
    function() {
        $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
        $(this).toggleClass('open');
        $('b', this).toggleClass("caret caret-up");
    }
  );

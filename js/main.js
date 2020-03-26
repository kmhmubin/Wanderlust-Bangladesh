(function($) {
  ("use strict");

  // search active code
  $("#search-btn, #closeBtn").on("click", function() {
    $("body").toggleClass("search-form-on");
  });
  // sticky active
  var $window = $(window);
  $window.on("scroll", function() {
    if ($window.scrollTop() > 0) {
      $("body").addClass("sticky");
    } else {
      $("body").removeClass("sticky");
    }
  });

  // animation
  var contentWayPoint = function() {
    var i = 0;
    $(".element-animate").waypoint(
      function(direction) {
        if (
          direction === "down" &&
          !$(this.element).hasClass("element-animated")
        ) {
          i++;

          $(this.element).addClass("item-animate");
          setTimeout(function() {
            $("body .element-animate.item-animate").each(function(k) {
              var el = $(this);
              setTimeout(function() {
                var effect = el.data("animate-effect");
                if (effect === "fadeIn") {
                  el.addClass("fadeIn element-animated");
                } else if (effect === "fadeInLeft") {
                  el.addClass("fadeInLeft element-animated");
                } else if (effect === "fadeInRight") {
                  el.addClass("fadeInRight element-animated");
                } else {
                  el.addClass("fadeInUp element-animated");
                }
                el.removeClass("item-animate");
              }, k * 100);
            });
          }, 100);
        }
      },
      { offset: "95%" }
    );
  };
  contentWayPoint();
})(jQuery);

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });

  $(".fa-bars").on("click", function(){
    $("div.navigation").addClass("flexplicit");
  });

  $("a").on("click", function(){
    $("div.navigation").removeClass("flexplicit");
  });


  //   true if current device is iPhone, iPad or iPod
  if (is.ios() === true) {
    $(".tiffany").removeClass('wow');
    $(".projectInfo").removeClass('wow');
    $(".projectPhoto").removeClass('wow');
  }

});

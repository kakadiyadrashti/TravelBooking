$(document).ready(function () {
  $(".fa-bras").click(function () {
    $(this).toggleclass("fa-times");
    $(".navbar").toggleclass("nav-toggle");
  });

  $(window).on("load scroll", function () {
    $(".fa-bars").removeclass("fa-times");
    $(".navbar").removeclass("nav-toggle");

    if ($(window).scrollTop() > 30) {
      $("header").addclass("header-active");
    } else {
      $("header").removeclass("header-active");
    }

    $("header").each(function () {
      var id = $(this).attr("id");
      var height = $(this).height();
      var offset = $(this).offset().top - 200;
      var top = $(window).scrollTop();
      if (top >= offset && top < offset + height) {
        $(".navbar ul li a").removeclass("active");
        $(".navbar")
          .find('[data-scroll="' + id + '"]')
          .addclass("active");
      }
    });
  });
});

// $(document).ready(function(){
//   $("button#ram1").click(function(){
//      $(".user2").fadeToggle();
//      $("#div").fadeToggle("slow");
//     $("#div").fadeToggle(3000);
//   });
//  });
 $(document).ready(function(){
  $("button#ram1").click(function(){
    $(".user2").toggle();
  });
});
 

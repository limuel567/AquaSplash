$('#footer').css('margin-top',$(document).height() - ($('#header').height() + $('#content').height()  ) - $('#footer').height());


 $('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: 0
    }, 700);
});

 
 //paste this code under the head tag or in a separate js file.
  // Wait for window load
  $(window).on("load",function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
 
 
 
 
 
 
 
 
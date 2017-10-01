$(".navbar").click(function () {

  $navbar = $(this);
  //getting the next element
  $content = $navbar.next();
  //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
  $content.slideToggle(500, function () {
    //execute this after slideToggle is done
    //change text of header based on visibility of content div
    $navbar.text(function () {
      //change text based on condition
      return $content.is(":visible") ? "Collapse" : "Expand";
    });
  });

});
/*end fix the error*/

/*smooth scroll */
$(document).ready(function(){
  'use strict';
  $('.nav-link').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    || location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

/* End of SMOOTH SCROLL */


/*sending email with ajax */

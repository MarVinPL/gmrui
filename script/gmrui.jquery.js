// GMRUI Jquery
//

$(document).ready(function () {
  // Mobile Menu
  //
  function mobileMenu() {
    $('.nav-ctrl').click(function(){  
      //Toggle Class
      $("#sidemenu").toggleClass("visible");  
    });
  }
  mobileMenu();
});
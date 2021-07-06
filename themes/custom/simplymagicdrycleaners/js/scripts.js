(function ($, Drupal, window, document, undefined) {
  Drupal.behaviors.moreless = {
    attach: function (context, settings) {
      $(document).ready(function () {

        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'assets/particles.json', function () {
          console.log('callback - particles.js config loaded');
        });
        // $(".burger").click(function () {
        //   $(".header-nav-links").animate({
        //     width: 'toggle'
        //   }, 1000);
        //   $(".header-nav-links li").fadeToggle("slow", "linear");
        // });

        const hamburger = document.querySelector(".burger");
        const navLinks = document.querySelector(".prod-nav");
        const links = document.querySelectorAll(".prod-nav li");

        hamburger.addEventListener("click", () => {
          navLinks.classList.toggle("open");
          hamburger.classList.toggle('toggle');
        });

      });
    }
  };


})(jQuery, Drupal, this, this.document);
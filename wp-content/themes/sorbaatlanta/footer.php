<footer class="footer" role="contentinfo">
  <div class="footer-links">
    <ul>
      <li>
        <h6>&copy; <?php echo date('Y'); ?> SorbaAtlanta.org</h6></li>
      <li>design by <a href="http://www.resolutionathens.com">resolutionathens.com</a></li>
    </ul>
    <ul>
      <li>
        <h6>Follow Us</h6></li>
          <div class="socials">
              <a href="https://www.facebook.com/SORBA-Atlanta-Southern-Off-Road-Bicycle-Association-355177060787/"><img src="/assets/img/facebook.png"></a>
              <a href="https://twitter.com/SORBAAtlanta"><img src="/assets/img/twitter.png"></a>
              <a href="https://www.instagram.com/sorbaatlanta/"><img src="/assets/img/instagram.png"></a>
            </div>
    </ul>
    <ul>
      <li>
        <h6>Sign up for our newsletter</h6></li>
      <li>
        <form action="" method="post" id="subForm">
          <input type="email" name="email" id="email-input" placeholder="example@domain.com">
          <input type="submit" value="SIGN ME UP!" class="button">
        </form>
      </li>
    </ul>
  </div><!-- end footer links -->
</footer>
  <script>
    jQuery(window).on("load resize", function (e) {

      var more = document.getElementById("js-centered-more");
      var windowWidth = jQuery(window).width();
      var moreLeftSideToPageLeftSide = jQuery(more).offset().left;
      var moreLeftSideToPageRightSide = windowWidth - moreLeftSideToPageLeftSide;

      if (moreLeftSideToPageRightSide < 330) {
        jQuery("#js-centered-more .submenu .submenu").removeClass("fly-out-right");
        jQuery("#js-centered-more .submenu .submenu").addClass("fly-out-left");
      }

      if (moreLeftSideToPageRightSide > 330) {
        jQuery("#js-centered-more .submenu .submenu").removeClass("fly-out-left");
        jQuery("#js-centered-more .submenu .submenu").addClass("fly-out-right");
      }

      var menuToggle = jQuery("#js-centered-navigation-mobile-menu").unbind();
      jQuery("#js-centered-navigation-menu").removeClass("show");

      menuToggle.on("click", function (e) {
        e.preventDefault();
        jQuery("#js-centered-navigation-menu").slideToggle(function () {
          if (jQuery("#js-centered-navigation-menu").is(":hidden")) {
            jQuery("#js-centered-navigation-menu").removeAttr("style");
          }
        });
      });
    });
  </script>

<?php wp_footer(); ?>
</body>
</html>
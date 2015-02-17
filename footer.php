<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Red_PAFC
 */
?>

    <div id="footer" class="animated fadeInDown fadeIn" data-animation-target="21">
      <div class="col_footer">
        <h2>About Us</h2>
        <div class="footer_logo"><img src="images/home/logo_footer.png" alt=""></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Repudiandae aspernatur, ratione voluptatum a, quam voluptate quibusdam
    reiciendis cupiditate quia fugiat earum, vero eveniet reprehenderit.</p>

        <div class="divider_padding small"></div>

        <h2>Our location</h2>

        <ul class="footer_adress">
          <li><i class="fa fa-envelope"></i>1090 California Street, 3dn Floor, Punta del Este, Uruguay.</li>
          <li><i class="fa fa-mobile fa-2x"></i>+124 456 789 / +000 123 456</li>
        </ul>


        <div class="divider_padding small"></div>

        <h2>Social</h2>

        <ul class="footer_icon">
          <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-behance fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
          <li><a href="#"><i class="fa fa-github-square fa-2x"></i></a></li>
        </ul>

      </div>

      <div class="col_footer middle">
          <h2>Our latest tweets</h2>
        <div class="tweet"><span>Loading...</span></div>
      </div>

      <div class="col_footer">
        <h2>Contact</h2>

        <form method="post" class="reply-input" action="send.php">

          <input name="name" id="comment-name" required="" value="Your name (required)" onblur="if(this.value=='')this.value='Your name (required)'" onfocus="if(this.value=='Your name (required)')this.value=''" type="text">
          <input name="email" id="comment-email" required="" value="Your email (required)" onblur="if(this.value=='')this.value='Your email (required)'" onfocus="if(this.value=='Your email (required)')this.value=''" type="email">
          <input name="website" id="comment-url" value="Your website" onblur="if(this.value=='')this.value='Your website'" onfocus="if(this.value=='Your website')this.value=''" type="text">
          <textarea name="message" id="comment-message" cols="88" rows="6" required="" onblur="if(this.value=='')this.value='Your message'" onfocus="if(this.value=='Your message')this.value=''">Your message</textarea>
          <div class="clear"></div>
          <input class="submit_buttom" value="Send Message" type="submit">

        </form>

      </div>
      <div class="clear"></div>
    </div>
    <div id="subfooter">
      <div class="copyright">
        <span>Programa de apoyo a la formación continua | <a href="#">Ver aviso de privacidad</a></span>
      </div>
      <div class="by_author">
        <span>Pixel & Code by <strong>Breecode</strong></span>
      </div>
    </div>



    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/vendor.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/scripts/main.js"></script>
</body>
</html>

<footer>
  <div class="footer-nav-wrap">
    <section class="footer-nav">
      <h3 class="title-footer-nav">SHOPPING NAVI</h3>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'footer-nav-1',
        'menu_class'=> 'footer-shopping-nav'
      ));
      ?>

    </section>
    <section class="footer-nav">
      <h3 class="title-footer-nav">FOR CUSTOMER</h3>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'footer-nav-2',
        'menu_class'=> 'footer-customer-nav'
      ));
      ?>

    </section>
    <section class="footer-nav">
      <h3 class="title-footer-nav">SIGN IN/UP</h3>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'footer-nav-3',
        'menu_class'=> 'footer-membership-nav'
      ));
      ?>

    </section>
    <section class="footer-nav">
      <h3 class="title-footer-nav">OFFICIAL SNS</h3>
      <ul class="footer-sns-nav">
        <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram fa-2x"></i></a></li>
        <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter fa-2x"></i></a></li>
        <li><a href="#" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square fa-2x"></i></a></li>
      </ul>
    </section>
  </div>
  <section class="footer-access-guide">
    <div class="title-footer-nav-wrap">
      <h3 class="title-footer-nav">ACCESS GUIDE</h3>
      <p>Feuille</p>
      <address>〒880-0811 宮崎県宮崎市錦町１丁目１<br><a class="tel" href="tel:0000-00-0000">TEL：0000-00-0000</a> / Mail：mag@example.com</address>
      <nav class="btn-view-map"><a href="#">VIEW MAP<img src="<?php echo get_template_directory_uri(); ?>/images/viewmap-icon.svg" alt="google mapを開く" width="10" height="10"></a></nav>
    </div>
    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3386.681869380904!2d131.42263511477398!3d31.915240034731255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3538b7c73abedf53%3A0x1e3b13cc6b1915a5!2z5qCq5byP5Lya56S-44G-44Gq44Gz44Go!5e0!3m2!1sja!2sjp!4v1583997519272!5m2!1sja!2sjp" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
  </section>
  <small class="copyright">&copy;Copyright</small>
</footer>
<div id="pagetop" class="pagetop"><img src="<?php echo get_template_directory_uri(); ?>/images/pagetop.svg" alt="ページトップ" width="35" height="35"></div>
<?php wp_footer();?>
</body>
</html>

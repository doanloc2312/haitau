<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xs-12">
        <a class="footer-logo" href="<?= home_url()  ?>"><img src="<?= get_template_directory_uri()  ?>/assets/img/logo-footer.png" alt="Hải tầu"></a>
        <p>The time has finally come. You’ve poured your blood, sweat, and tears into</p>
        <div class="footer-social">
          <h4>Liên kết với chúng tôi</h4>
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-xs-12">
        <h4 class="footer-title">LIÊN HỆ - ĐỊA CHỈ</h4>
        <div class="information">
          <p class="address">Tòa nhà Nam Anh, số 2, 63 Đường Lê Đức Thọ, Mỹ Đình, Từ Liêm, Hà Nội</p>
          <p class="phone"><a href="tel:077 486 1688">077 486 1688</a> <a href="tel:078 486 1688">078 486 1688</a>
          <p class="mail"><a href="mailto:haitauadflex@info.vn">haitauadflex@info.vn</a></p>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <h4 class="footer-title">HỖ TRỢ KHÁCH HÀNG</h4>
        <?php 
               wp_nav_menu( array(
                                    'container'         => 'ul',                
                                    'theme_location'    => 'footer-menu',
                                    'menu_id'           => 'footer-menu',
                                    
                                ) ); 
                                ?>

      </div>
    </div>
  </div>
  <div class="copyright text-center">
    Copyright © 2020 HaiTau. All Rights Reserved.
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
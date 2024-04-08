<footer>
    <div id="footer-box">  
      <div id="footer-logo-navi">    
        <!-- ロゴをクリックすると、トップページのトップに遷移するようロゴにリンクを設定 -->
        <a href="<?php echo esc_url(home_url()); ?>#">  
              <img id="footer_logo" src="<?php echo get_template_directory_uri();?>/images/white_logo.jpg" alt="フッターロゴ">
        </a>         
        <nav id="footer_navi">             
           <a href="<?php echo esc_url(home_url()); ?>#business" >事業内容</a>
           <a href="<?php echo esc_url(home_url('/page/company/')); ?>">会社情報</a>
           <a href="<?php echo esc_url(home_url('/category/news/')); ?>">お知らせ</a>
           <a href="<?php echo esc_url(home_url('/page/contact/')); ?>">お問い合わせ</a>
           <!-- ↑↓ 会社情報のページに遷移するように、URLを書く。会社情報と問い合わせだから、固定ページかな。。。 -->
        </nav>       
      </div>  
      <p id="copyright">&copy;2024 IT Consultants, Inc.</p>
    </div>
  </footer>
  <script src="js/script.js"></script>
  <?php wp_footer(); ?>
</body>
</html>

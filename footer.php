<footer>
    <div id="footer-box">        
        <img id="footer_rogo" src="<?php echo get_template_directory_uri();?>/images/footer_rogo.jpg" alt="ヘッダーロゴ">
        <p id="copyright">&copy;2024 IT Consultants, Inc.</p>
        <nav id="footer_navi">                         
           <a href="<?php echo esc_url(home_url()); ?>#business" >事業内容</a>
           <a href="<?php echo esc_url(home_url()); ?>#BUSINESS" >会社情報</a>
           <a href="<?php echo esc_url(home_url('/category/news/')); ?>" >お問い合わせ</a>
           <!-- ↑　↓　会社情報のページに遷移するように、URLを書く。会社情報と問い合わせだから、固定ページかな。。。 -->
        </nav>       
      </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>

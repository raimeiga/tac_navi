<!-- お問い合わせページ -->
<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->
<main>
   <section id="page-contact">
      <div class="wrapper">
        <h1 id="title-contact_j">法人のお客様向けサービスに関するお問い合わせ</h1>
        <h2 id="title-contact_e">contact</h2>
      </div>
   </section>

   <section id="contact-info">
      <!-- パンくずリスト  -->
      <div class="breadcrumb">
        <ul class="breadcrumbs">
          <li><a id="rumb_01" href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">Tac＋NAVI　トップページ</a></li>          
          <li><a id="rumb_02">お問い合わせ</a></li>
        </ul>
      </div>      
               
      <p id="top-sentence">コンサルティングサービスに関するご依頼やご相談などは、下記フォームよりお問い合わせください。<br>
               担当者よりご連絡いたします。
            </p>
      <p id="tab-top-sentence">コンサルティングサービスに関するご依頼やご相談などは、下記フォームよりお問い合わせください。
               担当者よりご連絡いたします。
            </p>

      <div class="wpcf7-content">
        <?php the_content(); ?>
      </div>    
   </section>
</main>





<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->


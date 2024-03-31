<!-- お知らせ一覧ページ -->

<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->


<main>
<section id="page-news_press">
      <div class="wrapper">
        <h1 id="title-news_press_j">お知らせ一覧</h1>
        <h2 id="title-news_press_e">news & press</h2>
      </div>
</section>

<a>これはテスト用リンク</a>
<a href="<?php echo esc_url(home_url('/category/news_detail/')); ?>" class="animate-border-link">お知らせ詳細</a>
                                       <!-- ↑ ここには、個別の記事がもつURLを入れる。スラッグ名を取得する関数を用いるのかな。。。 -->
   


   <h1 class="space_px"><!-- 単なるスペース --></h1>
</main>


<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

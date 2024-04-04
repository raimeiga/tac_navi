<!-- お知らせ一覧ページ -->

<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->

<main>
  <section id="page-news_press">
        <div class="wrapper">
          <h1 id="title-news_press_j">お知らせ・新着情報</h1>
          <h2 id="title-news_press_e">news & press</h2>
        </div>
  </section>

<section id="news-area">  
  <!-- パンくずリスト  -->
  <div class="breadcrumb">
     <ul class="breadcrumbs">
       <li><a id="news-rumb_01" href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">Tac＋NAVI　トップページ</a></li>          
       <li><a  id="news-rumb_02">お知らせ・新着情報</a></li>
     </ul>
  </div>
  
  <h1 class="space_30px"><!-- 単なるスペース --></h1>
  <p class="news_and_press_line"><!-- 投稿を仕切るための直線 --></p>     
  <div id="news-wrapper">  
    <?php
      //取得したい投稿記事などの条件を引数として渡す
      $args = array(
      // 投稿タイプ
      'post_type'      => 'post',
      // カテゴリー名
      'category_name' => 'news,press',
      // 1ページに表示する投稿数
      'posts_per_page' => 10,
      );                           
      // データの取得
      $posts = get_posts($args);
    ?>              
      <!-- ループ処理 -->
      <?php foreach($posts as $post): ?>
      <!-- 投稿データをセット -->
      <?php setup_postdata($post); ?>

      <!-- カテゴリー名を取得　テラコヤのAI先生より提供 -->
      <span id="news_and_press_category">
        <?php
          $categories = get_the_category(); // 現在の投稿に割り当てられたカテゴリーを取得
              if ( ! empty( $categories ) ) {
                  echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を表示
              };echo "　";
        ?>
      </span>      
      <!-- 投稿の日付を表示 -->
      <p id="news_and_press_date"><?php echo get_the_date(); 
           echo "　";  ?>      
      </p>          

      <!-- ↓　タイトル・本文をクリック後、お知らせ詳細ページに遷移するリンク -->

      <a id="news_and_press_link" href="<?php echo get_permalink(); ?>">
        <!-- 投稿のタイトルを表示 -->
        <p id="news_and_press_title"><?php the_title(); ?></p>
      </a>
      
      <p class="news_and_press_line"><!-- 投稿を仕切るための直線 --></p>     
      <?php endforeach; ?>    
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
  </div>
</section>
<h1 class="space_px"><!-- 単なるスペース --></h1>
</main>


<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

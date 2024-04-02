<!-- お知らせ詳細ページ --> 


<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->


<main>
<section id="page-news_detail">
      <div class="wrapper">
        <h1 id="title-news_detail_j">お知らせ詳細</h1>
        <h2 id="title-news_detail_e">news detail</h2>
      </div>
</section>
</main>

<section id="news-detail-area">
  <!-- パンくずリスト  -->
  <div class="breadcrumb">
      <ul class="breadcrumbs">
        <li><a id="news_detail-rumb_01" href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">Tac＋NAVI　トップページ</a></li>          
        <li><a id="news_detail-rumb_02" href="<?php echo esc_url(home_url('/page/contact/')); ?>" class="animate-border-link">お知らせ・新着情報</a></li>
        <li><a id="news_detail-rumb_03">お知らせ詳細</a></li>
      </ul>
    </div>
    <div id="height_100"></div>

    <div id="news_detail_wrapper">
      <div id="slug_and_title">
         <span class="label">
           <?php
               $categories = get_the_category(); // 現在の投稿に割り当てられたカテゴリーを取得
                 if ( ! empty( $categories ) ) {
                     echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を表示
                 };echo "　";
           ?>
         </span>      
         <h1><?php the_title(); ?></h1>
      </div>

      <P><?php echo get_the_date(); ?></P>
      <P><?php the_content(); ?></P>  
    </div>
          
    <div id="sidebar-slug_and_title">
      <h1>お知らせ・新着情報</h1>
        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news,press',
          // 1ページに表示する投稿数
          'posts_per_page' => 3,
          );                           
          // データの取得
          $posts = get_posts($args);
        ?>   
        <!-- ループ処理 -->
        <?php foreach($posts as $post): ?>
        <!-- 投稿データをセット -->
        <?php setup_postdata($post); ?>
        <!-- カテゴリー名を取得　テラコヤのAI先生より提供 -->      
            <a href="<?php echo get_permalink(); ?>">≫</a>
            <span class="label">
              <?php
                  $categories = get_the_category(); // 現在の投稿に割り当てられたカテゴリーを取得
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を表示
                    };echo "　";
              ?>
            </span>      
            <P><?php echo get_the_date(); ?></P>
            <br>
            <a href="<?php echo get_permalink(); ?>">
               <?php the_title(); ?>
            </a>
            <br><br>        
        <?php endforeach; ?>                
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
    </div>

  








<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

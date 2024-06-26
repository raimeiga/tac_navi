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

  <div id="wrapper-news_detail_and_sidebar">
    <div id="news_detail_wrapper">
      <div id="category_and_title">
        <?php 
          $categories = get_the_category(); 
          if ( ! empty( $categories ) ) {
            $category_name = $categories[0]->name;
            $class_name = $categories[0]->slug."-color";
          };
        ?>      
        <span id="news_detail_category-name" class="<?php echo $class_name; ?>">
          <?php
            if ( ! empty( $categories ) ) {
              echo esc_html( $category_name); // 最初のカテゴリー名を表示
              echo "　";
            };
          ?>
        </span>   
        <h1><?php the_title(); ?></h1>     <!-- タイトル -->
      </div>
      <div id="icon_and_date_wrapper">
        <img id="calender" src="<?php echo get_template_directory_uri();?>/images/icon-calender.png">  <!-- アイコン -->
        <p id="news_detail_date"><?php echo get_the_date(); ?></p>  <!-- 日付 -->
      </div>            
      <P><?php the_content(); ?></P>        <!-- 本文 -->
    </div>
    
    <!-- サイドバー ---------------------------------------------------　-->
    <div id="sidebar">
      <h3 id="sidebar-news">お知らせ・新着情報</h3>      
      <div id="posts">
            <?php
              //取得したい投稿記事などの条件を引数として渡す
              $args = array(
              // 投稿タイプ
              'post_type'      => 'post',
              // カテゴリー名
              'category_name' => 'news,press',
              // 1ページに表示する投稿数
              'posts_per_page' => 5,
              );                           
              // データの取得
              $posts = get_posts($args);
            ?>   
            <!-- ループ処理 -->
            <?php foreach($posts as $post): ?>
            <!-- 投稿データをセット -->
            <?php setup_postdata($post); ?>
            <!-- カテゴリー名を取得　テラコヤのAI先生より提供 -->     
        
            <div id="sidebar-category-and-date">
                
              <!-- カテゴリー名を取得　増井先生より提供 -->
              <?php 
                $categories = get_the_category(); 
                if ( ! empty( $categories ) ) {
                  $category_name = $categories[0]->name;
                  $class_name = $categories[0]->slug."-color";
                };
              ?>      
              <span id="sidebar-category" class="<?php echo $class_name; ?>">
                <?php
                  if ( ! empty( $categories ) ) {
                    echo esc_html( $category_name); // 最初のカテゴリー名を表示
                    echo "　";
                  };
                ?>
              </span>            
              <P id="sidebar-date"><?php echo get_the_date(); ?></P>  <!-- 日付 -->
            </div>
            
            <a id="sidebar-link-title" href="<?php echo get_permalink(); ?>" >   <!-- リンク -->
                <!-- <p id="sidebar-link-title-child_01"></p> -->
                <p id="sidebar-link-title-child">
                  <span id="span_01">≫</span>  
                  <span id="span_02"><?php the_title(); ?></span> <!-- タイトル -->
                </p>                
            </a>
            
            <p id="sidebar-line"><!-- 投稿を仕切るための直線 --></p>            
            
        <?php endforeach; ?>                
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

<!-- トップページ -->
<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->
    <main>
        <section id="top">
          <div id="main_copy">
            <div id="copy_01">
              <h1>IT</h1>  
              <h1>で</h1>
            </div>
            <div id="copy_02">
              <h3>日本を前進させる</h3>
              <p>データ分析に基づく戦略立案でお客様のビジネスを成長させます。home</p>
            </div>
          </div>
        </section>
        
        <section id="business">
          <h1 class="space_px"><!-- 単なるスペース --></h1>
          <h1>事業内容</h1>
          <h1 class="space_px"><!-- 単なるスペース --></h1>

          <div id="business_container_first">
            <div id="digital_wrapper">
                <div id="digital">
                    <img src="<?php echo get_template_directory_uri();?>/images/icon-black-pc.png">
                    <h1>デジタル戦略策定</h1>
                </div>

                <div id="digital_explain01">
                    <img class="check_mark" src="<?php echo get_template_directory_uri();?>/images/check-mark.png">
                    <p>データ分析に基づいて、最適で実現可能なデジタル戦略を策定。</p>
                </div>

                <div id="digital_explain02">
                    <img class="check_mark" src="<?php echo get_template_directory_uri();?>/images/check-mark.png">
                    <p>デジタル技術を活用した新規事業の企画、既存事業のデジタル化なども支援。</p>
                </div>
            </div>
            <img id="img-chart" src="<?php echo get_template_directory_uri();?>/images/business_chart_01.png">
          </div>

          <div id="business_container_second">
            <img id="img-seminar-space" src="<?php echo get_template_directory_uri();?>/images/seminar.png">
            <div id="seminar_wrapper">
                <div id="seminar">
                    <img src="<?php echo get_template_directory_uri();?>/images/icon-seminar.png">
                    <h1>人材育成</h1>
                </div>

                <div id="seminar_explain01">
                    <img class="check_mark" src="<?php echo get_template_directory_uri();?>/images/check-mark.png">
                    <p>データ分析に基づいて、最適で実現可能<br>なデジタル戦略を策定。</p>
                </div>

                <div id="seminar_explain02">
                    <img class="check_mark" src="<?php echo get_template_directory_uri();?>/images/check-mark.png">
                    <p>デジタル技術を活用した新規事業の企画、既存事業のデジタル化なども支援。</p>
                </div>
            </div>
          </div>            
        </section>

        <section id="advantage">
          <h1 class="space_px"><!-- 単なるスペース --></h1>
          <h1>当社の強み</h1>
          <h1 class="space_px"><!-- 単なるスペース --></h1>

          <div id="advantage_container">
            <div id="item_01">
              <h1>01</h1>
              <img src="<?php echo get_template_directory_uri();?>/images/icon-pc2.png">
              <h3>業界特化型ソリューションによる効率化</h3>
              <p>特定の業界に特化したソリューションを提供することで、課題解決の迅速化を実現。<br><br>
                 豊富な経験とノウハウに基づいた最適な提案で、業務効率を大幅に向上させ、顧客満足度向上に貢献。
              </p>
            </div>
           
            <div id="item_02">
              <h1>02</h1>
              <img src="<?php echo get_template_directory_uri();?>/images/icon-talent.png">
              <h3>豊富な経験と専門知識を持つ人材</h3>
              <p>長年の経験と専門知識を持つコンサルタントが、お客様の課題を徹底的に分析し、最適な解決策を提案。<br><br>
                 幅広い分野の専門家チームが、多角的な視点 で課題解決を支援。
              </p>
            </div>

            <div id="item_03">
              <h1>03</h1>
              <img src="<?php echo get_template_directory_uri();?>/images/icon-shake_hands.png">
              <h3>顧客満足度95%の実績</h3>
              <p>顧客満足度調査で95%という高い評価を獲得。<br><br>
                 顧客との密接なコミュニケーションを重視し、期待以上の成果を提供。
              </p>
            </div>     
        </section>
        <h1 class="space_px"><!-- 単なるスペース --></h1>

        <section id="news">
          <h3 class="title-news">新着情報・お知らせ</h3>
          <p class="news_and_info_line"><!-- 投稿を仕切るための直線 --></p>
          <div id="news-container">
            <div id="news-item">
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
                <span id="news_and_info_category">
                  <?php
                    $categories = get_the_category(); // 現在の投稿に割り当てられたカテゴリーを取得
                        if ( ! empty( $categories ) ) {
                            echo esc_html( $categories[0]->name ); // 最初のカテゴリー名を表示
                        };echo "　　";
                  ?>
                </span>                  
                  <!-- 投稿の日付を表示 -->
                  <p id="news_and_info_date">
                    <?php echo get_the_date();
                      echo "　";  
                    ?>
                  </p>    
                
                  <!-- ↓　タイトル・本文をクリック後、お知らせ詳細ページに遷移するリンク -->
                  <a id="news_and_info_link" href="<?php echo get_permalink(); ?>">           
                    <!-- ↓　投稿のタイトルを表示 -->
                    <p id="news_and_info_title"><?php the_title();?></p>
                    <br>
                    <!-- ↓　本文 -->
                    <p id="news_and_info_content"><?php echo wp_trim_words( get_the_content(), 65, '…' ); ?></p>         
                  </a>

                <p class="news_and_info_line"><!-- 投稿を仕切るための直線 --></p>     
                
                <?php endforeach; ?>                       
                <!-- 使用した投稿データをリセット -->
                <?php wp_reset_postdata(); ?>  
            </div>                  
          </div>     
        </section>
        
    </main>
    <?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->
    
    




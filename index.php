<!-- Silence is golden. -->

<!DOCTYPE html>

<html lang="en">
<head>
    <title>tac_navi</title>
    <meta name="description" content="tac_naviの説明" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
    <!-- ↓ ここでGoogle Fontsを読み込みます -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <header>
      <div id="line-top"></div> <!-- トップの青い線 -->
      <div id="header-box">        
        <img id="header_rogo" src="<?php echo get_template_directory_uri();?>/images/header_rogo.jpg" alt="ヘッダーロゴ">
        <p id="company_name">Tac+NAVI</p>
        <nav id="header_navi_01">       
           <a href="<?php echo esc_url(home_url()); ?>#header_rogo" class="animate-border-link">トップページ</a>             
           <a href="<?php echo esc_url(home_url()); ?>#business" class="animate-border-link">事業内容</a>
           <a href="<?php echo esc_url(home_url()); ?>#BUSINESS" class="animate-border-link">会社情報</a>
           <!-- ↑　↓　会社情報のページに遷移するように、URLを書く。会社情報と問い合わせだから、固定ページかな。。。 -->
        </nav>
        <div id="header_navi_02">
           <a href="<?php echo esc_url(home_url('/category/news/')); ?>" >お問い合わせ</a>
        </div>
      </div>
    </header>
        
    <main>
        <section id="top">
          <div id="main_copy">
            <div id="copy_01">
              <h1>IT</h1>  
              <h1>で</h1>
            </div>
            <div id="copy_02">
              <h3>日本を前進させる</h3>
              <p>データ分析に基づく戦略立案でお客様のビジネスを成長させます。</p>
            </div>
          </div>
        </section>

        
        <section id="business">
          <h1 class="space_100px"><!-- 単なるスペース --></h1>
          <h1>事業内容</h1>
          <h1 class="space_100px"><!-- 単なるスペース --></h1>

          <div id="business_container_first">
            <div id="digital_wrapper">
                <div id="digital">
                    <img src="<?php echo get_template_directory_uri();?>/images/Vector@2x.png">
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
            <img id="chart" src="<?php echo get_template_directory_uri();?>/images/business_chart_01.png">
          </div>

            
        </section>

        <section>
        <h1>当社の強み</h1>
            
        </section>

        <section>
        <h3>新着情報・お知らせ</h3>
            
        </section>
        
    </main>
    
    
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
    
</body>
</html>





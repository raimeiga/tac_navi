<!-- Silence is golden. -->

<!DOCTYPE html>

<html lang="en">
<head>
    <title>tac_navi</title>
    <meta name="description" content="tac_naviの説明" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ↓ ここでFont Awesomeを読み込む -->
    <link href=”https://use.fontawesome.com/releases/v6.0.0/css/all.css” rel=”stylesheet”>
    
    <!-- ↓ ここでGoogle Fontsを読み込みます -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/responsive.css" />
</head>
  
<body>
    <header>
      <div id="line-top"></div> <!-- トップの青い線 -->
      <div id="header-box">                
        <!-- ロゴをクリックすると、トップページのトップに遷移するようロゴにリンクを設定 -->
        <div class="logo-and-company_name">
          <a href="<?php echo esc_url(home_url()); ?>#">  
              <img class="header_logo" src="<?php echo get_template_directory_uri();?>/images/skyblue_logo.jpg" alt="ヘッダーロゴ">
          </a>   
          <p class="company_name">Tac+NAVI</p>
        </div>
        
        <!-- PC用ナビ -->
        <div id="header_navi">
           <nav id="navi">       
              <a href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">トップページ</a>             
              <a href="<?php echo esc_url(home_url()); ?>#business" class="animate-border-link">事業内容</a>
              <a href="<?php echo esc_url(home_url('/page/company/')); ?>" class="animate-border-link">会社情報</a>
              <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="animate-border-link">お知らせ</a>
           </nav>
           <a id="nav-contact" href="<?php echo esc_url(home_url('/page/contact/')); ?>" >お問い合わせ</a>
        </div>
        
        <!-- タブレット用メニューボタン -->
        <img id="tab-menu-btn" src="<?php echo get_template_directory_uri();?>/images/menu_01.svg" alt="タブレット用メニュー">
      </div>

      <!-- タブレット用ナビ -->
      <div id="tab-menu">
        <div id="close-btn-wrapper">
          <p id="tab-menu-close-btn">&#x2715;	</p>
        </div>
        <div id="tab-logo-and-company_name">
          <a href="<?php echo esc_url(home_url()); ?>#">  
            <img class="header_logo" src="<?php echo get_template_directory_uri();?>/images/white_logo.jpg" alt="タブレット用メニューのロゴ">
          </a>
          <p class="tab-company_name">Tac+NAVI</p>
        </div>
        <nav class="tab-navi">
          <a href="<?php echo esc_url(home_url()); ?>#" >トップページ</a>             
          <a href="<?php echo esc_url(home_url()); ?>#business" >事業内容</a>
          <a href="<?php echo esc_url(home_url('/page/company/')); ?>" >会社情報</a>
          <a href="<?php echo esc_url(home_url('/category/news/')); ?>" >お知らせ</a>
          <a href="<?php echo esc_url(home_url('/page/contact/')); ?>" >お問い合わせ</a>
        </nav>
      </div>
    </header>
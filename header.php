<!-- Silence is golden. -->

<!DOCTYPE html>

<html lang="en">
<head>
    <title>tac_navi</title>
    <meta name="description" content="tac_naviの説明" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/responsive.css" />
  

    <!-- ↓ ここでGoogle Fontsを読み込みます -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
      <div id="line-top"></div> <!-- トップの青い線 -->
      <div id="header-box">                
        <!-- ロゴをクリックすると、トップページのトップに遷移するようロゴにリンクを設定 -->
        <div id="logo_company_name">
          <a href="<?php echo esc_url(home_url()); ?>#">  
              <img id="header_logo" src="<?php echo get_template_directory_uri();?>/images/header_logo.jpg" alt="ヘッダーロゴ">
          </a>   
          <p id="company_name">Tac+NAVI</p>
          <p id="company_name_02">Tac+NAVI</p>
        </div>

        <div id="header_navi">
           <nav id="navi">       
              <a href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">トップページ</a>             
              <a href="<?php echo esc_url(home_url()); ?>#business" class="animate-border-link">事業内容</a>
              <a href="<?php echo esc_url(home_url('/page/company/')); ?>" class="animate-border-link">会社情報</a>
              <a href="<?php echo esc_url(home_url('/category/news/')); ?>" class="animate-border-link">お知らせ</a>
              <!-- ↑　↓　会社情報のページに遷移するように、URLを書く。会社情報と問い合わせだから、固定ページかな。。。 -->
           </nav>
           <a id="nav-contact" href="<?php echo esc_url(home_url('/page/contact/')); ?>" >お問い合わせ</a>
        </div> 
      </div>
    </header>
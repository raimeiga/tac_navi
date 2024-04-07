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
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap Javascript(jQuery含む) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
        
        <!-- SP用メニューボタン -->
        <img id="sp-menu" src="<?php echo get_template_directory_uri();?>/images/menu_01.svg" alt="スマホ用メニュー">

      </div>
    </header>
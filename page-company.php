<!-- 会社情報ページ -->

<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->


<main>
  <section id="page-company">
        <div class="wrapper">
          <h1 id="title-company_j">会社情報</h1>
          <h2 id="title-company_e">company</h2>
        </div>
  </section>  

  <section id="overview">  
  <!-- パンくずリスト  -->
    <div class="breadcrumb">
      <ul class="breadcrumbs">
        <li><a id="news-company_01" href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">Tac＋NAVI　トップページ</a></li>          
        <li><a id="news-company_02">会社概要</a></li>
      </ul>
    </div>

    <div class="height_100"><!-- 単なるスペース --></div>
    <h1>会社概要</h1>
    <table id="table-overview">
       <tr>
         <td class="item">
          <span>社名（社号）</span>     
         </td>
         <td class="content">
          <span>tactics  navigater  株式会社</span>
         </td>
       </tr>

       <tr>
         <td class="item">
          <span>事業概要</span>     
         </td>
         <td class="content">
          <span>コンサルティング事業、開発事業、人材教育事業、人材派遣事業</span>
         </td>
       </tr>

       <tr>
         <td class="item">
          <span>本社所在地</span>     
         </td>
         <td class="content">
          <span>東京都〇区〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇〇</span>
         </td>
       </tr>

       <tr>
         <td class="item">
          <span>代表者</span>     
         </td>
         <td class="content">
          <span>代表取締役社長〇〇〇〇</span>
         </td>
       </tr>

       <tr>
         <td class="item">
          <span>資本金</span>     
         </td>
         <td class="content">
          <span>〇億〇〇〇〇円</span>
         </td>
       </tr>

       <tr>
         <td class="item">
          <span>設立</span>     
         </td>
         <td class="content">
          <span>2024年〇月〇日</span>
         </td>
       </tr>

       <tr>
         <td class="item" id="number-of-employees">
          <span>従業員数</span>     
         </td>
         <td class="content">
          <span>〇〇〇〇〇名（2024年1月1日現在）<br>　※全雇用形態の従業員合計</span>
         </td>
       </tr>

       <tr>
         <td class="item" id="sales">
          <span>売上高</span>     
         </td>
         <td class="content">
          <span>〇億〇〇〇円（2024年度）<br>　※〇年〇月時点</span>
         </td>
       </tr>       
    </table>
    
    <div class="height_100"><!-- 単なるスペース --></div>
    <h1>事業所一覧</h1>
    <table id="table-plant">
       <tr>
         <td class="plant">
          <span>本社</span>     
         </td>
         <td class="address">
          <span>〒000-0000<br>　東京都○○区○○○○　○－○－○<br>　東京オフィスタワー10F</span>
         </td>
         <td class="phone">
          <span>TEL：000-123-1234</span>
         </td>
       </tr>

       <tr>
         <td class="plant">
          <span>大阪支社</span>     
         </td>
         <td class="address">
          <span>〒000-0000<br>　大阪府○○区○○○○　○－○－○<br>　大阪オフィスタワー20F</span>
         </td>
         <td class="phone">
          <span>TEL：000-123-1234</span>
         </td>
       </tr>

       <tr>
         <td class="plant">
          <span>熊本支社</span>     
         </td>
         <td class="address">
          <span>〒000-0000<br>　熊本県○○区○○○○　○－○－○<br>　熊本オフィスタワー20F</span>
         </td>
         <td class="phone">
          <span>TEL：000-123-1234</span>
         </td>
       </tr>
    </table>
</main>

<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->

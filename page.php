<!-- お問い合わせページ -->

<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->

<main>
   <section id="page-title">
      <div id="wrapper">
        <h1 class="title">法人のお客様向けサービスに関するお問い合わせ</h1>
        <h2 class="title">contact</h2>
      </div>
   </section>

   <section id="information">
      <p>コンサルティングサービスに関するご依頼やご相談などは、下記フォームよりお問い合わせください。<br>
        担当者よりご連絡いたします。
      </p>
      <div id="info_container">
        <!-- <div class="item">
            <p class="required">必須</p>
            <p class="item-name">会社名</p>
        </div> -->
        <form>  
            <label class="required-item">必須</label>
            <label class="item-name">会社名</label>
            <input class="input_field" type="text" placeholder="例）tactics  navigater  株式会社"> 
            <br>  

            <label class="any-item">任意</label>
            <label class="item-name">担当者役職</label>
            <input class="input_field" type="text" > 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">担当者名</label>
            <input class="input_field" type="text" placeholder="例）山田  太郎"> 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">電話番号</label>
            <input class="input_field" type="text" placeholder="例）000-0000-0000"> 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">メールアドレス</label>
            <input class="input_field" type="text" placeholder="例）sample.samurai.com"> 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">お問合せ内容</label>
            <textarea  placeholder="例）お問い合わせ内容の詳細をご記入ください。（400字以内）"></textarea>
            <br>  

            <input id="submit" type="submit" src="<?php echo get_template_directory_uri();?>/images/submit-inside.png" value="送信"> 
        </form>



      </div>
    
   </section>

      <h1 class="space_px"><!-- 単なるスペース --></h1>
      <h1 class="space_px"><!-- 単なるスペース --></h1>
   




</main>







<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->
<!-- お問い合わせページ -->

<?php get_header();?>  <!-- ← header.phpからヘッダーのコードを呼び出す -->

<main>
   <section id="page-contact">
      <div class="wrapper">
        <h1 id="title-contact_j">法人のお客様向けサービスに関するお問い合わせ</h1>
        <h2 id="title-contact_e">contact</h2>
      </div>
   </section>

   <section id="contact-info">
      <!-- パンくずリスト  -->
      <div class="breadcrumb">
        <ul class="breadcrumbs">
          <li><a id="rumb_01" href="<?php echo esc_url(home_url()); ?>#" class="animate-border-link">Tac＋NAVI　トップページ</a></li>          
          <li><a id="rumb_02">お問い合わせ</a></li>
        </ul>
      </div>      

      <div id="contact-info_container">
        <form>  
            <p>コンサルティングサービスに関するご依頼やご相談などは、下記フォームよりお問い合わせください。<br>
               担当者よりご連絡いたします。
            </p>
            <label class="required-item">必須</label>
            <label class="item-name">会社名　　　　　　　</label>
            <input class="input_field" type="text" placeholder=" 例）tactics  navigater  株式会社"> 
            <br>  

            <label class="any-item">任意</label>
            <label class="item-name">担当者役職　　　　　</label>
            <input class="input_field" type="text" > 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">担当者名　　　　　　</label>
            <input class="input_field" type="text" placeholder=" 例）山田  太郎"> 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">電話番号　　　　　　</label>
            <input class="input_field" type="text" placeholder="  例）000-0000-0000"> 
            <br>  

            <label class="required-item">必須</label>
            <label class="item-name">メールアドレス　　　</label>
            <input class="input_field" type="text" placeholder=" 例）sample.samurai.com"> 
            <br>  

            <div id="detail">
                <label>必須</label>
                <label>お問い合わせ内容</label>
                <textarea  placeholder=" 例）お問い合わせ内容の詳細をご記入ください。（400字以内）"></textarea>
                <br>
            </div>
            
            <div id="submit-btn-wrapper">
              <!-- type="submit"を指定してフォーム送信ボタンとして機能させます -->
              <button type="submit" id="submit" class="submit-btn" >
                  <span>送信</span>
                  <span class="submit-arrow">▶</span>
              </button>
            </div>
          </form>
      </div>    
   </section>
</main>

<?php get_footer(); ?>    <!-- ← footer.phpからヘッダーのコードを呼び出す -->
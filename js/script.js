$(function(){

    /* ここにjQueryのコードを書く */ 

  // ここからヘッダー
  const tab_menu_btn = document.getElementById("tab-menu-btn");
  const tab_menu = document.getElementById("tab-menu");
  console.log(tab_menu_btn);
  console.log("tab_menu_btn");

  // イベント処理
  tab_menu_btn.addEventListener('click', () => {
      tab_menu.style.display = 'block';
    });


  const tab_menu_close_btn = document.getElementById("tab-menu-close-btn");
  // イベント処理
  tab_menu_close_btn.addEventListener('click', () => {
      tab_menu.style.display = 'none';
  });

});

// tab_menu_btn.addEventListener('click', function() {
//   // メニューの表示・非表示を切り替える
//   if (tab_menu.style.display === 'none') {
//     tab_menu.style.display = 'block';
//   } else {
//     tab_menu.style.display = 'none';
//   }
// });

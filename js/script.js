// ここからヘッダー
const tab_menu_btn = document.getElementById("tab-menu-btn");
const tab_menu = document.getElementById("tab-menu");

イベント処理
tab_menu_btn.addEventListener('click', () => {
    tab_menu.style.display = 'block';
  });


const tab_menu_close_btn = document.getElementById("tab-menu-close-btn");
// イベント処理
tab_menu_close_btn.addEventListener('click', () => {
    tab_menu.style.display = 'none';
});


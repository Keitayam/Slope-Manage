document.addEventListener('DOMContentLoaded', function() {
    var CatItems = document.querySelectorAll('.tab__lists__item');
    var newsArchiveUrl = '/re_so_lv/news/'; // NewsアーカイブページのURLを設定
  
    CatItems.forEach(function(item, index) {
        item.addEventListener('click', function(e) {
            e.preventDefault(); // デフォルトの動作を防止
  
            // クリックされた要素のインデックスを取得
            var clickedIndex = Array.from(CatItems).indexOf(item);
  
            // Newsアーカイブの1ページ目に遷移
            window.location.href = newsArchiveUrl + '?tab=' + clickedIndex;
        });
    });
  
    // ページロード時にURLパラメータを確認し、適切なタブをアクティブにする
    window.addEventListener('load', function() {
        var urlParams = new URLSearchParams(window.location.search);
        var activeTab = urlParams.get('tab');
  
        if (activeTab !== null) {
            // 全ての.tab_lists_itemからis-item-activeクラスを削除し、対応する要素に追加する
            CatItems.forEach(function(item, index) {
                item.classList.remove('is-item-active');
                if (index === parseInt(activeTab)) {
                    item.classList.add('is-item-active');
                }
            });
  
            // 全ての.news__lists__boxからis-box-activeクラスを削除し、対応する.news__lists__boxに追加する
            var CatBoxes = document.querySelectorAll('.news__lists__box');
            CatBoxes.forEach(function(box, index) {
                box.classList.remove('is-box-active');
                if (index === parseInt(activeTab)) {
                    box.classList.add('is-box-active');
                }
            });
        }
    });
  });
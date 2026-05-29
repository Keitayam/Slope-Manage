window.addEventListener('DOMContentLoaded', function () {

  var header = document.querySelector('.header');
  var headerToggle = document.querySelector('.header__toggle');
  var modal = document.querySelector('#header__modal');
  var modalClose = document.querySelector('.js__header__close');
  var modalLink = document.querySelectorAll('.header__item a');

  //背景固定
  function backfaceFixed(fixed) {
    /**
     * 表示されているスクロールバーとの差分を計測し、背面固定時はその差分body要素に余白を生成する
     */
    const scrollbarWidth = window.innerWidth - document.body.clientWidth;
    document.body.style.paddingRight = fixed ? `${scrollbarWidth}px` : '';

    /**
     * スクロール位置を取得する要素を出力する(`html`or`body`)
     */
    const scrollingElement = () => {
      const browser = window.navigator.userAgent.toLowerCase();
      if ('scrollingElement' in document) return document.scrollingElement;
      if (browser.indexOf('webkit') > 0) return document.body;
      return document.documentElement;
    };

    /**
     * 変数にスクロール量を格納
     */
    const scrollY = fixed
      ? scrollingElement().scrollTop
      : parseInt(document.body.style.top || '0') * -1;

    /**
     * CSSで背面を固定
     */
    const styles = {
      height: '100vh',
      left: '0',
      overflow: 'hidden',
      position: 'fixed',
      top: `${scrollY * -1}px`,
      width: '100vw',
    };

    Object.keys(styles).forEach((key) => {
      document.body.style[key] = fixed ? styles[key] : '';
    });

    if (!fixed) {
      window.scrollTo(0, scrollY);
    }

  };

  //ハンバーガーメニューを開いたとき
  headerToggle.addEventListener('click', function () {
    this.classList.toggle('active');
  
    const fv = document.getElementById('fv');
    const fvHeight = fv ? fv.offsetHeight : 0;
    const isInFv = fv ? window.scrollY < fvHeight : false;
  
    if (this.classList.contains('active')) {
      modal.classList.add('active');
      header.classList.add('hidden');
      if (isInFv) {
        header.classList.add('fv-white-bg');
      }
      backfaceFixed(true);
    } else {
      modal.classList.remove('active');
      header.classList.remove('hidden');
      header.classList.remove('fv-white-bg');
      backfaceFixed(false);
    }
  });
  
  modalLink.forEach(element => {
    element.addEventListener('click', function () {
      headerToggle.classList.remove('active');
      modal.classList.remove('active');
      header.classList.remove('hidden');
      header.classList.remove('fv-white-bg');
      backfaceFixed(false);
    });
  });
  
  modalClose.addEventListener('click', function () {
    headerToggle.classList.remove('active');
    modal.classList.remove('active');
    header.classList.remove('hidden');
    header.classList.remove('fv-white-bg');
    backfaceFixed(false);
  });
  

  // スムーズスクロール

  // ヘッダーの高さを取得（画面幅によって分岐）
  const headerHeight = window.innerWidth > 768 ? 100 + 50 : 70 + 50;

  // ページ内リンクを取得してスムーススクロールを設定
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const href = this.getAttribute('href');
      const target = href === '#' || href === '' ? document.documentElement : document.querySelector(href);
      if (target) {
        const position = target.getBoundingClientRect().top + window.scrollY - headerHeight;
        window.scrollTo({
          top: position,
          behavior: 'smooth'
        });
      }
    });
  });

  // 別ページからのアンカーリンク処理（ページ読み込み後）
  const hash = window.location.hash;
  if (hash) {
    const target = document.querySelector(hash);
    if (target) {
      // 一旦idを外して戻すことでブラウザのデフォルトスクロールをキャンセル
      const tempId = target.id;
      target.removeAttribute('id');

      window.scrollTo(0, 0); // 最上部に戻しておく

      window.setTimeout(() => {
        target.setAttribute('id', tempId);
        const position = target.getBoundingClientRect().top + window.scrollY - headerHeight;
        window.scrollTo({
          top: position,
          behavior: 'smooth'
        });
      }, 10); // タイミング調整
    }
  }

});



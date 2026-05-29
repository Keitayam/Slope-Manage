document.addEventListener('DOMContentLoaded', function () {

    let Targets = document.querySelectorAll('.header__nav .lists .menu-item a');
    //ヘッダーメニュー

    const textMap = {
        "About": "当社について",
        "Service": "サービス",
        "Achievements": "紹介先での事例紹介",
        "News": "お知らせ",
        "Journal": "ジャーナル",
        "Company": "会社概要",
    };

    Targets.forEach((target) => {
        const text = target.textContent.trim();
        const afterTextContent = textMap[text] || text;

        const beforeText = "<div class='before'>" + text + "</div>";
        const afterText = "<div class='after'>" + afterTextContent + "</div>";
        const wrappedText = "<span class='text-wrap'>" + beforeText + afterText + "</span>";

        target.innerHTML = wrappedText

    })

    Targets.forEach((target) => {
        if (!target.classList.contains('is-active')) {
            let before = target.querySelector('.before');
            let after = target.querySelector('.after');
            target.addEventListener('mouseenter', function () {
                gsap.to(before, { y: '-150%' })
                gsap.to(after, { y: '0' })
            })

            target.addEventListener('mouseleave', function () {
                gsap.to(before, { y: '0' })
                gsap.to(after, { y: '150%' })
            })
        }

    })
    
});

    // セッションストレージからフラグを取得
   // セッションストレージからフラグを取得
const isFirstLoad = sessionStorage.getItem("isFirstLoad");

// 初回だけローディングを表示するクラスを付与
if (!isFirstLoad) {
  document.body.classList.add("show-loading");
}

// ローディングを確実に消す関数（事故防止用）
const hideLoading = () => {
  const loading = document.querySelector(".loading");
  if (loading) loading.style.display = "none";
  document.body.classList.remove("show-loading");
};

const FORCE_HIDE_MS = 1500;
setTimeout(() => {
  hideLoading();
}, FORCE_HIDE_MS);

window.addEventListener("DOMContentLoaded", function () {
  const loading = document.querySelector(".loading");
  const logo = document.querySelector(".loading svg");

  if (isFirstLoad) {
    if (loading) loading.style.display = "none";
    document.body.classList.remove("show-loading");
    return;
  }

  if (!loading || !logo) {
    sessionStorage.setItem("isFirstLoad", "true");
    hideLoading();
    return;
  }

  const tl = gsap.timeline({
    onComplete: () => {
      loading.style.display = "none";
      document.body.classList.remove("show-loading");
    },
  });

  tl.to(logo, {
    autoAlpha: 0,
    duration: 0.6,
    ease: "power2.inOut",
  }).to(
    loading,
    {
      clipPath: "inset(0 0 100% 0)",
      duration: 0.7,
      ease: "power2.inOut",
    },
    "-=0.2"
  );

  sessionStorage.setItem("isFirstLoad", "true");
});
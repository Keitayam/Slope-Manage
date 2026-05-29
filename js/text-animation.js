window.addEventListener('DOMContentLoaded', function () {

  let splitTargets = document.querySelectorAll('.js-splitText');
  let newText = ''; //生成される要素を格納する変数

//spanタグに変換してくれる装置（関数）

  splitTargets.forEach((target)=>{
      newText = '';
      spanText = target.innerHTML; //HTMLのタグの中身を取得   
      spanText.split('').forEach((char) => {
        const displayChar = char === ' ' ? '&nbsp;' : char;
        newText += `<span>${displayChar}</span>`;
      });
    
      newTextBefore = "<div class='before'>" + newText + "</div>" //before要素
      newText = "<span class='text-wrap'>" + newTextBefore + "</span>"
      target.innerHTML = newText;
      
      gsap.registerPlugin(ScrollTrigger);
    
      const spans = target.querySelectorAll('.before span');
        
        ScrollTrigger.create({
            trigger: target,
            start: 'top 80%',
            once: true, // 一度だけ表示したい場合
            onEnter: () => {
                gsap.to(spans, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.05,
                    duration: 0.6,
                    ease: 'power2.out',
                    markers: true,
                });
            }
        });
  })



});



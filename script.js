window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++){
        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
        }
        else{
            reveals[i].classList.remove('active');
        }
    }
}

// //for scrolling works page sideways
//  (function(){
//      function scrollH(e){
//          //prevent scroll default
//          e.preventDefault();
//          e = window.event || e;
//          let delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
//          document.querySelector('.works').scrollLeft -= (delta * 40);
//      }
//     if (document.querySelector('.works').addEventListener){
//          document.querySelector('.works').addEventListener('mousewheel', scrollH, false);
//          document.querySelector('.works').addEventListener('DOMMouseScroll', scrollH, false);
//      }
//  })();


//for smooth locomotive scrolling
let Scrollbar = window.Scrollbar;

const options = {
    'damping' : .4,
}

Scrollbar.init(document.querySelector('body'), options);


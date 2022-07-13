import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
gsap.registerPlugin(ScrollTrigger);

export function cursor(){

  let htmlString = '<div class=\"cursor-wrapper\"><div class=\"cursor-container\" ref=\"cursor\"><div class=\"cursor-content\"><div class=\"drag\" >DRAG</div><div class=\"icon icon__left\"></div><div class=\"icon\"></div></div></div></div>';
  
  document.body.insertAdjacentHTML('beforeend', htmlString);
  
  let links = document.querySelectorAll('a');

  let hovering = false;
  let stretching = false;
  window.onload = () => {
    
    document.addEventListener('mousemove', (event) => {
      mouseMoveHandler(event);
    });
    
    document.addEventListener('scroll', (event) => {
      scrollHandler(event);
    });
    
    links.forEach(link => {
      let origlinkpos = link.getBoundingClientRect();
      link.addEventListener('mouseenter', (event) => {
        mouseenterhandler(link, origlinkpos, event);
      });
      link.addEventListener('mouseleave', () => {
        mouseleavehandler(link, origlinkpos);
      });
    });

    let proxy = { stretch: 1 },
        stretchElem = 'h2',
        stretchSetter = gsap.quickSetter(stretchElem, "scaleY"), // fast
        clamp = gsap.utils.clamp(-5, 5); // don't let the stretch go beyond 20 degrees. 
    
    let currentPos = window.scrollY;
    
   

    ScrollTrigger.create({
      onUpdate: (self) => {
        let scrollPos = window.scrollY;
        let stretch = Math.abs(clamp((currentPos - scrollPos)/100));
        // only do something if the stretch is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller stretch.
        if (Math.abs(stretch) >= Math.abs(proxy.stretch)) {
          proxy.stretch = stretch;
          gsap.to( proxy, { 
            stretch: 1, 
            duration: 0.8, 
            ease: "power3", 
            overwrite: true, 
            onStart: () => stretching = true, 
            onUpdate: () => stretchSetter(proxy.stretch), 
            onComplete: () => { currentPos = window.scrollY; stretching = false; } 
          });
        }
      }
    });

    // gsap.set("h2", {transformOrigin: "50% 0%", force3D: true});

  };

  let lastScrollTop = 0;
  let scrollHandler = (event) => {
    let st = window.pageYOffset || document.documentElement.scrollTop;
     if (st > lastScrollTop){
        // downscroll code
        if( !stretching ) {
          gsap.set("h2", {transformOrigin: "50% 0%", force3D: true});
        }
      } else {
        // upscroll code
        if( !stretching ) {
          gsap.set("h2", {transformOrigin: "50% 100%", force3D: true});
        }
     }
     lastScrollTop = st <= 0 ? 0 : st;
  }

  let mouseMoveHandler = (event) => {
    if (!hovering) {
      gsap.to('.cursor-container', {
        x: event.clientX,
        y: event.clientY,
        width: '1rem',
        height: '1rem',
        duration: 0.5,
        backgroundColor: '#ff0',
        border: '0px solid #ff0',
        overwrite: "auto"
      })
    }
  }
  
  let mouseenterhandler = (link, origlinkpos, event) => {
    hovering = true;
    let curlinkpos = link.getBoundingClientRect();
    gsap.to('.cursor-container', {
      x: curlinkpos.x + curlinkpos.width / 2,
      y: curlinkpos.y + curlinkpos.height / 2,
      width: origlinkpos.width + 20,
      height: origlinkpos.height + 5,
      ease: 'expo.out',
      duration: 0.35,
      overwrite: "auto",
      backgroundColor: 'transparent',
      border: '1px solid #ff0',
    })
  }
  let mouseleavehandler = (link, origlinkpos) => {
    hovering = false;
  }
}

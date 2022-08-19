import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { SplitText } from 'gsap/SplitText';
gsap.registerPlugin(ScrollTrigger, SplitText);

export function fontStretch() {
  let proxy = { stretch: 1 },
      splitText = new SplitText(document.querySelector('h2')),
      stretchElem = 'h2',
      stretchSetter = gsap.quickSetter(splitText.chars, "scaleY"), // fast
      clamp = gsap.utils.clamp(-2, 2); // don't let the stretch go beyond 20 degrees.
    

  let stretch = 1;
  ScrollTrigger.create({
    onUpdate: (self) => {
      console.log(self.direction);
      stretch = stretch + .0125;
      // only do something if the stretch is MORE severe. Remember, we're always tweening back to 0, so if the user slows their scrolling quickly, it's more natural to just let the tween handle that smoothly rather than jumping to the smaller stretch.
      if (Math.abs(stretch) > Math.abs(proxy.stretch)) {
        proxy.stretch = stretch;
        gsap.to( proxy, { 
          stretch: 1, 
          duration: 0.25, 
          ease: "power3", 
          overwrite: true, 
          onStart: () => stretching = true, 
          onUpdate: () => stretchSetter(proxy.stretch), 
          onComplete: () => { stretching = false; stretch = 1; } 
        });
      }
    }
  });

  let lastScrollTop = 0;
  let scrollHandler = () => {
    let st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop){
        // downscroll code
        if( !stretching ) {
          gsap.set(splitText.chars, {transformOrigin: "50% 0%", force3D: true});
        }
      } else {
        // upscroll code
        if( !stretching ) {
          gsap.set(splitText.chars, {transformOrigin: "50% 100%", force3D: true});
        }
    }
    lastScrollTop = st <= 0 ? 0 : st;
  }

  document.addEventListener('scroll', (event) => {
    scrollHandler(event);
  });
}
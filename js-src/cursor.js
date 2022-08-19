import gsap from 'gsap';

export function cursor(){

  let htmlString = '<div class=\"cursor-wrapper\"><div class=\"cursor-container\" ref=\"cursor\"><div class=\"cursor-content\"><div class=\"drag\" >DRAG</div><div class=\"icon icon__left\"></div><div class=\"icon\"></div></div></div></div>';
  
  document.body.insertAdjacentHTML('beforeend', htmlString);
  
  let links = document.querySelectorAll('a');

  let hovering = false;
  window.onload = () => {

    document.body.classList.add('cursor-ready');
    
    document.addEventListener('mousemove', (event) => {
      mouseMoveHandler(event);
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
  };


  let mouseMoveHandler = (event) => {
    if (hovering) {
      gsap.to('.cursor-container', {
        x: event.clientX + 10,
        y: event.clientY + 10,
        width: '1rem',
        height: '1rem',
        duration: 0.01,
        overwrite: "auto",
        ease: "none",
      })
    } else {
      gsap.to('.cursor-container', {
        x: event.clientX + 10,
        y: event.clientY + 10,
        width: '1rem',
        height: '1rem',
        duration: 0.01,
        overwrite: "auto",
        ease: "none",
      })
      
    }
  }
  
  let mouseenterhandler = (link, origlinkpos, event) => {
    hovering = true;
    // let curlinkpos = link.getBoundingClientRect();
    gsap.to('.cursor-container', {
      // Previous behaviour for round square around link commented:
      // x: curlinkpos.x + curlinkpos.width / 2,
      // y: curlinkpos.y + curlinkpos.height / 2,
      // width: origlinkpos.width + 30,
      // height: origlinkpos.height + 10,
      // ease: 'elastic.out(1, 0.5)',
      // duration: 1,
      // overwrite: "auto",
      // backgroundColor: 'transparent',
      // borderBottom: '4px dotted #00f',
      // borderRadius: '0'
      scale: '1.5',
      borderRadius: '0 50% 50% 50%',
      backgroundColor: '#FFCA11',
      ease: 'none',
      duration: .2
    })
  }
  let mouseleavehandler = (link, origlinkpos) => {
    hovering = false;
    gsap.to('.cursor-container', {
      scale: '1',
      borderRadius: '50%',
      backgroundColor: '#00f',
      ease: 'none',
      duration: .2
    })
  }
}

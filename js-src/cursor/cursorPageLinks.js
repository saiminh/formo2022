// import gsap from 'gsap';

export function cursorPageLinks(){
  
  let links = document.querySelectorAll('a, summary, label, input[type="submit"], .formo-popover-toggle');
  let hovering = false;
  let cursor = document.querySelector('.cursor-container');
  
  document.addEventListener('mousemove', (event) => {
    mouseMoveHandler(event);
  });
    
  links.forEach(link => {
    let origlinkpos = link.getBoundingClientRect();
    link.addEventListener('mouseenter', (event) => {
      mouseenterhandler(link, origlinkpos, event);
    });
    link.addEventListener('mouseleave', (event) => {
      mouseleavehandler(event);
    });
  });

  let mouseMoveHandler = (event) => {
    if (hovering) {
      // gsap.to('.cursor-container', {
      //   x: event.clientX + 10,
      //   y: event.clientY + 10,
      //   width: '1rem',
      //   height: '1rem',
      //   duration: 0.01,
      //   overwrite: "auto",
      //   ease: "none",
    // })
    cursor.style.left = event.clientX + 'px';
    cursor.style.top = event.clientY + 'px';
  } else {
    // gsap.to('.cursor-container', {
      //   x: event.clientX + 10,
      //   y: event.clientY + 10,
      //   width: '1rem',
      //   height: '1rem',
      //   duration: 0.01,
      //   overwrite: "auto",
      //   ease: "none",
      // })
      cursor.style.left = event.clientX + 'px';
      cursor.style.top = event.clientY + 'px';
      
    }
  }
  
  let mouseenterhandler = (link, origlinkpos, event) => {
    hovering = true;
    // let curlinkpos = link.getBoundingClientRect();
    // gsap.to('.cursor-container', {
    //   scale: '1.5',
    //   borderRadius: '0 50% 50% 50%',
    //   backgroundColor: '#FFCA11',
    //   ease: 'none',
    //   duration: .2
    // })
    !cursor.classList.contains('hovering') ?  cursor.classList.add('hovering') : null;
  }

  let mouseleavehandler = (event) => {
    hovering = false;
    // gsap.to('.cursor-container', {
    //   scale: '1',
    //   borderRadius: '50%',
    //   backgroundColor: '#00f',
    //   ease: 'none',
    //   duration: .2
    // })
    cursor.classList.contains('hovering') ?  cursor.classList.remove('hovering') : null;
  }
  //run once so that cursor returns to normal after swup link click
  mouseleavehandler();
}

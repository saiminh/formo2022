export function videoPlayPauseOnHover() {

  
  const allHoverPlayVideosOnPage = document.querySelectorAll('.video-play-on-hover video');

  if (allHoverPlayVideosOnPage.length == 0) {
    return;
  }
  

  const mq = window.matchMedia( "(hover: hover)" );
  
  if (mq.matches) {
    allHoverPlayVideosOnPage.forEach(video => {
      video.addEventListener('mouseover', () => {
        video.play();
      });
      video.addEventListener('mouseout', () => {
        video.pause();
      });
      video.pause();
    })
  }   
  else {
    const videoObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          entry.target.pause();
        } else {
          entry.target.play();
        }
      });
    }, {});
    
    allHoverPlayVideosOnPage.forEach(video => {
      videoObserver.observe(video);
  
      const onVisibilityChange = () => {
        if (document.hidden) {
          video.pause();
        } else {
          video.play();
        }
      };
      document.addEventListener("visibilitychange", onVisibilityChange);
  
    })
  }


}
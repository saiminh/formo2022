export function videoPlayPauseOnScroll() {

  
  const allAutoplayVideosOnPage = document.querySelectorAll('video[autoplay]');

  if (allAutoplayVideosOnPage.length == 0) {
    return;
  }
  
  const videoObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        entry.target.pause();
      } else {
        entry.target.play();
      }
    });
  }, {});
  
  allAutoplayVideosOnPage.forEach(video => {

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
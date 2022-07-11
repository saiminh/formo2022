import gsap from 'gsap';

gsap.to('body', {
  backgroundColor: '#000',
  duration: 1,
  onComplete: () => {
    console.log('done');
  }
})
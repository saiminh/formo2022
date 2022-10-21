export function teamMemberSorting(){
  const wrapper = document.querySelector('.formo2022-teammember-sorting');
  if (!wrapper) { return }

  const teamMembers = Array.from(document.querySelectorAll('.formo2022_teammember'));
  const questions = Array.from(document.querySelectorAll('.formo2022-teammember-sorting-questions a'));
  const prevBtn = document.querySelector('.formo2022-teammember-sorting-nav > div:first-child a');
  const nextBtn = document.querySelector('.formo2022-teammember-sorting-nav > div:last-child a');

  function rando(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
  }

  function sortby(target) {
    teamMembers.forEach(member => {

      if (member.querySelector('video[controls]')){
        member.querySelector('video[controls]').attributes.removeNamedItem('controls');
      }
      let memberOffset = member.offsetWidth / 2;
      let height = document.querySelector('.formo2022-teammember-sorting-teammembers').getBoundingClientRect().height;
      let xOff = rando(memberOffset, ( window.innerWidth / 2 - memberOffset ) );
      let yOff = rando(height / -2 , ( height / 2 - memberOffset ) );
      let scale = rando(60, 100) / 100;
      if (member.classList.contains('traits-'+target)) {
        member.style.transform = 'translate(0px, 0px) scale(1)';
        setTimeout(() => {
          member.style.transform = 'translate('+xOff+'px, '+yOff+'px) scale('+scale+')';
        }, 800);
      } else {
        member.style.transform = 'translate(0px, 0px) scale(1)';
        setTimeout(() => {
          member.style.transform = 'translate(-'+xOff+'px, '+yOff+'px) scale('+scale+')';
        }, 800);
      }
    })
  }

  function nextQuestion() {
    let currentQuestion = document.querySelector('.formo2022-teammember-sorting-questions a.active');
    let nextQuestion;
    if ( currentQuestion.closest('p').nextElementSibling ) {
      nextQuestion = currentQuestion.closest('p').nextElementSibling.querySelector('a')
    }
    else  { 
      nextQuestion = questions[0];
    }
    currentQuestion.classList.remove('active');
    nextQuestion.classList.add('active');
    sortby(nextQuestion.getAttribute('href').replace('#',''));
  }
  function prevQuestion() {
    let currentQuestion = document.querySelector('.formo2022-teammember-sorting-questions a.active');
    let prevQuestion;
    if ( currentQuestion.closest('p').previousElementSibling ){
      prevQuestion = currentQuestion.closest('p').previousElementSibling.querySelector('a');
    }
    else { 
      prevQuestion = questions[questions.length-1];
    }
    currentQuestion.classList.remove('active');
    prevQuestion.classList.add('active');
    sortby(prevQuestion.getAttribute('href').replace('#',''));
  }

  nextBtn.addEventListener('click', function(e) {
    e.preventDefault();
    nextQuestion();
  })
  prevBtn.addEventListener('click', function(e) {
    e.preventDefault();
    prevQuestion();
  })

 
  questions.forEach(question => {
    const target = question.getAttribute('href').replace('#', '');
    question.addEventListener('click', function(e){
      e.preventDefault();
      question.classList.add('active');
      sortby(target);
    })
  })

  questions[0].classList.add('active');
  sortby(questions[0].getAttribute('href').replace('#',''));
  
}
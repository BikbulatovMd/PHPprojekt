const quizData = [
  {
    question: 'Who possesses the ring of power at the start of the trilogy??',
    a: 'A: Gandalf',
    b: 'B: Bilbo',
    c: 'C: Sauron',
    correct: 'b',
  },
  {
    question: 'Who do the hobbits encounter at the Prancing Pony?',
    a: 'A: Aragorn',
    b: 'B: Legolas',
    c: 'C: Boromir',
    correct: 'a',
  },
  {
    question: 'How many members make up the fellowship of the ring?',
    a: 'A: Seven',
    b: 'B: Ten',
    c: 'C: Nine',
    correct: 'c',
  },
  {
    question: 'What is the name of the elf in the fellowship?',
    a: 'Merry',
    b: 'Legolas',
    c: 'Gimli',
    correct: 'b',
  },
  {
    question: 'What is the name of the dwarf in the fellowship?',
    a: 'Gimli',
    b: 'Sauron',
    c: 'Pipin',
    correct: 'a',
  },
];

const quiz = document.getElementById('quiz');
const answerElements = document.querySelectorAll('.answer');
const questionElement = document.getElementById('question');
const a_text = document.getElementById('a_text');
const b_text = document.getElementById('b_text');
const c_text = document.getElementById('c_text');
const submit = document.getElementById('submit');
const restart = document.getElementById('restart');
const quizCount = document.querySelector('.quiz-count');

let currentQuiz = 0;
let score = 0;

loadQuiz();

function loadQuiz() {
  deselectAnswers();

  quizCount.textContent = score + '/' + quizData.length;

  const currentQuizData = quizData[currentQuiz];

  questionElement.innerText = currentQuizData.question;
  a_text.innerText = currentQuizData.a;
  b_text.innerText = currentQuizData.b;
  c_text.innerText = currentQuizData.c;
}

function deselectAnswers() {
  answerElements.forEach((answerEl) => (answerEl.checked = false));
}

function getSelected() {
  let answer;

  answerElements.forEach((answerEl) => {
    if (answerEl.checked) {
      answer = answerEl.id;
    }
  });

  return answer;
}

function reload() {
  currentQuiz = 0;
  score = 0;

  loadQuiz();
}

submit.addEventListener('click', () => {
  const answer = getSelected();

  if (answer) {
    if (answer === quizData[currentQuiz].correct) {
      score++;
    }

    currentQuiz++;

    quizCount.textContent = score + '/' + quizData.length;

    if (currentQuiz < quizData.length) {
      loadQuiz();
    } else {
      quiz.innerHTML = `<h2>You answered coreectly at ${score}/${quizData.length} questions</h2>
      <button id="restart" type="button" class="btn btn-secondary btn-lg" onclick="location.reload()">Restart</button>
          `;
    }
  }
});

restart.addEventListener('click', () => {
  reload();
});

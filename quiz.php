<?php
include('partials/header.php');
?>

<main class="container d-flex align-items-center justify-content-center">
  <div class="quiz-box" id="quiz">
    <div class="quiz-count">0/0</div>
    <div class="quiz-header">
      <h2 id="question">Question text</h2>
      <ul class="answer-list">
        <li class="answer-wrapper">
          <input type="radio" name="answer" id="a" class="answer" />
          <label for="a" id="a_text">Answer 1</label>
        </li>
        <li class="answer-wrapper">
          <input type="radio" name="answer" id="b" class="answer" />
          <label for="b" id="b_text">Answer 2</label>
        </li>
        <li class="answer-wrapper">
          <input type="radio" name="answer" id="c" class="answer" />
          <label for="c" id="c_text">Answer 3</label>
        </li>
      </ul>
    </div>
    <div class="quiz-buttons">
      <button id="restart" type="button" class="btn btn-secondary btn-lg me-2">Restart</button>
      <button id="submit" type="button" class="btn btn-secondary btn-lg">Next</button>
    </div>
  </div>
</main>

<?php
include('partials/footer.php');
?>
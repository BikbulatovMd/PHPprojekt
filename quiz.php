<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
  <link rel="stylesheet" href="style/main.css" />
  <title>Document</title>
</head>

<body>
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

  <footer class="footer">
    <div class="container">
      <ul class="socials">
        <li class="socials-item">
          <a href="tel:+421950788221" class="socials-link">
            <img src="./img/icons/whatsapp.svg" alt="tel number" />+421950234987
          </a>
        </li>
        <li class="socials-item">
          <a href="https://edu.ukf.sk/user/profile.php?id=29446" target="_blank" class="socials-link">
            <img src="./img/icons/instagram.svg" alt="instagram" />@stepahkaaa
          </a>
        </li>
        <li class="socials-item author">
          <a href="mailto:" target="_blank" class="socials-link"> bikbulatov.stepan@gmail.com </a>
        </li>
      </ul>
      <div class="copyright">&#169;All rights reserved.</div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/quiz.js"></script>
</body>

</html>
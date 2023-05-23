<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./style/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="./index.html">
            LOTR
            <img src="./img/logo2.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top ms-2" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LOTR</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/movies.html">Movies</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/games.html">Games</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/quiz.html">Quiz</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/characters.html">Character</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contacts.html">Contacts</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="container">
        <div class="row">
          <div class="col cartName"><h2>The cart of middle ARCH</h2></div>
        </div>
        <div class="row">
          <div class="col cartImg"></div>
        </div>
      </section>
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
            <a href="/kek" target="_blank" class="socials-link">
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

    <script src="/app.js" defer></script>
  </body>
</html>


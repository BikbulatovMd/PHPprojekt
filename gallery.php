<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <?php
  include('partials/header.php');
  ?>

  <main class="py-4">
    <div class="container">
      <section class="mb-4">
        <h2>The Fellowship of the Ring (2001)</h2>
        <p>
          In the Second Age of Middle-earth, the lords of Elves, Dwarves, and Men are given Rings of Power.
          Unbeknownst to them, the Dark Lord Sauron forges the One Ring in Mount Doom, instilling into it a great part
          of his power, to dominate the other Rings so he might conquer Middle-earth. A final alliance of Men and
          Elves battles Sauron's forces in Mordor. Isildur of Gondor severs Sauron's finger and the Ring with it,
          thereby vanquishing Sauron and returning him to spirit form. With Sauron's first defeat, the Third Age of
          Middle-earth begins. The Ring's influence corrupts Isildur, who takes it for himself and is later killed by
          Orcs. The Ring is lost in a river for 2,500 years until it is found by Gollum, who owns it for over four and
          a half centuries. The ring abandons Gollum and it is subsequently found by a hobbit named Bilbo Baggins, who
          is unaware of its history.
        </p>
        <div id="carousel1" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Gallery/Fellowship-of-the-Ring-poster-film.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>First movie</h5>
                <p>The cover of the first film</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/The-Fellowship-of-the-Ring-composite.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Book</h5>
                <p>The cover of the first book.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/Fellowship-of-the-Ring-poster-game.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Game for PS</h5>
                <p>The cover game for Playstation.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <section class="mb-4">
        <h2>The Two Towers (2002)</h2>
        <p>
          Awakening from a dream of Gandalf fighting the Balrog in Moria, Frodo Baggins finds himself, along with
          Samwise Gamgee, lost in the Emyn Muil near Mordor. They discover that they are being tracked by Gollum, a
          former bearer of the One Ring. Capturing Gollum, Frodo takes pity and allows him to guide them, reminding
          Sam that they will need Gollum's help to infiltrate Mordor. Aragorn, Legolas, and Gimli pursue a band of
          Uruk-hai to save their companions Merry and Pippin, entering the kingdom of Rohan. The Uruk-hai are ambushed
          by a group of Rohirrim, allowing Merry and Pippin to escape into Fangorn Forest. Meeting Aragorn's group,
          the Rohirrim's leader Éomer explains that he and his men have been exiled by Rohan's king, Théoden, who is
          under the control of Saruman and his servant Gríma Wormtongue. Éomer believes Merry and Pippin were killed
          during the raid but leaves the group two horses. In Fangorn, Aragorn's group encounters Gandalf, who after
          his fight against the Balrog was resurrected as Gandalf the White to help save Middle-earth.
        </p>
        <div id="carousel2" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Gallery/two-towers-game.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>Game by Two Towers</h5>
                <p>A game based on Two Towers game.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/two-towers-legolas.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>One of the main characters - Legolas</h5>
                <p>Legolas was a Sindar Elf who was part of the Fellowship of the Ring in the Third Age.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/two-towers-book.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>The cover book Two Towers</h5>
                <p>
                  Tolkien came up with the title under deadline pressure and later expressed dissatisfaction with it.
                  In letters and one sketch, he considered several possible sets of towers, including Minas Tirith and
                  Barad-dûr, and even the possibility of leaving the matter ambiguous.
                </p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
      <section class="mb-4">
        <h2>TThe Return of the King (2003)</h2>
        <p>
          The hobbit, Sméagol, is fishing with his cousin Déagol, who discovers the One Ring in the river. Sméagol's
          mind is ensnared by the Ring, and he kills his cousin for it. Increasingly corrupted physically and
          mentally, he retreats into the Misty Mountains and becomes known as Gollum. Centuries later, during the War
          of the Ring, Gandalf leads Aragorn, Legolas, Gimli, and King Théoden of Rohan to Isengard, where they
          reunite with Merry and Pippin. Gandalf retrieves Saruman's palantír, and the group returns to Edoras to
          celebrate their victory at Helm's Deep.[a] Pippin looks into the palantír, seeing Sauron and a burning tree.
          Gandalf deduces that the enemy plans to attack Gondor's capital Minas Tirith; he rides there to warn
          Gondor's steward Denethor. Pippin, who accompanies him, swears fealty to Denethor, whose now-dead heir
          Boromir had saved his life;[b] on Gandalf's instruction, he triggers the lighting of the beacons, which call
          for help from Rohan.
        </p>
        <div id="carousel3" class="carousel slide" data-bs-ride="false">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Gallery/aragorn3.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>One of the main characters - Aragorn</h5>
                <p>
                  Aragorn II, son of Arathorn II and Gilraen, also known as Elessar and Strider, was the 16th and last
                  Chieftain of the Dúnedain of the North; later crowned King Elessar Telcontar .
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/bilbo-caarton.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>A frame frome cartoon Lord of the Rings (1978)</h5>
                <p>In this frame we see Bilbo wearing the ring of omnipotence</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Gallery/frodo-drop.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-none d-md-block">
                <h5>The frame from the movie Return of the King</h5>
                <p>In this frame we see Frodo who throws a Кing into a volcano.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </div>
  </main>

  <?php
  include('partials/footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
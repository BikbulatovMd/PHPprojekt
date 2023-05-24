<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style/main.css" />
  <link href="https://fonts.googleapis.com/css?family=Akaya Kanadaka" rel="stylesheet" />
  <title>Games</title>
</head>

<!-- Header -->

<body>
  <?php
  include('partials/header.php');
  ?>

  <main>
    <section class="container">
      <h2>Games</h2>
      <div class="table-wrap">
        <table class="table table-bordered table-light table-striped">
          <thead>
            <tr>
              <th>№</th>
              <th>Name</th>
              <th>Date</th>
              <th>Story</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th>1</th>
              <td>The Hobbit: Battle Of The Five Armies – Fight For Middle Earth</td>
              <td>2014</td>
              <td>
                Fueled by Peter Jackson's return to Middle-earth, The Hobbit birthed a slew of free-to-play mobile
                games.
              </td>
            </tr>
            <tr>
              <th>2</th>
              <td>The Lord Of The Rings: Legends Of Middle-Earth</td>
              <td>2014</td>
              <td>
                If a license is popular enough, the mobile scene will be blessed with a turn-based RPG that presents
                fans with an opportunity to collect their favorite characters as cards.
              </td>
            </tr>
            <tr>
              <th>3</th>
              <td>Lord Of The Rings: Conquest</td>
              <td>12.12.2012</td>
              <td>
                Stepping away from the mobile scene, The Lord of the Rings: Conquest took a page from Star Wars:
                Knights of the Old Republic, granting the option to follow the path of good or evil.
              </td>
            </tr>
            <tr>
              <th>4</th>
              <td>The Lord Of The Rings: The Fellowship Of The Ring</td>
              <td>2002</td>
              <td>
                With Jackson's movies proving to be a resounding success, three licensed games were released to
                coincide with their respective movies.
              </td>
            </tr>
            <tr>
              <th>5</th>
              <td>Lego The Hobbit</td>
              <td>2014</td>
              <td>
                Stepping away from the mobile scene, The Lord of the Rings: Conquest took a page from Star Wars:
                Knights of the Old Republic, granting the option to follow the path of good or evil.
              </td>
            </tr>
            <tr>
              <th>6</th>
              <td>Lord Of The Rings: Conquest</td>
              <td>12.12.2012</td>
              <td>
                At long last, the gates of Mordor are within reach; from this moment on, the entries are genuinely
                worth recommending. By all accounts, Lego The Hobbit lands among the second-tier of Traveller's Tales
                extensive lineup.
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <?php
  include('partials/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="/js/games.js"></script>
</body>

</html>
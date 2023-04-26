<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    @import url('https://fonts.cdnfonts.com/css/gauntlet');
    </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg" style="width: 100%;position: fixed; background: url(../media/BgBrown.png);">
        <div class="container-fluid">
          <a class="navbar-brand text-white btn-home" href="#"><img src="media/9040452_music_note_icon.png" alt=""><div><h2>Les instruments à vent en bois</h2></div> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon-menu"></span>
          </button>
          <div class="collapse navbar-collapse menu" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Instruments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">
                  <button type="button" class="btn btn-warning btn-admin">Admin</button></a>
              </li>
            </ul>
          </div>
        </div>
    </nav>


    <div id="container">
       
            <div id="item-0"><img src="../media/photo-accueil.jpg" alt="image-accueil" height="500px" width="500px"></div>
        <div id="item-1"><p>Les instruments à vent en bois sont une famille d'instruments de musique comprenant des instruments tels que la flûte traversière, le saxophone, la clarinette et la flûte à bec. Ces instruments sont fabriqués en bois et produisent du son lorsque l'air est soufflé à travers une embouchure en bois ou en métal. Ils sont souvent utilisés dans des genres musicaux tels que le jazz, la musique classique et la musique folklorique. Les instruments à vent en bois sont appréciés pour leur timbre chaud et expressif, leur grande flexibilité et leur capacité à jouer des nuances subtiles. Cependant, ils nécessitent une technique de jeu spécifique et un entretien régulier pour maintenir leur qualité sonore.</p></div>

        <div id="item-2"><a href="#" target="_blank">En savoir plus</a></div>

    </div>

  

    <div class="box-container">
    <h2 style="text-align: center;">Découvrez nos instruments</h2>
    <div class="box box01"><a href="#"><img src="../media/AncheLibreHarmonica.png" alt="" srcset="" height="100%" width="100%"></a></div>
    <div class="box box02"><a href="#"><img src="../media/AncheSimpleClarinette.jpg" alt="" srcset="" height="480px"></a></div>
    <div class="box box03"><a href="#"><img src="../media/BiseauFlute.jpg" alt="" srcset="" height="480px" width="100%" ></a></div>
    <div class="box box04"><img src="../media/AncheDoubleBasson.jpg" alt="" srcset="" height="480px" ></div>
</div>

<div class="controls">
    <button id="prevButton">Prev</button>
    <button id="nextButton">Next</button>
</div>


<div class="container-footer">
      <div class="footer-menu">
        <p> <strong>MENU</strong></p>
        <a href="">Accueil</a>
        <a href="">A propos</a>
        <a href="">Instrument</a>
        <a href="">Contact</a>
      </div>
      <div class="footer-categ">
        <p> <strong>CATEGORIE</strong></p>
        <a href="">Biseau</a>
        <a href="">Anche libre</a>
        <a href="">Anche simple</a>
        <a href="">Anche double</a>
      </div>
      <div class="footer-social">
        <p> <strong>RESEAUX</strong></p>
        <br>
        <a href="">
          <img src="../media/1298747_instagram_brand_logo_social media_icon.png" alt="">
        </a>
        <a href="">
          <img src="../media/5296514_bird_tweet_twitter_twitter logo_icon.png" alt="">
        </a>
        <a href="">
          <img src="../media/5365678_fb_facebook_facebook logo_icon.png" alt="">
        </a>
        
        
        
      </div>
      <div class="footer-admin">
        <p> <strong>ADMIN</strong></p>
        <br>
        <a href="">
          <button type="button" class="btn btn-warning">Admin</button>
        </a>
        <br>
        <br>
        <p>&copyCF2M</p><!--
        <p>Billy</p>
        <p>Fred</p>
        <p>Maksym</p>-->
        <a href="" class="text-white">Mentions légales</a>

      </div>
    </div>


<script src="../js/gsap.min.js"></script>
<script src="../js/script.js">
</script>

<script>
      console.clear();
let count = 0;
const targets = document.querySelectorAll(".box");
gsap.set(targets, { xPercent: 100 });
gsap.set(targets[0], { xPercent: 0 });

// Next button
function slideOneNext() {
gsap.fromTo(targets[count], { xPercent: 0, zIndex: 0 }, { delay: 0.2, duration: 1.2, xPercent: 0, zIndex: -10 });
count = count < targets.length - 1 ? ++count : 0;
gsap.fromTo(targets[count], { xPercent: 100, zIndex: 10 }, { duration: 1.2, xPercent: 0, zIndex: 0 });
}
nextButton.addEventListener("click", function() {
slideOneNext();
});

// Previous button
function slideOnePrev() {
  gsap.fromTo(targets[count], { xPercent: 0, zIndex: 10 }, {xPercent: 0, zIndex: 0 });
  gsap.fromTo(targets[count], { xPercent: 0, zIndex: 0 }, { delay: 0, duration: 1.2, xPercent: 100, zIndex: -10 });
  count = count < targets.length ? --count : 0;
}
prevButton.addEventListener("click", function() {
  slideOnePrev();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
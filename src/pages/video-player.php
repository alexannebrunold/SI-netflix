<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VideoPlayer</title>
  <link rel="stylesheet" href="../scss/style.scss" />
  <script src="../js/player.js" defer></script>
</head>

<body>
  <div class="video">
    <video class="video__played" src="../assets/ma_nouvelle_vie_commence_maintenant.mp4" type="video/mp4"></video>
    <button class="video__return">
      <img src="../assets/images/videoplayer/return.svg" alt="">
    </button>
    <div class="video__progress">
      <div class="video__progress__bar"></div>
    </div>

    <!-- <div class="video__centralbutton"> -->
    <button class="video__centralbutton--played">
      <img src="../assets/images/videoplayer/button_play.svg" alt="">
    </button>
    <!-- </div> -->

    <div class="video__controller">
      <button class="video__controller--pause">
        <img src="../assets/images/videoplayer/pause.svg" alt="Pause">
      </button>

      <button class="video__controller--play">
        <img src="../assets/images/videoplayer/play.svg" alt="Play">
      </button>

      <button class="video__controller--addtime-forward"><img src="../assets/images/videoplayer/moreSeconds.svg"
          alt="moreSeconds"></button>
      <button class="video__controller--addtime-backward"><img src="../assets/images/videoplayer/lessSeconds.svg"
          alt="lessSeconds"></button>

      <button class="video__controller--replay"><img src="../assets/images/videoplayer/replay.svg" alt="">
      </button>

      <button class="video__controller--sound">
        <img src="../assets/images/videoplayer/sound.svg" alt="">
        <div class="video__controller__container">
          <input class="video__controller__container--volume" type="range" />
        </div>
      </button>

      <button class="video__controller--mute">
        <img src="../assets/images/videoplayer/mute.svg" alt="">
      </button>

      <p class="video__controller--title">Série : Titre : Episode 4</p>
    </div>
  </div>
</body>

</html>
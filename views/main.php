<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="SongStars una página web que te permite votar y escuchar canciones.">
  <meta name="keywords" content="SongStars,votar,rate, música, online, en linea, escuchar, streaming, álbum, lista de reproducción">
  <title>SongStars</title>

  <link rel="icon" href="<?php echo ROOT_PATH; ?>assets/imagenes/favicon.png">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/spotify-efc7991703.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/index-7d90977231.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/shelf-ffd8a9773c.css">

  <script src="//www.scdn.co/webpack/jquery-2.1.3.min.afbb0635311fc49d0bbc.js"></script>
  <script src="//www.scdn.co/webpack/tracking.download.07e8d92fcf7d99966fee.js"></script>

</head>

<body style="margin-top: 150px;" class=" m-es l-es page-homepage is-loggedout reboot index-homepage ">

  <div id=" fb-root">
  </div>

  <div class="wrap">

    <!-- <h1>
      <li></li>
      <li><a href="<?php echo ROOT_URL; ?>songs">songs</a></li>
      <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
    </h1> -->
    <header id="js-navbar" class="navbar navbar-default navbar-fixed-top navbar-semi-transparent navbar-highlight-green" role="banner">
      <div class="container">
        <div class="navbar-header">
          <!-- Menu lateral pantalla pequeña -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Usuario -->
          <a href="/es/account/overview/" class="user-link hidden">
            <div class="user-icon-container img-circle navbar-user-img">
              <svg class="user-icon">
                <use xlink:href="#user-icon">
              </svg>
            </div>
          </a>
          <a class="navbar-brand" href="<?php echo ROOT_PATH; ?>">
            <img src="<?php echo ROOT_PATH; ?>assets/imagenes/sonstars.png" height="92" width="172" style="padding-top:4px;">
          </a>
        </div>
        <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">

          <ul class="nav navbar-nav navbar-right nav-main">

            <li>
              <a href="<?php echo ROOT_PATH; ?>songs" id="nav-link-premium" data-ga-category="menu" data-ga-action="premium">
                Canciones
              </a>
            </li>

            <li>
              <a href="https://support.spotify.com/?utm_source=www.spotify.com&amp;utm_medium=www_header" id="nav-link-help" data-ga-category="menu" data-ga-action="help">
                Artistas
              </a>
            </li>

            <li>
              <a href="/es/download/" id="nav-link-download" class="js-get-spotify js-gtm-event" data-ga-category="menu" data-ga-action="download" data-gtm-event-name="download_spotify_button_clicked" data-tracking='{"category": "download", "action": "download start", "label": "download-navbar"}'>
                Conciertos
              </a>
            </li>

            <li role="separator" class="divider"></li>

            <li class="alternate sidepanel-item-small ">
              <a href="/es/signup/" id="nav-link-sign-up" data-ga-category="menu" data-ga-action="sign-up">
                Registrarse
              </a>
            </li>

            <li class="alternate sidepanel-item-small">
              <a href="/es/login/" id="header-login-link" class="user-link" data-tracking='{"category": "menu", "action": "log-in"}'>
                <span class="user-text navbar-user-text">Iniciar sesión</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>


    <!-- MUSICA PARA TODOS
      <section>
      <div class="hero hero-home simplified">
        <div class="hero-home-bg-cover"></div>
        <div class="container container-simplified">
          <div class="row row-simplified">
            <h1>Música para todos.</h1>
            <h4>Millones de canciones. Escúchalas, vótalas, disfrútalas.</h4>
            <a href="/es/download/" id="generic-btn-premium" role="button" data-tracking='{"category": "home (offer)", "action": "premium"}' class="btn btn-green btn-simplified js-goto-signup js-button-hero-get-free">
              EMPIEZA A VOTAR
            </a>
          </div>
        </div>
      </div>
    </section> -->


  </div>



  <!-- hehe -->
  <div class="container">

    <div class="row">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </div>

  </div>





  <footer role="contentinfo" class="footer footer-default ">
    <div class="container">
      <nav class="row">

        <div class="col-xs-12 col-md-2">
          <div>
            <a href="/es/">
              <img src="<?php echo ROOT_PATH; ?>assets/imagenes/sonstars.png" height="92" width="172" style="padding-right:20px;">
            </a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Empresa</h3>
          <ul class="nav">

            <li>
              <a href="/es/about-us/contact/" id="nav-link-about" data-ga-category="menu" data-ga-action="about">
                Acerca de
              </a>
            </li>

            <li>
              <a href="https://www.spotifyjobs.com/" id="nav-link-jobs" data-ga-category="menu" data-ga-action="jobs">
                Empleo
              </a>
            </li>

            <li>
              <!-- Contacto cambiar href -->
              <a href="https://newsroom.spotify.com/" id="nav-link-press" data-ga-category="menu" data-ga-action="press">
                Contacto
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Comunidades</h3>
          <ul class="nav">

            <li>
              <a href="https://artists.spotify.com/" id="nav-link-artists" data-ga-category="menu" data-ga-action="artists">
                Para artistas
              </a>
            </li>

            <li>
              <a href="https://developer.spotify.com/" id="nav-link-developers" data-ga-category="menu" data-ga-action="developers">
                Desarrolladores
              </a>
            </li>

            <li>
              <a href="/es/brands/" id="nav-link-brands" data-ga-category="menu" data-ga-action="brands">
                Marcas
              </a>
            </li>

            <li>
              <a href="https://investors.spotify.com/" id="nav-link-investors" data-ga-category="menu" data-ga-action="investors">
                Inversores
              </a>
            </li>

            <li>
              <a href="https://spotifyforvendors.com/" id="nav-link-vendors" data-ga-category="menu" data-ga-action="vendors">
                Proveedores
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
          <h3 class="nav-title">Enlaces útiles</h3>
          <ul class="nav">
            <li>
              <a href="https://support.spotify.com/?utm_source=www.spotify.com&amp;utm_medium=www_footer" id="nav-link-help" data-ga-category="menu" data-ga-action="help">
                Ayuda
              </a>
            </li>

            <li class="hidden-xs ">
              <a href="/es/redirect/webplayerlink/?utm_medium=www_footer" id="nav-link-play" data-ga-category="menu" data-ga-action="play">
                Reproductor web
              </a>
            </li>

            <li class="visible-xs hidden-sm ">
              <a href="/es/free/?utm_medium=www_footer" id="nav-link-free" data-ga-category="menu" data-ga-action="free">
                App gratis para móvil
              </a>
            </li>

          </ul>
        </div>

        <div class="col-xs-12 col-md-4 col-social">
          <ul class="nav">
            <li>
              <a href="http://instagram.com/spotify">
                <svg class="social-icon">
                  <use xlink:href="#instagram-icon">
                    <svg>
                      <span class="social-text">Instagram</span>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/spotify">
                <svg class="social-icon">
                  <use xlink:href="#twitter-icon">
                    <svg>
                      <span class="social-text">Twitter</span></a>
            </li>
            <li>
              <a href="https://www.facebook.com/Spotify">
                <svg class="social-icon">
                  <use xlink:href="#facebook-icon">
                    <svg>
                      <span class="social-text">Facebook</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <nav class="row row-small">
        <div class="col-xs-9">

          <ul class="nav nav-small">
            <li>
              <a href="/es/legal/">Legal</a>
            </li>
            <li>
              <a href="/es/privacy/">Centro de Privacidad</a>
            </li>
            <li>
              <a href="/legal/privacy-policy/">Política de Privacidad</a>
            </li>
            <li>
              <a href="/es/legal/cookies-policy/">Cookies</a>
            </li>
            <li>
              <a href="/es/legal/privacy-policy/#s3">Información sobre los anuncios</a>
            </li>

          </ul>
        </div>

        <div class="col-xs-3 text-right">
          <a class="market" href="/es/select-your-country/" title="Clic para cambiar de idioma">
            <div class="media">
              <div class="media-body media-middle">
                España
              </div>
              <div class="media-right media-middle">
                <span class="media-object flag-icon flag-icon-es"></span>
              </div>
            </div>
          </a>

          <small class="copyright">&copy; 2019 JZ</small>
        </div>
      </nav>
    </div>
  </footer>


  <script src="//www.scdn.co/webpack/spweb-site.min.03023ab9f14d51c66ec5.js"></script>



  <script>
    // Fire an event once when the user scrolls past the fold
    $(document).bind('scroll.learner', function() {
      if ($(document).scrollTop() >= $(window).height()) {
        spweb.analytics.sendEvent('home', 'scroll-past-fold', '', '');
        $(document).unbind('scroll.learner');
        $(document).unbind('click.learner');
      }
    });
  </script>


  <script async src="//vt.myvisualiq.net/2/afTxMmlGwCNRJiC5Bd75ug%3D%3D/vt-150.js"></script>
  <script defer src="https://www.fastly-insights.com/insights.js?k=040e3997-282c-4275-ba9b-a406ce78b133&dnt=1"></script>

</body>

</html>
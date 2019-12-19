<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Artic.le - Artic.al is an onine tool to store, bundle and conusme articles from ALL over the internet.">
  <link rel='icon' href='assets/img/landing/favicon.png'>
  <link rel="manifest" href="./manifest.json"
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="apple-touch-icon" href="assets/img/landing/single-page-icon.png">
  <meta name="apple-mobile-web-app-title" content="Artic.le">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <title>Artic.le - <?php echo $title; ?></title>
    <?php echo $css;?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body ontouchstart="">
    <h1 class="hide">Artic.le</h1>
    <noscript>You need to enable JavaScript to run this app.</noscript>

    <?php if($_GET['page'] == 'articles' || $_GET['page'] == 'bundles' || $_GET['page'] == 'bundle' || $_GET['page'] == 'profile' || $_GET['page'] == 'new'):?>
    <section class="home__header__container">

    <a class="header__logo" href="index.php?page=articles">
      <div class="nextXclose">
        <svg width="23px" height="26px" viewBox="0 0 23 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="linearGradient-1">
                    <stop stop-color="#CE6BF7" offset="0%"></stop>
                    <stop stop-color="#8D3AEC" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="logo/reg">
                    <g id="Group" transform="translate(2.000000, 1.000000)">
                        <g id="Group-10">
                            <polygon id="Path-3" fill="url(#linearGradient-1)" points="0 13.7641026 19 13.7641026 13.2696701 4.38023202 11.1048066 4.9624596 8.37386018 0.764102564 5.64846851 4.9624596 4.38461538 4.67193121"></polygon>
                            <polygon id="Stroke-2" stroke="url(#linearGradient-1)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" points="0 13.8757415 4.64818541 4.47906693 5.68042249 5.02538522 8.37386018 0.764102564 10.9148936 5.18928071 13.189003 4.15127596 19 13.4386869 11.68731 22.5075705 9.46737082 20.8139838 6.59450152 23.7641026"></polygon>
                        </g>
                    </g>
                </g>
            </g>
        </svg>
        <p>Artic.le</p>
      </div>
      </a>

      <a class="logout" href="index.php?page=logout "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg>Logout</a>


    </section>
    <?php endif;?>


    <?php echo $content;?>


    <?php if($_GET['page'] == 'articles' || $_GET['page'] == 'bundles' || $_GET['page'] == 'bundle' || $_GET['page'] == 'profile' || $_GET['page'] == 'new'):?>
    <nav class="home__navigation__container">
        <ul class="home__navigation">
          <li><a class="home__navigation__item <?php if($_GET['page'] == 'articles') echo 'home__navigation__item__active'?>" href="index.php?page=articles">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"/></svg>
            Articles
          </a></li>
          <li><a class="home__navigation__item <?php if($_GET['page'] == 'bundles' || $_GET['page'] == 'bundle') echo 'home__navigation__item__active'?>" href="index.php?page=bundles">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M15 7v12.97l-4.21-1.81-.79-.34-.79.34L5 19.97V7h10m4-6H8.99C7.89 1 7 1.9 7 3h10c1.1 0 2 .9 2 2v13l2 1V3c0-1.1-.9-2-2-2zm-4 4H5c-1.1 0-2 .9-2 2v16l7-3 7 3V7c0-1.1-.9-2-2-2z"/></svg>
            Bundles
          </a></li>
          <!-- <li><a class="home__navigation__item <?php if($_GET['page'] == 'profile') echo 'home__navigation__item__active'?>" href="index.php?page=profile">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M0 0h24v24H0z"/><g fill-rule="evenodd" clip-rule="evenodd"><path d="M9 17l3-2.94c-.39-.04-.68-.06-1-.06-2.67 0-8 1.34-8 4v2h9l-3-3zm2-5c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4"/><path d="M15.47 20.5L12 17l1.4-1.41 2.07 2.08 5.13-5.17 1.4 1.41z"/></g></svg>
          Profile
        </a></li> -->
        </ul>
      </nav>
    <?php endif;?>


    <?php echo $js; ?>
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script>
        if ("serviceWorker" in navigator) {
          if (navigator.serviceWorker.controller) {
            console.log("[PWA Builder] active service worker found, no need to register");
          } else {
            // Register the service worker
            navigator.serviceWorker
              .register("pwabuilder-sw.js", {
                scope: "./"
              })
              .then(function (reg) {
                console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
              });
          }
        }
        </script> -->
      </body>
    </html>

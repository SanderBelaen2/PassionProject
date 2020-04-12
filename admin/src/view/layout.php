<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="BioLinky - Admin panel">
  <link rel='icon' href='assets/img/landing/favicon.png'>
  <link rel="canonical" href="https://admin.themockupcollection.com/" />
  <link rel="manifest" href="./manifest.json">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="apple-touch-icon" href="assets/icons/icon-512x512.png">
  <meta name="apple-mobile-web-app-title" content="`MockupCollection">
  <meta name="theme-color" content="<?php if($title == 'LandingPage' || $title == 'Login' || $title == 'Register'){ echo '#3f4ac6';}else{echo '#f5f6f8';} ?>" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <title>Admin - <?php echo $title; ?></title>
  <?php echo $css;?>
  <base id="base" href="../">

  </head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>

    <?php if($_GET['page'] == 'landing' || $_GET['page'] == 'how' || $_GET['page'] == 'blog' || $_GET['page'] == 'privacypolicy' || $_GET['page'] == 'blogpost' ||  $_GET['page'] == 'termsandconditions' || $_GET['page'] == 'faq' || $_GET['page'] == 'contact' || $_GET['page'] == 'autopost' || empty($_GET['page'])): ?>
    <header class="landing__header">
      <div class="container">

      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
    <?php endif; ?>


    <?php echo $content;?>

    <?php if($_GET['page'] == 'home' || $_GET['page'] == 'approve' || $_GET['page'] == 'scrape' || $_GET['page'] == 'bugs' || $_GET['page'] == 'verification' || $_GET['page'] == 'ads' || $_GET['page'] == 'autopost' || $_GET['page'] == 'blog'):?>

    <section class="home__navigation__container">
      <div>
      <a href="index.php">
      <div class="home__navigation__logo">
          <img src="assets/img/landing/favicon.png" alt="Malli graphics logo">
          <p><span>Admin</span></p>
        </div>
        </a>
          <ul class="home__navigation">
            <li>
              <a class="home__navigation__item <?php if($_GET['page'] == 'home') echo 'home__navigation__item__active';?>" href="index.php?page=home">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 2.05v3.03c3.39.49 6 3.39 6 6.92 0 .9-.18 1.75-.48 2.54l2.6 1.53c.56-1.24.88-2.62.88-4.07 0-5.18-3.95-9.45-9-9.95zM12 19c-3.87 0-7-3.13-7-7 0-3.53 2.61-6.43 6-6.92V2.05c-5.06.5-9 4.76-9 9.95 0 5.52 4.47 10 9.99 10 3.31 0 6.24-1.61 8.06-4.09l-2.6-1.53C16.17 17.98 14.21 19 12 19z"/></svg>
                <p>Stats</p>
              </a>
            </li>

            <li>
              <a class="home__navigation__item <?php if($_GET['page'] == 'approve') echo 'home__navigation__item__active';?>" href="index.php?page=approve">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                <p>Approve</p>
              </a>
            </li>

            <li>
              <a class="home__navigation__item <?php if($_GET['page'] == 'scrape') echo 'home__navigation__item__active';?>" href="index.php?page=scrape">
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M8,8H6v7c0,1.1,0.9,2,2,2h9v-2H8V8z"/><path d="M20,3h-8c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,11h-8V7h8V11z"/><path d="M4,12H2v7c0,1.1,0.9,2,2,2h9v-2H4V12z"/></g></g><g display="none"><g display="inline"/><g display="inline"><path d="M8,8H6v7c0,1.1,0.9,2,2,2h9v-2H8V8z"/><path d="M20,3h-8c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,11h-8V7h8V11z"/><path d="M4,12H2v7c0,1.1,0.9,2,2,2h9v-2H4V12z"/></g></g></svg>
                <p>Scrape</p>
              </a>
            </li>

          <li>
            <a class="home__navigation__item <?php if($_GET['page'] == 'blog') echo 'home__navigation__item__active';?>" href="index.php?page=blog">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M17,19.22H5V7h7V5H5C3.9,5,3,5.9,3,7v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-7h-2V19.22z"/><path d="M19,2h-2v3h-3c0.01,0.01,0,2,0,2h3v2.99c0.01,0.01,2,0,2,0V7h3V5h-3V2z"/><rect height="2" width="8" x="7" y="9"/><polygon points="7,12 7,14 15,14 15,12 12,12"/><rect height="2" width="8" x="7" y="15"/></g></g></svg>
              <p>Blog</p>
            </a>
          </li>

          <li>
            <a class="home__navigation__item <?php if($_GET['page'] == 'autopost') echo 'home__navigation__item__active';?>" href="index.php?page=autopost">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-2 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
              <p>AutoPost</p>
            </a>
          </li>

          <li>
            <a class="home__navigation__item <?php if($_GET['page'] == 'bugs') echo 'home__navigation__item__active';?>" href="index.php?page=bugs">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 8h-2.81c-.45-.78-1.07-1.45-1.82-1.96L17 4.41 15.59 3l-2.17 2.17C12.96 5.06 12.49 5 12 5c-.49 0-.96.06-1.41.17L8.41 3 7 4.41l1.62 1.63C7.88 6.55 7.26 7.22 6.81 8H4v2h2.09c-.05.33-.09.66-.09 1v1H4v2h2v1c0 .34.04.67.09 1H4v2h2.81c1.04 1.79 2.97 3 5.19 3s4.15-1.21 5.19-3H20v-2h-2.09c.05-.33.09-.66.09-1v-1h2v-2h-2v-1c0-.34-.04-.67-.09-1H20V8zm-6 8h-4v-2h4v2zm0-4h-4v-2h4v2z"/></svg>
              <p>Bugs</p>
            </a>
          </li>

          </ul>
      </div>
      <div class="desktoponly home__navigation__profile">
        <div class="home__navigation__profile__name">
          <p class="home__navigation__logout"><a href="index.php?page=logout">Logout</a></p>
        </div>
      </div>
    </section>

    <?php endif;?>



    <?php echo $js; ?>


  </body>
</html>

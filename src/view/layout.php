<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php if(!empty($description)){echo $description;}else{echo 'The best collection of FREE to download PSD mockups. Carefully Handpicked with ❤️ by designers. | Malli';}?>">
  <link rel='icon' href='./../assets/img/landing/favicon.png'>
  <link rel="manifest" href="./manifest.json">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="apple-touch-icon" href="assets/img/landing/single-page-icon.png">
  <meta name="apple-mobile-web-app-title" content="Malli">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="canonical" href="<?php if(!empty($canonical)){echo $canonical;}else{echo 'https://malli.graphics/category/all/1';}?>" />
  <base id="base" href="/">
  <title><?php echo $title; ?> | Malli Graphics</title>
  <?php echo $css;?>
  <link rel="stylesheet" rel="preload" href="https://unpkg.com/aos@next/dist/aos.css" />
  <?php if($_GET['page'] == 'detail'):?>
    <meta property="og:title" content="<?php echo $mockup['name'];?>">
    <meta property="og:description" content="<?php echo $mockup['text'];?>">
    <meta property="og:image" content="https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>">
    <meta property="og:image:alt" content="<?php echo $mockup['name'];?>">
    <meta property="og:url" content="https://malli.graphics/detail/<?php echo $mockup['url'];?>">
    <meta name="twitter:title" content="<?php echo $mockup['name'];?>">
    <meta name="twitter:description" content="<?php echo $mockup['text'];?>">
    <meta name="twitter:image" content="https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>">
    <meta name="twitter:image:alt" content="<?php echo $mockup['name'];?>">
  <?php elseif($_GET['page'] == 'blogpost'):?>
    <meta property="og:title" content="<?php echo $blogpost['title'];?>">
    <meta property="og:description" content="<?php echo $description;?>">
    <meta property="og:image" content="https://malli.graphics/assets/img/blog/<?php echo $blogpost['id'];?>_33.png">
    <meta property="og:image:alt" content="<?php echo $blogpost['title'];?>">
    <meta property="og:url" content="https://malli.graphics/blogpost/<?php echo $blogpost['id'];?>">
    <meta name="twitter:title" content="<?php echo $blogpost['title'];?>">
    <meta name="twitter:description" content="<?php echo $description;?>">
    <meta name="twitter:image" content="https://malli.graphics/assets/img/blog/<?php echo $blogpost['id'];?>_33.png">
    <meta name="twitter:image:alt" content="<?php echo $blogpost['title'];?>">
  <?php else:?>
    <meta property="og:title" content="<?php echo $title.' | '; ?>Malli.Graphics">
    <meta property="og:description" content="The best collection of FREE to download PSD mockups. Carefully Handpicked with ❤️ by designers. | Malli">
    <meta property="og:image" content="https://malli.graphics/assets/img/landing/social.jpg">
    <meta property="twitter:image:alt" content="The best collection of FREE mockups.">
    <meta property="og:url" content="https://malli.graphics/category/all/1">
    <meta name="twitter:title" content="<?php echo $title.' | '; ?>Malli.Graphics">
    <meta name="twitter:description" content="The best collection of FREE mockups to download. Carefully Handpicked with ❤️ by designers.">
    <meta name="twitter:image" content="https://malli.graphics/assets/img/landing/social.jpg">
    <meta name="twitter:image:alt" content="The best collection of FREE mockups.">
  <?php endif;?>
    <meta property="og:site_name" content="Malli - The best collection of FREE to download PSD mockups. Carefully Handpicked with ❤️ by designers.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@malligraphics">
    <meta property="fb:app_id" content="2613961728840166">
  </head>
  <body class="preload">
    <h1 class="hide">Malli.graphics</h1>
    <noscript>You need to enable JavaScript to run this app.</noscript>

  <section class="home__header<?php if($_GET['page'] == 'blog' || $_GET['page'] == 'blogpost' || $_GET['page'] == 'about' || $_GET['page'] == 'contact' || $_GET['page'] == 'submit' || $_GET['page'] == 'detail' || $_GET['page'] == 'faq' || $_GET['page'] == 'termsandconditions' || $_GET['page'] == 'privacypolicy') echo '__alt';?>">
    <h2 class="hide">Header</h2>
    <div class="nextX home__menu">
      <a href="/">
        <div class="logo">
          <img src="assets/img/landing/favicon.png" width="35" height="35" alt="Malli Graphics Logo, an abstract presentation of a purple letter M" title="The 'Malli Graphics' Logo">
          <p><strong>Malli</strong>.graphics</p>
        </div>
      </a>

      <div class="menu__desktop__container">
        <div class="menu">
          <nav>
            <ul class="nextXclose">
            <li><a class="menu__item" href="/blog">Blog</a></li>
            <li><a class="menu__item" href="/submit">Submit Mockup</a></li>
            </ul>
          </nav>
        </div>
        <div class="landing__socials">
          <a href="https://www.instagram.com/malli.graphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
          <a href="https://www.facebook.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/></svg></a>
          <a href="https://www.dribbble.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble icon</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg></a>
          <a href="https://www.twitter.com/MalliGraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
          <a href="https://www.pinterest.com/Malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Pinterest icon</title><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg></a>
        </div>
      </div>
    </div>

    <div class="menu__mobile__container" id="menuToggle">
      <input type="checkbox" />

      <span></span>
      <span></span>
      <span></span>

      <ul class="menu" id="menu">
        <li><a href="/">
          <div class="logo">
            <img src="assets/img/landing/favicon.png" width="35" height="35" alt="Malli Graphics Logo, an abstract presentation of a purple letter M" title="The 'Malli Graphics' Logo">
            <p><strong>Malli</strong>.graphics</p>
          </div>
        </a>
        </li>
        <li><a class="menu__item" href="/">Mockups</a></li>
        <li><a class="menu__item" href="/blog">Blog</a></li>
        <li><a class="menu__item" href="/submit">Submit Mockup</a></li>
        <li><a class="menu__item" href="/faq">FAQ</a></li>
        <li>
          <div class="landing__socials">
            <a href="https://www.instagram.com/malli.graphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
            <a href="https://www.facebook.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/></svg></a>
            <a href="https://www.dribbble.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble icon</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg></a>
            <a href="https://www.twitter.com/MalliGraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
            <a href="https://www.pinterest.com/Malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Pinterest icon</title><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg></a>
          </div>
        </li>
      </ul>
    </div>

    <?php echo $content;?>

    <?php if(!isset($_COOKIE['pdLiw5pCSAeSnm9bUgSl'])):?>
      <div class="landing__cookiesdiclaimer">
        <p>Everyone loves cookies. So do we. Take one, so this site runs perfectly. <a href="termsandconditions">More info.</a></p>
        <form action="" method="post">
          <input type="hidden" name="action" value="cookieagree">
          <input class="cookieagree__button" type="submit" value="Okay!"></input>
        </form>
        <div class="cookiesvg">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 368 368" style="enable-background:new 0 0 368 368;" xml:space="preserve"><path style="fill:#B989FE;" d="M341.52,105.44C353.36,129.04,360,155.76,360,184c0,97.2-78.8,176-176,176S8,281.2,8,184S86.8,8,184,8c28.24,0,54.96,6.64,78.56,18.48C253.44,36.4,248,49.52,248,64c0,30.96,25.04,56,56,56C318.48,120,331.6,114.56,341.52,105.44z M288,176c0-4.4-3.6-8-8-8s-8,3.6-8,8s3.6,8,8,8S288,180.4,288,176z M264,248c0-17.68-14.32-32-32-32s-32,14.32-32,32s14.32,32,32,32S264,265.68,264,248z M184,152c0-17.68-14.32-32-32-32s-32,14.32-32,32s14.32,32,32,32S184,169.68,184,152z M136,248c0-8.8-7.2-16-16-16s-16,7.2-16,16s7.2,16,16,16S136,256.8,136,248z"/><g><path style="fill:#6806fe;" d="M184,368c101.464,0,184-82.544,184-184c0-28.536-6.68-56.936-19.328-82.144  c-0.168-0.336-0.464-0.56-0.672-0.864c-0.216-0.312-0.32-0.68-0.584-0.968c-0.112-0.128-0.272-0.168-0.392-0.288  c-0.4-0.384-0.856-0.664-1.32-0.96c-0.424-0.264-0.832-0.544-1.288-0.728c-0.464-0.184-0.952-0.248-1.44-0.344  c-0.52-0.096-1.008-0.208-1.536-0.2c-0.488,0.008-0.952,0.12-1.44,0.216c-0.544,0.104-1.064,0.208-1.576,0.424  c-0.152,0.064-0.32,0.056-0.48,0.128c-0.352,0.176-0.576,0.48-0.888,0.696c-0.304,0.208-0.656,0.312-0.936,0.568  C327.376,107.576,315.968,112,304,112c-26.472,0-48-21.528-48-48c0-11.976,4.424-23.376,12.456-32.104  c0.272-0.296,0.376-0.664,0.592-0.984c0.208-0.296,0.496-0.512,0.664-0.848c0.072-0.144,0.064-0.304,0.128-0.456  c0.224-0.528,0.328-1.056,0.44-1.608c0.096-0.48,0.216-0.944,0.216-1.432c0.008-0.512-0.104-0.992-0.192-1.496  c-0.096-0.512-0.168-1-0.352-1.488c-0.176-0.448-0.448-0.84-0.704-1.256c-0.296-0.48-0.584-0.944-0.984-1.352  c-0.112-0.12-0.16-0.272-0.28-0.384c-0.28-0.256-0.632-0.36-0.936-0.568c-0.312-0.216-0.544-0.52-0.896-0.696  C240.944,6.68,212.528,0,184,0C82.544,0,0,82.544,0,184S82.544,368,184,368z M184,16c23.136,0,45.352,4.544,66.168,13.528  C243.584,39.712,240,51.616,240,64c0,35.288,28.712,64,64,64c12.376,0,24.288-3.584,34.48-10.168  C347.456,138.648,352,160.864,352,184c0,92.64-75.368,168-168,168c-92.64,0-168-75.36-168-168S91.36,16,184,16z"/><path style="fill:#6806fe;" d="M152,112c-22.056,0-40,17.944-40,40s17.944,40,40,40s40-17.944,40-40S174.056,112,152,112z M152,176  c-13.232,0-24-10.768-24-24s10.768-24,24-24s24,10.768,24,24S165.232,176,152,176z"/><path style="fill:#6806fe;" d="M232,288c22.056,0,40-17.944,40-40s-17.944-40-40-40s-40,17.944-40,40S209.944,288,232,288z  M232,224c13.232,0,24,10.768,24,24s-10.768,24-24,24s-24-10.768-24-24S218.768,224,232,224z"/><path style="fill:#6806fe;" d="M184,64c4.416,0,8-3.584,8-8s-3.584-8-8-8c-74.992,0-136,61.008-136,136c0,4.416,3.584,8,8,8  s8-3.584,8-8C64,117.832,117.832,64,184,64z"/><path style="fill:#6806fe;" d="M120,224c-13.232,0-24,10.768-24,24s10.768,24,24,24s24-10.768,24-24S133.232,224,120,224z M120,256  c-4.408,0-8-3.592-8-8s3.592-8,8-8s8,3.592,8,8S124.408,256,120,256z"/><path style="fill:#6806fe;" d="M280,192c8.824,0,16-7.176,16-16s-7.176-16-16-16s-16,7.176-16,16S271.176,192,280,192z M288,176  l-7.992,0.024C280,176.016,280,176.008,280,176H288z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </div>
      </div>
    <?php endif;?>



    <footer class="landing__footer">
      <h2 class="hide">Footer</h2>
      <div class="container">
              <div class="nextX landing__logo__container">
                <a href="/" class="landing__footer__logo">
                  <div class="logo">
                    <img src="assets/img/landing/favicon.png" width="35" height="35" alt="Malli Graphics Logo, an abstract presentation of a purple letter M" title="The 'Malli Graphics' Logo">
                    <p><strong>Malli</strong>.graphics</p>
                  </div>
                </a>
              </div>

              <div class="responsiveXclose">

              <div class="landing__footer__nav__container">
                  <h3 class="landing__footer__nav__title">Tags</h3>
                  <ul class='landing__footer__nav__category__container'>
                    <?php if(!empty($categories)):?>
                      <?php foreach ($categories as $category):?>
                        <li class="landing__footer__nav__category"><a href="/category/<?php echo $category['short'];?>/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>" class="home__filters__item <?php if($_GET['category'] == $category['short']) echo 'home__filters__item__active'?>"><?php echo $category['category'];?></a></li>
                      <?php endforeach;?>
                    <?php endif;?>
                  </ul>
                </div>

                <div class="landing__footer__nav__container">
                  <h3 class="landing__footer__nav__title">Navigation</h3>
                  <ul>
                    <li class="landing__footer__nav__item"><a href="/blog">Blog</a></li>
                    <li class="landing__footer__nav__item"><a href="/submit">Submit</a></li>
                    <li class="landing__footer__nav__item"><a href="/contact">Contact</a></li>
                    <li class="landing__footer__nav__item"><a href="/faq">FAQ</a></li>
                  </ul>
                </div>

                <div class="landing__footer__nav__container">
                  <h3 class="landing__footer__nav__title">Legal</h3>
                  <ul>
                    <li class="landing__footer__nav__item"><a href="/termsandconditions">Terms and conditions</a></li>
                    <li class="landing__footer__nav__item"><a href="/privacypolicy">Privacy Policy</a></li>
                  </ul>
                </div>

                <div class="landing__footer__nav__container">
                  <h3 class="landing__footer__nav__title">Give us some love</h3>
                  <div class="landing__socials">
                    <a href="https://www.instagram.com/malli.graphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                    <a href="https://www.facebook.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"/></svg></a>
                    <a href="https://www.dribbble.com/malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Dribbble icon</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg></a>
                    <a href="https://www.twitter.com/MalliGraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg></a>
                    <a href="https://www.pinterest.com/Malligraphics/"><svg role="img" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Pinterest icon</title><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg></a>
                  </div>
                </div>

              </div>

              <div>
                <p class="landing__footer__copyright">© Malli.graphics <?php echo date("Y"); ?></p>
              </div>
            </div>
          </footer>


    <?php echo $js; ?>
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script type="text/javascript" src="js/vanilla-tilt.min.js"></script>
    <script>
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
      </script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158853499-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158853499-1');
      </script>
      </body>
    </html>

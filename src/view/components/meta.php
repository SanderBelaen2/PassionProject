<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Malli">
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
  <meta property="og:image:alt" content="The best collection of FREE mockups.">
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

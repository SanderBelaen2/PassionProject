<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php if(!empty($description)){echo $description;}else{echo 'The best collection of FREE to download PSD mockups. Carefully Handpicked with ❤️ by designers. | Malli';}?>">
  <link rel='shortcut icon' type="image/x-icon" href='https://malli.graphics/favicon.ico'>
  <link rel="manifest" href="./manifest.webmanifest">
  <link rel="apple-touch-icon" href="assets/img/landing/single-page-icon.png">
  <link rel="canonical" href="<?php if(!empty($canonical)){echo $canonical;}else{echo 'https://malli.graphics';}?>" />
  <base id="base" href="/">
  <title><?php echo $title; ?> | Malli Graphics</title>
  <?php echo $css;?>
  <?php include 'components/meta.php';?>
  <!-- <link rel="stylesheet" rel="preload" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
</head>

<body class="preload">
  <h1 class="hide">Malli.graphics</h1>

  <?php if(!empty($_SESSION['info'])):?>
    <div class="session__info__container">
      <div class="session__info"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg> <?php echo $_SESSION['info'];?></div>
    </div>
  <?php endif;?>

  <?php include 'components/navigation.php';?>

  <?php echo $content;?>

  <?php include 'components/cookie.php';?>

  <?php include 'components/footer.php';?>

  <?php echo $js; ?>

  <?php include 'components/scripts.php';?>
</body>

</html>

<div class="body">
<div class="appcontainer appcontainerCenterDesktop">

  <div class="autopost__example">
    <?php if(!empty($randomNextMockup)):?>

      <div class="mockup__image__container">
        <img src="<?php echo $randomNextMockup['img_url'];?>">
      </div>
    <?php endif;?>
    <div class="nextX">
      <h2>Twitter</h2>
      <form action="" method="post" class="autopost__form">
        <input type="hidden" name="action" value="tweet" required>
        <input class="autopost__form__submit" type="submit" value="Tweet">
      </form>
    </div>
  </div>

</div>
</div>

<?php if(!empty($_SESSION['error'])):?>
<div class="message__container message__container__fade">
  <div class="error__message nextXclose">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
    <p><?php echo $_SESSION['error'];?></p>
  </div>
</div>
<?php endif;?>

<?php if(!empty($_SESSION['info'])):?>
<div class="message__container message__container__fade">
  <div class="info__message nextXclose">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
    <p><?php echo $_SESSION['info'];?></p>
  </div>
</div>
<?php endif;?>

<section class="container">
<?php if(!empty($bundles)): ?>
  <ul class=bundles__item__container>
  <?php foreach ($bundles as $bundle):?>
    <li>
      <a href="index.php?page=bundle&id=<?php echo $bundle['id'];?>">
        <article class="bundle__item">
            <div class="bundle__image__container">
              <img src="<?php if(!empty($bundle['img'])){echo $bundle['img'];}elseif(!empty($bundle['thumbnail'])) {echo 'assets/img/home/articlethumbnails/'.$bundle['thumbnail'];}else{echo "assets/img/home/articlethumbnails/backup.png";}?>" alt="Dit is een thumbnail van een artikel">
            </div>
            <h3 class="bundle__title"><?php echo $bundle['name'];?></h3>
        </article>
      </a>
    </li>
  <?php endforeach;?>
  </ul>
  <?php else: ?>
  <section class="emptystate">
    <div class="emptystate__icon__container">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18.99 5c0-1.1-.89-2-1.99-2h-7L7.66 5.34 19 16.68 18.99 5zM3.65 3.88L2.38 5.15 5 7.77V19c0 1.1.9 2 2 2h10.01c.35 0 .67-.1.96-.26l1.88 1.88 1.27-1.27L3.65 3.88z"/></svg>
    </div>
    <h2>Bohoo. No bundles yet!</h2>
    <p>That's okay! </br>You can add an article here!</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
  </section>
<?php endif;?>
</section>

<div class="newBundle hide">
  <form class="newBundleForm" action="index.php?page=bundles" method="post">
    <button class="newBundle__x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button>
    <input type="hidden" name="action" value="newBundle">
    <label for="bundleName">Bundle Name*
    <input type="text" name="bundleName" id="bundleName" placeholder="Recipes" required>
    </label>
    <label for="bundleDescription">Bundle Description
    <textarea name="bundleDescription" id="bundleDescription"></textarea>
    <input class="addBundle" type="submit" value="add bundle">
  </form>
</div>

<div class="home__new__container">
  <button class="home__new">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    New Bundle
  </button>
</div>

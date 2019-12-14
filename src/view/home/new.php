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

<?php if(!empty($site)):?>
<div class="message__container">
    <div class="nextXclose info__message__new info__message">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
      <p>Here's our guess, please uncheck faulty scraped content.</p>
    </div>
  </div>

  <section class="article__read__container">
    <div>
    <?php if(!empty($site['image']) && $site['image'] !== ''):?>
      <img  class="article__read__img" src="<?php echo $site['image'];?>">
    <?php endif; ?>
    </div>
    <div class="article__new__text">
      <p class="article__new__bundle_id hide"><?php if(!empty($bundle_id)) echo $bundle_id;?></p>
      <h3 class="article__new__title"><?php if(!empty($site['h1'])){ echo $site['h1']; }else{echo 'no title here';};?></h3>
      <div class="hide"><a class="article__new__domain" href="<?php echo $site['url'];?>"><?php echo $site['domain'];?></a></div>
    <?php if(!empty($longarticlesps)): ?>
        <?php foreach ($longarticlesps as $item):?>
          <div class="article__new__textCheckable" data-active="1">
            <p><?php echo $item?></p>
          </div>
        <?php endforeach;?>
    <?php endif;?>
    <div class="center">
      <button class="submitCheckedArticle" id="submitCheckedArticle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm-5 16c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-10H5V5h10v4z"/></svg>Add Article</button>
    </div>
    </div>
  </section>
<?php else: ?>
  <section class="new__input__container">
  <div class="new__input center">
    <h3>Import New Article</h3>
    <form class="center" action="index.php?page=new" method=post>
    <input type="hidden" name="action" value="addNew">
    <label for="">Pick a bundle.</label>
      <select class="new__input__select" name="bundle">
        <option value="0">--- Bundle ---</option>
        <?php foreach ($bundles as $bundle):?>
        <option value="<?php echo $bundle['id'];?>"><?php echo $bundle['name'];?></option>
        <?php endforeach;?>
      </select>
      <p class="error"></p>
      <label for="">Paste your url here</label>
        <input type="text" name="newArticleLink" class='newArticleLink' required value='<?php if(!empty($_GET['url'])) echo $_GET['url'];?>'>
      <input type="submit" value="Add Article!" class="submitArticleLink">
    </form>
  </div>
</section>
<?php endif;?>

<section class='pageloadingContainer hide'>
  <div class="pageloading">
    <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    <h2>Saving the Article!</h2>
    <p>One second...</p>
  </div>
</section>


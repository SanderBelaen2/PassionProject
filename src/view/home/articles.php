

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

<?php if(!empty($proc_articles) || !empty($new_articles) || !empty($read_articles)):?>
<div class="container">
<?php if(!empty($proc_articles)): ?>
<section>
<h2 class="articles__item__container__h2">Read On</h2>
  <ul class=articles__item__container>
  <?php foreach ($proc_articles as $article):?>
    <li>
      <a href="index.php?page=article-read&id=<?php echo $article['id'];?>">
        <article class="articles__item">
          <div class="nextXclose">
            <div class="article__image__container">
            <img src="<?php if(!empty($article['img'])) {echo $article['img'];}else{echo "assets/img/home/articlethumbnails/backup.png";}?>" alt="Dit is een thumbnail van een artikel">
            </div>
            <div class="article__text__container">
              <h3 class="article__title"><?php echo $article['title'];?></h3>
              <p class="article__source"><?php echo $article['domain'];?></p>
              <div class="nextXclose">
                <div class="article__proc__container">
                  <span class="article__proc__bg" style="width:15rem;"></span>
                  <span class="article__proc" style="width:<?php echo $article['proc']/100*15?>rem"></span>
                </div>
                <p class="article__proc__text"><?php echo $article['proc']?>%</p>
              </div>
            </div>
          </div>
        </article>
      </a>
    </li>
  <?php endforeach;?>
  </ul>
</section>
<?php endif;?>
<?php if(!empty($new_articles)): ?>
<section>
  <h2 class="articles__item__container__h2">New Articles</h2>
  <ul class=articles__item__container>
  <?php foreach ($new_articles as $article):?>
    <li>
      <a href="index.php?page=article-read&id=<?php echo $article['id'];?>">
        <article class="articles__item">
          <div class="nextXclose">
            <div class="article__image__container">
            <img src="<?php if(!empty($article['img'])) {echo $article['img'];}else{echo "assets/img/home/articlethumbnails/backup.png";}?>" alt="Dit is een thumbnail van een artikel">
            </div>
            <div class="article__text__container">
              <h3 class="article__title"><?php echo $article['title'];?></h3>
              <p class="article__source"><?php echo $article['domain'];?></p>
                <div class="newtXclose articles__item__new">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zM8.5 15H7.3l-2.55-3.5V15H3.5V9h1.25l2.5 3.5V9H8.5v6zm5-4.74H11v1.12h2.5v1.26H11v1.11h2.5V15h-4V9h4v1.26zm7 3.74c0 .55-.45 1-1 1h-4c-.55 0-1-.45-1-1V9h1.25v4.51h1.13V9.99h1.25v3.51h1.12V9h1.25v5z"/></svg>
                  <p>New Article</p>
                </div>
            </div>
          </div>
        </article>
      </a>
    </li>
  <?php endforeach;?>
  </ul>
</section>
<?php endif;?>
<?php if(!empty($read_articles)): ?>
<section>
  <h2 class="articles__item__container__h2">Read Articles</h2>
  <ul class=articles__item__container>
  <?php foreach ($read_articles as $article):?>
    <li>
      <a href="index.php?page=article-read&id=<?php echo $article['id'];?>">
        <article class="articles__item">
          <div class="nextXclose">
            <div class="article__image__container">
            <img src="<?php if(!empty($article['img'])) {echo $article['img'];}else{echo "assets/img/home/articlethumbnails/backup.png";}?>" alt="Dit is een thumbnail van een artikel">
            </div>
            <div class="article__text__container">
              <h3 class="article__title"><?php echo $article['title'];?></h3>
              <p class="article__source"><?php echo $article['domain'];?></p>
                <div class="newtXclose articles__item__new">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <p>Read</p>
                </div>
            </div>
          </div>
        </article>
      </a>
    </li>
  <?php endforeach;?>
  </ul>
</section>
</div>
<?php endif;?>
<?php else: ?>
  <section class="emptystate">
    <div class="emptystate__icon__container">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18.99 5c0-1.1-.89-2-1.99-2h-7L7.66 5.34 19 16.68 18.99 5zM3.65 3.88L2.38 5.15 5 7.77V19c0 1.1.9 2 2 2h10.01c.35 0 .67-.1.96-.26l1.88 1.88 1.27-1.27L3.65 3.88z"/></svg>
    </div>
    <h2>Bohoo. No articles yet!</h2>
    <p>That's okay! </br>You can add an article here!</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M20 12l-1.41-1.41L13 16.17V4h-2v12.17l-5.58-5.59L4 12l8 8 8-8z"/></svg>
  </section>
<?php endif;?>

<div class="home__new__container">
  <a class="home__new" href="index.php?page=new">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
    New Article
  </a>
</div>

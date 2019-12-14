<section>
  <a class="bundle__backbutton" href="index.php?page=bundles"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg> Back</a>
  <h2 class="bundle__h2"><?php echo $bundle['name'];?></h2>
  <p  class="bundle__description"><?php echo $bundle['description'];?></p>
</section>


<?php if(!empty($articles)):?>
  <div class="container">
  <ul class=articles__item__container>
  <?php foreach ($articles as $article):?>
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
              <?php if ($article['proc'] !== 0 && $article['proc'] !== 100):?>
              <div class="nextXclose">
                <div class="article__proc__container">
                  <span class="article__proc__bg" style="width:15rem;"></span>
                  <span class="article__proc" style="width:<?php echo $article['proc']/100*15?>rem"></span>
                </div>
                <p class="article__proc__text"><?php echo $article['proc']?>%</p>
              </div>
              <?php elseif($article['proc']==0):?>
                <div class="newtXclose articles__item__new">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><path id="a" d="M0 0h24v24H0V0z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zM8.5 15H7.3l-2.55-3.5V15H3.5V9h1.25l2.5 3.5V9H8.5v6zm5-4.74H11v1.12h2.5v1.26H11v1.11h2.5V15h-4V9h4v1.26zm7 3.74c0 .55-.45 1-1 1h-4c-.55 0-1-.45-1-1V9h1.25v4.51h1.13V9.99h1.25v3.51h1.12V9h1.25v5z"/></svg>
                  <p>New Article</p>
                </div>
              <?php elseif($article['proc']==100):?>
                <div class="newtXclose articles__item__new">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                  <p>Read</p>
                </div>
              <?php endif;?>
            </div>
          </div>
        </article>
      </a>
    </li>
  <?php endforeach;?>
  </ul>
  <div>
  <form class="center" action="index.php?page=bundle&id=<?php echo $bundle['id'];?>" method="post">
    <input type="hidden" name="action" value="deleteBundle">
    <button class="bundle__button article__read__delete" type="submit">Delete '<?php echo $bundle['name'];?>' bundle</button>
  </form>
</div>


  </div>
  <?php else: ?>
  <section class="emptystate">
    <div class="emptystate__icon__container">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18.99 5c0-1.1-.89-2-1.99-2h-7L7.66 5.34 19 16.68 18.99 5zM3.65 3.88L2.38 5.15 5 7.77V19c0 1.1.9 2 2 2h10.01c.35 0 .67-.1.96-.26l1.88 1.88 1.27-1.27L3.65 3.88z"/></svg>
    </div>
    <h2>Bohoo. No articles yet!</h2>
    <form class="center" action="index.php?page=bundle&id=<?php echo $bundle['id'];?>" method="post">
    <input type="hidden" name="action" value="deleteBundle">
    <button class="bundle__button article__read__delete" type="submit">Delete '<?php echo $bundle['name'];?>' bundle</button>
  </form>
  </section>
<?php endif;?>

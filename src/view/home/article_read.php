<div class="progressbar"></div>
<section class="article__read__container" data-procent="<?php echo $article['proc'];?>">
  <img class="article__read__img" src="<?php echo $article['img'];?>" alt="<?php echo $article['img'];?>">
  <div class="article__read__text">
    <h3><?php echo $article['title'];?></h3>
    <a class="article__read__domain" href="<?php echo $article['url'];?>"><?php echo $article['domain'];?></a>
    <div id="textDefault" class="textDefault"><?php echo $article['text'];?></div>
    <div id="textToRead" class="textDefault hide"><?php echo $article['textToRead'];?></div>
  </div>
  <div class="padding">
  <h2 class="article__read__h2">Now what?</h2>
  <div class="responsiveXclose">

    <form action="index.php?page=article-read&id=<?php echo $article['id'];?>" method="post">
      <input type="hidden" name="action" value="markAsRead">
      <button class="article__read__button article__read__edit" type="submit">Mark as read</button>
    </form>

    <form action="index.php?page=article-read&id=<?php echo $article['id'];?>" method="post">
      <input type="hidden" name="action" value="markAsNew">
      <button class="article__read__button article__read__edit" type="submit">Mark as new</button>
    </form>

    <form action="index.php?page=article-read&id=<?php echo $article['id'];?>" method="post">
      <input type="hidden" name="action" value="deleteArticle">
      <button class="article__read__button article__read__delete" type="submit">Delete this Article</button>
    </form>
  </div>
  </div>

</section>
<a class="article__read__backbutton" href="index.php?page=articles"><div class="nextXclose"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg> Back</div></a>
<section class="listenUI">
  <button class="article__listen__startButton" id="play"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/><path d="M0 0h24v24H0z" fill="none"/></svg></button>
  <button class="article__listen__stopButton hide" id="stop"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 6h12v12H6z"/></svg></button>
</section>




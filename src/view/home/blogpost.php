<div class="blog__post__container">
<div>
    <a class="home__backbutton" href="blog"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg>Back to Overview</a>
    <div class="blog__post__image">
    <picture>
              <source
                draggable="false"
                type="image/webp"
                srcset="
                  assets/img/blog/<?php echo $blogpost['id'];?>_10.webp   155w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_20.webp   310w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_33.webp   517w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_50.webp   776w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_67.webp  1034w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_75.webp  1164w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_85.webp  1319w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_100.webp 1552w
                "
                sizes="(min-width: 1260px) 100vw,
                (min-width: 992px) 100vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <source
                srcset="
                  assets/img/blog/<?php echo $blogpost['id'];?>_10.png   155w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_20.png   310w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_33.png   517w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_50.png   776w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_67.png  1034w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_75.png  1164w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_85.png  1319w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_100.png 1552w
                "
                sizes="(min-width: 1260px) 100vw,
                (min-width: 992px) 100vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/blog/<?php echo $blogpost['id'];?>_100.png"
                alt="Picture about <?php echo $blogpost['title'];?>"
                title="Picture about <?php echo $blogpost['title'];?>"
              />
            </picture>
    </div>
    <section class="blog__post__container">
      <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CE7I4KQW&placement=malligraphics" id="_carbonads_js"></script>
      <style>#carbonads {  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto  Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial  sans-serif;}#carbonads {  display: block;  max-width: 728px;  position: relative;  background-color: hsl(0, 0%, 99%);  border: solid 1px #eee;  font-size: 22px;  box-sizing: content-box;}#carbonads > span {  display: block;}#carbonads a {  color: inherit;  text-decoration: none;}#carbonads a:hover {  color: inherit;}.carbon-wrap {  display: flex;  align-items: center;}.carbon-img {  display: block;  margin: 0;  line-height: 1;}.carbon-img img {  display: block;  height: 90px;  width: auto;}.carbon-text {  display: block;  padding: 0 1em;  line-height: 1.35;  text-align: left;}.carbon-poweredby {  display: block;  position: absolute;  bottom: 0;  right: 0;  padding: 6px 10px;  background: repeating-linear-gradient(                  -45deg,                  transparent,                  transparent 5px,                  hsla(0, 0%, 0%, 0.025) 5px,                  hsla(0, 0%, 0%, 0.025) 10px  )  hsla(203, 11%, 95%, 0.8);  text-align: center;  text-transform: uppercase;  letter-spacing: 0.5px;  font-weight: 600;  font-size: 8px;  border-top-left-radius: 4px;  line-height: 1;}@media only screen and (min-width: 320px) and (max-width: 759px) {  .carbon-text {    font-size: 14px;  }}</style>
    </section>
    <H2 class="blog__header__slogan"><?php echo $blogpost['title'];?></H2>
    <h3 class="landing__header__p blog__header__h3"><?php echo $blogpost['subtitle'];?></h3>
  </div>
  </div>

<section class="blog__post__container blog__post__container__list">
  <p class="blogpost__article__text">
  <?php echo $blogpost['text'];?>
  </p>
</section>


<?php if(!empty($suggestedBlogs)):?>
<section>
<div class="blog__article__container__container">
  <h2 class="blog__suggested__title">Checkout our latest Blog posts!</h2>
  <div class="blog__article__container" data-aos="fade-up" data-aos-delay="100">

  <?php foreach ($suggestedBlogs as $blogpost):?>

  <a href="blogpost/<?php echo $blogpost['id'];?>">
    <article class="blog__article" >
      <div class="blog__article__image__container">
      <picture>
              <source
                draggable="false"
                type="image/webp"
                srcset="
                  assets/img/blog/<?php echo $blogpost['id'];?>_10.webp   155w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_20.webp   310w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_33.webp   517w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_50.webp   776w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_67.webp  1034w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_75.webp  1164w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_85.webp  1319w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_100.webp 1552w
                "
                sizes="(min-width: 1260px) 100vw,
                (min-width: 992px) 100vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <source
                srcset="
                  assets/img/blog/<?php echo $blogpost['id'];?>_10.png   155w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_20.png   310w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_33.png   517w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_50.png   776w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_67.png  1034w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_75.png  1164w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_85.png  1319w,
                  assets/img/blog/<?php echo $blogpost['id'];?>_100.png 1552w
                "
                sizes="(min-width: 1260px) 100vw,
                (min-width: 992px) 100vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/blog/<?php echo $blogpost['id'];?>_100.png"
                alt="Picture about <?php echo $blogpost['title'];?>"
                title="Picture about <?php echo $blogpost['title'];?>"
              />
            </picture>
      </div>
      <div class="blog__article__text__container">
        <h3 class="blog__article__title"><?php echo $blogpost['title'];?></h3>
        <p class="blog__article__date"><?php echo $blogpost['timestamp'];?></p>
      </div>
    </article>
  </a>

  <?php endforeach;?>

  </div>
</div>
</section>
<?php endif?>

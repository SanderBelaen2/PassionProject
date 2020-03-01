<?php if(!empty($blogposts)):?>
<section class="container">
  <div class="landing__header">
    <h2>Blog.</h2>
    <p class="landing__header__subtitle">A Blog about our <strong>passion</strong>.</br>Efficient Social Media Marketing.</p>
  </div>
  <div class="blog__article__container">

  <?php foreach ($blogposts as $blogpost):?>

  <link rel="prefetch" href="/blogpost/<?php echo $blogpost['id'];?>">
  <a href="/blogpost/<?php echo $blogpost['id'];?>">
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
                sizes="(min-width: 1260px) 100vwv,
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
</section>
<?php else: ?>

<section class="blog__noposts__container">
  <div class="blog__noposts__icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
  </div>
  <h2 class="blog__noposts__title">Ouwchh.. Nothing here yet..</h2>
  <p class="blog__noposts__message">Forgive us, were just getting started, Our writers will bring valuable tips and tricks in the near future.</p>
</section>

  <?php endif;?>

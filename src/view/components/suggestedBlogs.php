
<?php if(!empty($suggestedBlogs)):?>
<section>
<div class="blog__article__container__container">
  <h2 class="blog__suggested__title">Checkout our latest Blog posts!</h2>
  <div class="blog__article__container" data-aos="fade-up">

  <?php foreach ($suggestedBlogs as $blogpost):?>

  <a href="blogpost/<?php echo $blogpost['id'];?>">
    <article class="blog__article <?php if($suggestedBlogs[0]['id'] === $blogpost['id']) echo 'blog__article__first';?>" >
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
                sizes="(min-width: 1260px) 100,
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
<?php endif?>

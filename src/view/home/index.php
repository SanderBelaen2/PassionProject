
    <div class="center"><p class="home__header__quote">The best collection of <strong>FREE mockups</strong>.  Carefully <strong>Handpicked</strong> with <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f8275d" stroke="#f8275d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> by designers.</p></div>
    <form action="category/all/1" method="get" class="landing__search__form">
        <label for="search" class="hide">Search Mockup</label>
        <input class="landing__form__input" placeholder="Search free mockups" type="text" id="search" title="Search Mockup" name="s" value="<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">
        <label for="landing__form__submit" class="hide">Submit</label>
        <input class="landing__form__submit" id="landing__form__submit" type="submit" value="Search">
    </form>

    <?php if(!empty($_GET['s'])):?>
      <form action="" method="post" class="home__header__deletefilter">
        <input type="hidden" name="action" value="delete_search">
        <label for="delete_search_filter1" class="hide">Delete search filter</label>
        <button class="landing__form__delete" type="submit" id="delete_search_filter1" title="Delete search filter" value="Delete search filter: '<?php if(!empty($_GET['s'])) echo $_GET['s'];?>'"></button>
      </form>
    <?php endif;?>

</section>

<section>
  <h2 class="hide">Mockup free download</h2>
  <div class="home__fitlers__container">
    <a href="/category/all/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>" class="home__filters__item">All Mockups</a>

    <?php if(!empty($categories)):?>
      <?php foreach ($categories as $category):?>
        <a href="/category/<?php echo $category['short'];?>/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>" class="home__filters__item <?php if($_GET['category'] == $category['short']) echo 'home__filters__item__active'?>"><?php echo $category['category'];?></a>
      <?php endforeach;?>
    <?php endif;?>

  </div>


  <?php if(!empty($mockups)):?>
    <div class="home__overzicht__items">

    <?php if(!empty($populairMockup)):?>
      <a data-aos="fade-up" href="/detail/<?php echo $populairMockup['url'];?>">
        <article class="home__overzicht__items__item" data-tilt data-tilt-max="5" data-tilt-scale="1.02">
          <div class="home__overzicht__items__item__image">
            <p class="home__overzicht__items__item__populair home__overzicht__items__item__mostpopulair">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
              Most Popular Today
            </p>
            <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $populairMockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $populairMockup['url'].'_md.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $populairMockup['url'].'_lg.jpg';?>  1536w,
                  assets/img/mockupimages/<?php echo $populairMockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 33vw,
                (min-width: 992px) 50vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $populairMockup['url'].'_.jpg';?>"
                alt="<?php echo $populairMockup['name'];?>"
                title="<?php echo $populairMockup['name'];?>"
                draggable="false"
              />
            </picture>
            <div class="home__overzicht__items__item__image__loading"></div>
          </div>
          <div class="home__overzicht__items__item__text">
            <h3><?php echo $populairMockup['name'];?></h3>
            <div class="nextX">
              <p class="item__category"><?php echo $populairMockup['category'];?></p>
              <p class="item__platform item__platform__<?php echo $populairMockup['platform'];?>"><?php echo $populairMockup['platform'];?></p>
            </div>
          </div>
        </article>
      </a>
    <?php endif;?>

    <?php foreach ($EditorsChoiceMockups as $mockup):?>
      <a data-aos="fade-up" href="/detail/<?php echo $mockup['url'];?>">
        <article class="home__overzicht__items__item" data-tilt data-tilt-max="5" data-tilt-scale="1.02">
          <div class="home__overzicht__items__item__image">
            <p class="home__overzicht__items__item__populair">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
              Editors Choice
            </p>
            <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1536w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 33vw,
                (min-width: 992px) 50vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $mockup['url'].'_.jpg';?>"
                alt="<?php echo $mockup['name'];?>"
                title="<?php echo $mockup['name'];?>"
                draggable="false"
              />
            </picture>
            <div class="home__overzicht__items__item__image__loading"></div>
          </div>
          <div class="home__overzicht__items__item__text">
            <h3><?php echo $mockup['name'];?></h3>
            <div class="nextX">
              <p class="item__category"><?php echo $mockup['category'];?></p>
              <p class="item__platform item__platform__<?php echo $mockup['platform'];?>"><?php echo $mockup['platform'];?></p>
            </div>
          </div>
        </article>
      </a>
    <?php endforeach;?>

    <?php foreach ($mockups as $mockup):?>
      <a data-aos="fade-up" href="/detail/<?php echo $mockup['url'];?>">
        <article class="home__overzicht__items__item" data-tilt data-tilt-max="5" data-tilt-scale="1.02">
          <div class="home__overzicht__items__item__image">
            <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1536w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 33vw,
                (min-width: 992px) 50vw,
                (min-width: 768px) 100vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $mockup['url'].'_.jpg';?>"
                alt="<?php echo $mockup['name'];?>"
                title="<?php echo $mockup['name'];?>"
                draggable="false"
              />
            </picture>
            <div class="home__overzicht__items__item__image__loading"></div>
          </div>
          <div class="home__overzicht__items__item__text">
            <h3><?php echo $mockup['name'];?></h3>
            <div class="nextX">
              <p class="item__category"><?php echo $mockup['category'];?></p>
              <p class="item__platform item__platform__<?php echo $mockup['platform'];?>"><?php echo $mockup['platform'];?></p>
            </div>
          </div>
        </article>
      </a>
    <?php endforeach;?>

    </div>
    <?php else:?>
    <section class="landing__emptystate">
    <p><span>Oopsie!</span></p>
    <?php if(!empty($_GET['s'])):?>
    <p>We didn't find any mockups for '<?php if(!empty($_GET['s'])) echo $_GET['s'];?>' in this category.</p>
      <form action="" method="post">
      <input type="hidden" name="action" value="delete_search">
        <label for="delete_search_filter2" class="hide">Delete Search Filter</label>
        <input type="submit" id="delete_search_filter2" title="Delete search filter" value="Delete search filter: '<?php if(!empty($_GET['s'])) echo $_GET['s'];?>'">
      </form>
    <?php else:?>
      <p>No mockups to be found over here...</p>
    <?php endif;?>
    <div class="center landing__emptystate__imagecontainer">
      <img src="assets/img/landing/emptystate.png" alt="Three smartphones stating error 404, No mockups found" title="No mockups found">
    </div>
    </section>
  <?php endif;?>

  <div class="center"><a class="CTAbtn" href="category/all/1">Browse all mockups</a></div>
  </section>


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
                draggable="false"
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

<?php if(!empty($partners)):?>

<section class="partners__container">
  <h2 class="blog__suggested__title">Friends of Malli.graphics</h2>

  <ul class="partners__list">
  <?php foreach ($partners as $partner):?>
    <li class="partners__list__item">
      <a rel="nofollow" href="<?php echo $partner['url'];?>">
        <div class="partner__list__item-img">
          <img src="assets/img/partners/<?php echo $partner['img'];?>.png" draggable="false" alt="Logo of <?php echo $partner['name'];?>" title="Logo of <?php echo $partner['name'];?>" >
        </div>
        <p><?php echo $partner['name'];?></p>
      </a>
    </li>
  <?php endforeach;?>

  <?php if(sizeof($partners) < 4):?>
    <?php for ($i=0; $i < 4-sizeof($partners); $i++):?>
      <li class="partners__list__item partners__list__item-nonactive">
        <a href="#">
          <div class="partner__list__item-img">
          </div>
          <p><?php if(rand(0,1) < .5){echo 'Maybe your agency?';}else{echo 'Maybe you?';};?></p>
        </a>
      </li>
    <?php endfor;?>
  <?php endif;?>

  </ul>

</section>

<?php endif;?>

<section class="landing__newsletter__container" id="sub">
  <h2 class="landing__newsletter__container__title">Our most popular mockups of the month.</h2>
  <p class="landing__newsletter__container__title landing__newsletter__container__subtitle">Just one email a month, promised!</p>
  <form action="/" method="post" class="landing__newsletter__form__container">
    <div class="landing__newsletter__form">
      <input type="hidden" name="action" value="subscribe">
      <label for="email"></label>
      <input class="landing__newsletter__form__input" placeholder="mail@email.com" type="email" name="email" required>
      <input class="landing__newsletter__form__submit" id="landing__newsletter__form__submit" type="submit" value="subscribe">
    </div>
    <p class="landing__newsletter__form__error"></p>
  </form>
</section>

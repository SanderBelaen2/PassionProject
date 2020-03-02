
  <p class="home__header__quote">The best collection of <strong>FREE mockups</strong>.  Carefully <strong>Handpicked</strong> with &#10084;&#65039; by designers.</p>
    <form action="" method="get" class="landing__search__form">
        <label for="search" class="hide">Search Mockup</label>
        <input class="landing__form__input" placeholder="Search free mockups" type="text" id="search" title="Search Mockup" name="s" value="<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">
        <label for="landing__form__submit" class="hide">Submit</label>
        <input class="landing__form__submit" id="landing__form__submit" type="submit" value="Search">
    </form>

    <?php if(!empty($_GET['s'])):?>
      <form action="" method="post" class="home__header__quote">
        <input type="hidden" name="action" value="delete_search">
        <label for="delete_search_filter1" class="hide">Delete search filter</label>
        <input class="landing__form__delete" type="submit" id="delete_search_filter1" title="Delete search filter" value="Delete search filter: '<?php if(!empty($_GET['s'])) echo $_GET['s'];?>'">
      </form>
    <?php endif;?>

</section>

<section>
  <h2 class="hide">Mockup free download</h2>
  <div class="home__fitlers__container">
    <a href="/category/all/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>" class="home__filters__item <?php if($_GET['category'] == 'all') echo 'home__filters__item__active'; if(empty($_GET['category'])) echo 'home__filters__item__active';?>">All Mockups</a>

    <?php if(!empty($categories)):?>
      <?php foreach ($categories as $category):?>
        <a href="/category/<?php echo $category['short'];?>/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>" class="home__filters__item <?php if($_GET['category'] == $category['short']) echo 'home__filters__item__active'?>"><?php echo $category['category'];?></a>
      <?php endforeach;?>
    <?php endif;?>

  </div>


  <?php if(!empty($mockups)):?>
    <div class="home__overzicht__items">

    <?php foreach ($mockups as $mockup):?>
      <a data-aos="fade-up" href="/detail/<?php echo $mockup['url'];?>">
        <article class="home__overzicht__items__item" data-tilt data-tilt-max="5" data-tilt-scale="1.02">
          <div class="home__overzicht__items__item__image">
            <?php if(!empty($mostPopulairMockup)){if($mostPopulairMockup['mockup_id'] == $mockup['id']){echo '<p class="home__overzicht__items__item__populair">Most Populair Today</p>';}};?>
            <picture>
              <source
                srcset="
                  assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  1072w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1536w,
                  assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
                "
                sizes="(min-width: 1260px) 20vwv,
                (min-width: 992px) 33vw,
                (min-width: 768px) 50vw,
                (min-width: 576px) 100vw,
                (min-width: 0) 100vw,
                "
              />
              <img
                src="assets/img/mockupimages/<?php echo $mockup['url'].'_.jpg';?>"
                alt="<?php echo $mockup['name'];?>"
                title="<?php echo $mockup['name'];?>"
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

<?php if(!empty($mockups)):?>
    <div class="center">
    <p class="home__pageresults"><strong><?php echo $resultpages;?></strong> result <?php if($resultpages == 1){echo 'page';}else{echo 'pages';};?> found.</p>
    </div>
    <div class="center">
      <div class="home__pagenumber__container">
          <?php if(empty($_GET['pagenr'])) $_GET['pagenr'] = 1;?>

          <div class="home__pagenumber__prev">
            <a class="home__change__pagenumber <?php if(!empty($_GET['pagenr']) && $_GET['pagenr'] == '1' || $_GET['pagenr'] == '0') echo "home__change__pagenumber__disabled";?>" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']-1;}else{echo '1';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg> Previous Page</a>
          </div>

          <div class="home__pagenumber__container__container nextXclose">

          <?php if(($_GET['pagenr']-1) <= $resultpages):?>
            <?php if(!empty($_GET['pagenr']) && $_GET['pagenr'] !== '1' && $_GET['pagenr'] !== '0'):?>
            <a class="home__pagenumber" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/1/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">First</a>
            <?php endif;?>
            <?php endif;?>

            <?php if(($_GET['pagenr']-1) <= $resultpages):?>
              <?php if(!empty($_GET['pagenr']) && $_GET['pagenr'] !== '1' && $_GET['pagenr'] !== '0'):?>
                <a class="home__pagenumber" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']-1;}else{echo '1';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>"><?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']-1;}else{echo '1';}?></a>
              <?php endif;?>
            <?php endif;?>

            <?php if(($_GET['pagenr']) <= $resultpages):?>
            <a class="home__pagenumber home__pagenumber__active" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr'];}else{echo '1';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>"><?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr'];}else{echo '1';}?></a>
            <?php endif;?>

            <?php if(($_GET['pagenr']+1) <= $resultpages):?>
            <a class="home__pagenumber" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+1;}else{echo '2';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>"><?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+1;}else{echo '2';}?></a>
            <?php endif;?>

            <?php if(($_GET['pagenr']+2) <= $resultpages):?>
            <a class="home__pagenumber" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+2;}else{echo '3';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>"><?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+2;}else{echo '3';}?></a>
            <?php endif;?>

          <a class="home__pagenumber" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php echo $resultpages;?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">Last</a>

          </div>


          <div class="home__pagenumber__next">
            <a class="home__change__pagenumber <?php if(($_GET['pagenr']) >= $resultpages) echo "home__change__pagenumber__disabled";?>" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+1;}else{echo '2';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">Next Page <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>
          </div>
        </div>
      </div>
  <?php endif;?>

  </section>

<?php if(!empty($suggestedBlogs)):?>
<section>
<div class="blog__article__container__container">
  <h2 class="blog__suggested__title">Checkout our latest Blog posts!</h2>
  <div class="blog__article__container" data-aos="fade-up">

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
<?php endif?>

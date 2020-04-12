
    <div class="center"><p class="home__header__quote">The best collection of <strong>FREE mockups</strong>.  Carefully <strong>Handpicked</strong> with <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f8275d" stroke="#f8275d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> by designers.</p></div>
    <form action="" method="get" class="landing__search__form">
        <label for="search" class="hide">Search Mockup</label>
        <input class="landing__form__input" placeholder="Search free mockups" type="text" id="search" title="Search Mockup" name="s" value="<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">
        <label for="landing__form__submit" class="hide">Submit</label>
        <input class="landing__form__submit" id="landing__form__submit" type="submit" value="Search">
    </form>

    <?php if(!empty($_GET['s'])):?>
      <form action="" method="post" class="home__header__deletefilter">
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
            <?php if(!empty($mostPopulairMockup)){if($mostPopulairMockup['mockup_id'] == $mockup['id']){echo '<p class="home__overzicht__items__item__populair home__overzicht__items__item__mostpopulair"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>Most Popular Today</p>';}};?>
            <?php if($mockup['approved'] === 2){echo '<p class="home__overzicht__items__item__populair"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>Editors Choice</p>';};?>
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
            <link rel="prev" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']-1;}else{echo '1';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">
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
            <link rel="next" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+1;}else{echo '2';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">
            <a class="home__change__pagenumber <?php if(($_GET['pagenr']) >= $resultpages) echo "home__change__pagenumber__disabled";?>" href="/category/<?php if(!empty($_GET['category'])) echo $_GET['category'];?>/<?php if(!empty($_GET['pagenr'])){ echo $_GET['pagenr']+1;}else{echo '2';}?>/<?php if(!empty($_GET['s'])) echo $_GET['s'];?>">Next Page <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg></a>
          </div>
        </div>
      </div>
  <?php endif;?>

  </section>

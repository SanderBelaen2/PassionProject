
    <div class="center"><p class="home__header__quote">The best collection of <strong>FREE mockups</strong>.  Carefully <strong>Handpicked</strong> with <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#f8275d" stroke="#f8275d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> by designers.</p></div>
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

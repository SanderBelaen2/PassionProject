<div class="body">
<div class="appcontainer appcontainerCenterDesktop">

  <h2>Generate blog</h2>

  <form action="" method="post">
    <input type="hidden" name="action" value="getmockups">
    <select name="category" id="category">
      <?php foreach ($categories as $category):?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['category'];?></option>
      <?php endforeach;?>
    </select>

    <input type="submit">
  </form>

  <?php if(!empty($mostPopulairMockups)):?>

    <div class="blogpost__download__container">
      <button class="CTAbtn" id="copyblog">Copy Blogpost</button>
    </div>

  <section id="blogcontent">

  А compilation of  the INVULLEEEEEEEN free paper and books Mockups of last month. All mockups are in PSD format.
  Maybe one of them is useful for your next project.<br>
  You can also manually search for awesome free mockups here: <a href="https://malli.graphics">Malli - Free handpicked mockups</a>

  </br>


    <?php foreach ($mostPopulairMockups as $mockup):?>

      <div class="blog__post__image blog__post__image__sub">

        <picture>
          <source
            srcset="
              https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_sm.jpg';?>  290w,
              https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_md.jpg';?>  1072w,
              https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_lg.jpg';?>  1536w,
              https://malli.graphics/assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?> 1536w
            "
            sizes="(min-width: 1260px) 50vw,
            (min-width: 992px) 50vw,
            (min-width: 768px) 50vw,
            (min-width: 576px) 100vw,
            (min-width: 0) 100vw,
            "
          />
          <img
            src="assets/img/mockupimages/<?php echo $mockup['url'].'_xl.jpg';?>"
            alt="<?php echo $mockup['name'];?>"
            title="<?php echo $mockup['name'];?>"
          />
        </picture>
        </div>


        <h3 class="blogpost__article__text"><strong><?php echo $mockup['name'];?></strong></h3>
        <p class="blogpost__article__text"><?php echo $mockup['text'];?></p>
        <p class="blogpost__article__text">Platform: <span class="item__platform__<?php echo $mockup['platform'];?>"><?php echo $mockup['platform'];?></span></p>
        <div class="blogpost__download__container">
          <a class="CTAbtn" href="https://malli.graphics/detail/<?php echo $mockup['url'];?>">Download</a>
        </div>
        </br>

    <?php endforeach;?>

  </section>
  <?php endif;?>

</div>
</div>

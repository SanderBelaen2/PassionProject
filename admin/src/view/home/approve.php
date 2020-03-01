<div class="body">
<div class="appcontainer appcontainerCenterDesktop">


<?php if(!empty($mockups)):?>
  <section class="mockuplist">
    <h2 class="hide">Un-approved Mockups</h2>
    <?php foreach ($mockups as $mockup):?>
      <div class="mockuplist__item responsiveX">
        <div class="mockup__image__container">
          <img src="<?php echo $mockup['img_url'];?>" alt="<?php echo $mockup['name'];?>">
        </div>
        <div class="mockup__details">
          <h3><?php echo $mockup['name'];?></h3>
          <p><?php echo $mockup['text'];?></p>
          <div class="nextX">
            <form action="/approve" method="post">
            <div class="nextXclose">
            <p><strong>Category: </strong><?php echo $mockup['category'];?></p>
            <?php if(!empty($categories)):?>
            <select class="category" name="category">
              <option value="0">-------</option>
              <?php foreach ($categories as $categorie):?>
                <option value="<?php echo $categorie['id'];?>"><?php echo $categorie['category'];?></option>
              <?php endforeach;?>
            </select>
            <?php else:?>
              <?php echo $mockup['category'];?>
            <?php endif;?>
            </div>
            <div class="nextXclose">
            <p><strong>Platform:</strong> <?php echo $mockup['platform'];?></p>
            <select class="platform" name="platform">
                <option value="Ps">Ps</option>
                <option value="Xd">Xd</option>
                <option value="Sk">Sk</option>
                <option value="NoPs">No Photoshop</option>
            </select>
            </div>
            <div class="nextX">
            <p><a class="link__test" href="<?php echo $mockup['link'];?>" target="_blank">Test link</a></p>
            <?php if(file_exists('../../src/assets/img/mockupimages/'.$mockup['url'].'_md.jpg')){echo '<p>file exists</p>';}else{ echo '<p class="error">file broken</p>';};?>
          </div>
          </div>
        </div>
        <div class="mockup__approvalcontrol centerY">
          <h3>Approve:</h3>

            <input type="hidden" name="action" value="approve">
            <input type="hidden" name="mockup_id" value="<?php echo $mockup['id'];?>">
            <input class="approvebutton__approve approveThisMockup" type="submit" id="<?php echo $mockup['id'];?>" value="Approve">
          </form>
          <form action="/approve" method="post">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="mockup_id" value="<?php echo $mockup['id'];?>">
            <input type="hidden" name="mockup_img" value="<?php echo $mockup['img'];?>">
            <input class="approvebutton__approve approvebutton__delete deleteThisMockup" type="submit" value="Delete">
          </form>
        </div>
      </div>
    <?php endforeach;?>
  </section>
<?php else:?>
  <p>There are no mockups to be approved.</p>
<?php endif;?>

</div>
</div>

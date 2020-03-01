<div class="body">
<div class="appcontainer appcontainerCenterDesktop">

  <div class="admin__home__features">
    <h2><?php if(empty($_GET['id'])){echo 'Select a bug report!';}else{echo 'Selected bug report';}?></h2>
    <?php if(!empty($_GET['id'])):?>
      <?php foreach ($totalBugReports as $bugReport):?>
        <?php if($bugReport['id'] == $_GET['id']):?>
          <h3>Subject:</h3>
          <p><?php echo $bugReport['subject'];?></p>
          <h3>Message:</h3>
          <p><?php echo $bugReport['text'];?></p>
        <?php endif;?>
      <?php endforeach;?>
    <?php endif;?>
  </div>

  <div class="admin__home__features">
    <h2>All bug reports</h2>
    <?php foreach ($totalBugReports as $bugReport):?>
      <div class="analytics__tile__mostliked__item analytics__tile__mostliked__item<?php if($user['rank'] == 2){ echo '2';}else{ echo '0';} ?> nextX">
        <a href="index.php?page=bugs&id=<?php echo $bugReport['id'];?>"><p><?php echo $bugReport['subject'];?></p></a>
      </div>
    <?php endforeach;?>
  </div>

</div>
</div>

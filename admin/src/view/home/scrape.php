<div class="body">
<div class="appcontainer appcontainerCenterDesktop">

  <div class="source">
    <h2>Mockupworld</h2>
    <form action="" method="post">
      <input type="hidden" name="action" value="scrape">
      <input type="hidden" name="source" value="mockupworld">
      <input type="number" name="page" value="1">
      <input type="submit">
    </form>
    <?php if(!empty($scrapedMockups)){ echo 'Succesfully scraped '.$scrapedMockups.' Mockups from Mockupworld';}?>
  </div>

</div>
</div>

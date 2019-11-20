<section>
  <h3>Import New Article</h3>
  <form action="index.php?page=new" method=post>
    <input type="text" name="newArticleLink">
    <input type="submit">
  </form>
</section>

<section>
<h3>Imported Article</h3>

  <div>
    <?php if(!empty($site['h1'])){ echo $site['h1']; }else{echo 'no title here';};?>
  </div>
  <div>
    <?php if(!empty($site['image'])){ print_r($site['image']); }else{echo 'no image here';};?>
  </div>

</section>


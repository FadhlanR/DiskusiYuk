<html>
<?php
include("./../credentials.php");
$db = new PDO(DB_DSN, DB_USER, DB_PASS);
if(isset($_GET['id'])): ?>
  <option value="">Articles</option>
  <?php   $articles = $db->query("SELECT * FROM articles WHERE id_categories = $_GET[id]")->fetchALL();
   foreach ($articles as $key => $value):?>
    <option value="<?php echo $value['id_articles']?>"><?php echo $value['title_articles']?></option>
  <?php endforeach?>
<?php else: ?>
    <option value="">Articles</option>
<?php endif?>
</html>

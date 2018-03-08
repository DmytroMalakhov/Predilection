<?php views_update($_GET['id']) ?>

<?php $article = get_article_by_id ($_GET['id']); ?>
<div id="content">
	<?php $category_name = get_category_by_id($article["category_id"]); ?>
	<?php $author_name = get_author_by_id($article["author_id"]); ?>
	<div class="post">
		<p class="meta"><span class="date"><i class="far fa-calendar-alt"></i>&nbsp;<?php echo date("d.m.Y в H:i", strtotime($article["date"])); ?></span> Posted by <a href="#"><?php echo $author_name; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-eye"></i>&nbsp;<?php echo $article["views"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="far fa-comment"></i>&nbsp;<?php echo $article["comments"]; ?>&nbsp;&nbsp;</p>
		<h2 class="title"><a href="index-single.php?id=<?php echo $article["id"]; ?>" ><?php echo $article["title"]; ?></a></h2>
		<h5 class="category"><?php echo $category_name; ?></h5>
		<div class="entry">
			<p><a href="#"><img class="content_img" align="left" src="<?php echo $article["img"]; ?>" alt=""></a><?php echo $article["text"]; ?></p>
		</div>
	</div>
</div>


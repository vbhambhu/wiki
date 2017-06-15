
<?php echo anchor('login/',"login"); ?>


<?php foreach ($articles as $article) { ?>
	<?php echo anchor('article/'.$article->slug,$article->title); ?>
<?php } ?>

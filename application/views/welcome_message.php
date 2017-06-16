<?php $this->load->view('templates/header'); ?>

<div class="row">
	<div class="col-lg-9 col-md-12">
		
<select class="form-control" >
	<option>dasda</option>
	<option>sss</option>
</select>





<div id="intro">

Get help with the Advanced Support
<p>The Most Helpful Web Search</p>





<select class="search-wiki form-control">

</select>




</div>


<?php foreach ($articles as $category) { ?>
	<h4><?php echo anchor('category/'.$category['url'],$category['name']); ?></h4>
	

	<?php foreach ($category['articles'] as $article) { ?>
	<p><?php echo anchor('article/'.$article['url'],$article['title']); ?></p>
	<?php } ?>

	
<?php } ?>

		
	</div>
	<div class="col-lg-3">Side bar</div>
</div>



<?php $this->load->view('templates/footer'); ?>
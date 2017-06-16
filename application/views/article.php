<?php $this->load->view('templates/header'); ?>

<div class="row">
	<div class="col-lg-9 col-md-12">
		



<div data-editable data-name=title>
    <h1><?php echo $article->title; ?></h1>
</div>



<div data-editable data-name="content">
<?php echo $article->content; ?>
</div>

<?php echo $article->view_count; ?>



		
	</div>
	<div class="col-lg-3"></div>
</div>



<?php $this->load->view('templates/footer'); ?>


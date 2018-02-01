<!-- Post -->
<div class="card my-5 border-0">

	<!-- Cover image -->
	<?php if ($page->coverImage()): ?>
	<img class="card-img-top mb-3 rounded-0" alt="Cover Image" src="<?php echo $page->coverImage(); ?>"/>
	<?php endif ?>

	<div class="card-body p-0">
		<!-- Title -->
		<a class="text-dark" href="<?php echo $page->permalink(); ?>">
			<h2><?php echo $page->title(); ?></h2>
		</a>

		<!-- Creation date -->
		<h6 class="card-subtitle mb-2 text-muted"><?php echo $page->date(); ?></h6>

		<!-- Full content -->
		<?php echo $page->content(); ?>
	</div>

</div>
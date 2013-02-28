@layout('layouts/main')

<section class="content container">
	<h2>
		Kategorier
	</h2>
	
	<a href="<?php echo URL::to_action('list_pubs@top_list_service') ?>">
			<div class='home-menu content-holder'>
				<p>Service</p>
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_atmosphere') ?>">
		<div class='home-menu content-holder'>
			<p>Atmosfär</p>
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_food') ?>">
		<div class='home-menu content-holder'>
			<p>Mat</p>
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_place') ?>">
		<div class='home-menu content-holder'>
			<p>Lokal</p>
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_assortments') ?>">
		<div class='home-menu content-holder'>
			<p>Utbud</p>
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>





</section>	
@layout('layouts/main')

<section class="content container">
	<h2>
		Topplistor
	</h2>
	
	<a href="<?php echo URL::to_action('list_pubs@top_list_service') ?>">
			<div class='home-menu content-holder'>
				Service
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_atmosphere') ?>">
		<div class='home-menu content-holder'>
			Atmosfär
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_food') ?>">
		<div class='home-menu content-holder'>
			Mat
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_place') ?>">
		<div class='home-menu content-holder'>
			Lokal
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>

	<a href="<?php echo URL::to_action('list_pubs@top_list_assortments') ?>">
		<div class='home-menu content-holder'>
			Utbud
			<i class="icon-angle-right icon-large"></i>
		</div>
	</a>





</section>	
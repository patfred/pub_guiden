@layout('layouts/main')
@section('content')
<section class="content container">
	<h1> Övriga topplistor </h1>
	<p class="info-block"> Hitta pubar baserat på användarbetyg genom att välja en kategori </p>
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
@endsection
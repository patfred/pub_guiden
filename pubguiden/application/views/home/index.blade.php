@layout('layouts/main')
@section('content')
	<section class="content container">	

		<p class="info-block"> Välkommen till Göteborgs bästa pubguide! </p>
		<a href="<?php echo URL::to_action('list_pubs@top20') ?>">
			<div class='home-menu content-holder'>
				Topplistan
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>		
		<a href="<?php echo URL::to_action('list_pubs@nearestPubs') ?>">
			<div class='home-menu content-holder'>
				Pubar nära dig
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>
		<a href="<?php echo URL::to_action('list_pubs@categories') ?>">
			<div class='home-menu content-holder'>
				Övriga topplistor
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>
		<a href="<?php echo URL::to_action('list_pubs@quiz') ?>">
			<div class='home-menu content-holder'>
				Quiz
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>
		<a href="<?php echo URL::to_action('list_pubs@afterwork') ?>">
			<div class='home-menu content-holder'>
				After Work
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>

	</section>	
@endsection
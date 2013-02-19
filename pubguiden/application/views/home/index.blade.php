@layout('layouts/main')
@section('content')
	<section class="content container">	
		<div class="home-menu content-holder">   
			<input type="text" class="home-search search-query" placeholder="Sök" > 
			<a href="#"><i class="icon-search icon-large"></i> </a> 
		</div>
		<a href="<?php echo URL::to_action('list_pubs@top20') ?>">
			<div class='home-menu content-holder'>
				Topp 20
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>		
		<a href="<?php echo URL::to_action('list_pubs@nearestPubs') ?>">
			<div class='home-menu content-holder'>
				Pubar nära dig
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>
		<a href="<?php echo URL::to_action('categories@index') ?>">
			<div class='home-menu content-holder'>
				Kategorier
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>

		<!-- Lägger denna här så länge, orkar inte skriva in i adressfältet helatiden -->

		<a href="<?php echo URL::to_action('admins@index') ?>">
			<div class='home-menu content-holder'>
				Admin
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>	

	</section>	
@endsection
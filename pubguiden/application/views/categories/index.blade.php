@layout('layouts/main')
@section('content')
	<section class="content container">	
		<div class="home-menu content-holder">   
			<input type="text" class="home-search search-query" placeholder="Sök" > 
			<a href="#"><i class="icon-search icon-large"></i> </a>
		</div>
		<a href="#">
			<div class="home-menu content-holder">	Bästa 1
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
		<a href="#">
			<div class="home-menu content-holder">  Bästa 2  
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
		<a href="#">
			<div class="home-menu content-holder">	Bästa 3
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
		<a href="#">
			<div class="home-menu content-holder">	Bästa 4
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
		<a href="#">
			<div class="home-menu content-holder">	Bästa 5
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
		<a href="#">
			<div class="home-menu content-holder">	Bästa 6
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
	</section>
@endsection

{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }}

<a href="<?php echo URL::to_action('list_pubs@nearestPubs') ?>">
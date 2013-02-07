@layout('layouts/main')
@section('content')
	<section class="content">	
		<div class="home-menu content-holder">   
			<input type="text" class="home-search search-query" placeholder="Sök" > 
			<a href="#"><i class="icon-search icon-large"></i> </a> 
		</div>
		<a href="<?php echo URL::to_action('results@top20') ?>">
			<div class='home-menu content-holder'>
				Topp 20
				<i class="icon-angle-right icon-large"></i>
			</div>
		</a>		
		<a href="#">
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
	</section>
	<div class="content-holder"> 
		<dl>
			@foreach($pubs as $pub)
				<dt> <i class="icon-map-marker"></i>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </dt>
			@endforeach
		</dl>
	</div>		
@endsection
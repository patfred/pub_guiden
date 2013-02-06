@layout('layouts/main')
@section('content')
	<section class="content">	
		<div class="home-menu content-holder">   
			<input type="text" class="home-search search-query" placeholder="Sök" > 
			<a href="#"><i class="icon-search icon-large"></i> </a> 
		</div>
			<div class="home-menu content-holder">  {{ HTML::link_to_action("results@top20", "Topp 20") }}  
				<i class="icon-angle-right icon-large"></i> 
			</div>
		<a href="#">
			<div class="home-menu content-holder">  Pubar nära dig  
				<i class="icon-angle-right icon-large"></i> 
			</div>
		</a>
			<div class="home-menu content-holder"> {{ HTML::link_to_action("categories@index", "Kategorier") }}  
				<i class="icon-angle-right icon-large"></i> 
			</div>
	</section>

	<div class="content-holder"> 
		<dl>
			@foreach($pubs as $pub)
				<dt> <i class="icon-map-marker"></i>{{ HTML::link_to_action("pubs@index", $pub->name, array($pub->id)) }} </dt>
			@endforeach
		</dl>
	</div>	
	
@endsection
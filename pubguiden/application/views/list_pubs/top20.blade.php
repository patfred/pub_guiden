@layout('layouts/main')

@section('content')
<section class="content container">
	<h1>Topplistan</h1>	
	<p> här hittar du pubbarna med högst betyg </p>

	<!--Försökte flytta detta till controllern men av någon anledning verkar det inte fungera-->	
	<?php function subval_sort($a,$subkey) {
			foreach($a as $k=>$v) {
				$b[$k] = strtolower($v[$subkey]);
			}
			arsort($b);
			foreach($b as $key=>$val) {
				$c[] = $a[$key];
			}
		return $c;
		}

		$pub_ratings = subval_sort($pub_ratings,'rating'); 	
	?>	

	<ol class="top-list">	
	@foreach($pub_ratings as $rating)
		<li> {{ HTML::link_to_action("pubs@index", $rating['name'], array($rating['id'])) }} <div class="small-rating">{{$rating['rating'] }}</li>
	@endforeach	
	</ol>
</section>	
@endsection

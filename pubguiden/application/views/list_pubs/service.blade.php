@layout('layouts/main')

@section('content')
<section class="content container">
	<h2>Topplistan - Service</h2>	

	<p>Pubar sorterade på högst betyg på service</p>

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

		$pub_ratings = subval_sort($pub_ratings,'service'); 	
	?>	

	<ol class="top-list">	
	@foreach($pub_ratings as $rating)
		<li> {{ HTML::link_to_action("pubs@index", $rating['name'], array($rating['id'])) }} <div class="small-rating">{{$rating['service'] }}</li>
	@endforeach	
	</ol>
</section>	
@endsection

@layout('layouts/main')

@section('content')
<section class="content container">
	<h1>Topplistan - Atmosfär</h1>	
	<p class="info-block">Pubar sorterade på högst betyg på atmosfär</p>


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

		$pub_ratings = subval_sort($pub_ratings,'atmosphere'); 	
	?>	

	<ol class="top-list">	
	@foreach($pub_ratings as $rating)
		<li> {{ HTML::link_to_action("pubs@index", $rating['name'], array($rating['id'])) }} <div class="small-rating">{{$rating['atmosphere'] }}</li>
	@endforeach	
	</ol>
</section>	
@endsection

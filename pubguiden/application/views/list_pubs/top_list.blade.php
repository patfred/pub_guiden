@layout('layouts/main')

<section class="content container">
	<h2>
		Topplista för {{mb_strtoupper($category, 'utf-8')}}
	</h2>
	
	<ul>
		@foreach ($pub_rating as $pub)
			<li>{{$pub}}
			</li>
		@endforeach
	</ul>

	
	
	
</section>	


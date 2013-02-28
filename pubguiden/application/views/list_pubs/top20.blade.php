@layout('layouts/main')

@section('content')
<section class="content container">
	<h2>Top 20</h2>	
	<ul>
		{{$pub_ratings}}
	</ul>
</section>	
@endsection
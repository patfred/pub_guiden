@layout('layouts/main')
@section('content')
<section class="content container ratings">
<section class="group-holder">
@foreach($pubs as $pub)
	<h1>Sätt betyg på {{$pub->name}}</h1>
@endforeach
{{ Form::open() }}
	
	{{ Form::token() }}
		{{ Form::hidden('pub_id', $pub->id) }}
		{{ Form::hidden('user_id', Auth::user()->id) }}
	<p>Service</p>
	<div class="pub-rating">
		{{ Form::radio('service', '1', '', array('class'=>'star')) }}
		{{ Form::radio('service', '2', '', array('class'=>'star')) }}	
		{{ Form::radio('service', '3', '', array('class'=>'star')) }}
		{{ Form::radio('service', '4', '', array('class'=>'star')) }}
		{{ Form::radio('service', '5', '', array('class'=>'star')) }}
	</div>

	
	<p>Atmosfär</p>
	<div class="pub-rating">
		{{ Form::radio('atmosphere', '1', '', array('class'=>'star')) }}
		{{ Form::radio('atmosphere', '2', '', array('class'=>'star')) }}
		{{ Form::radio('atmosphere', '3', '', array('class'=>'star')) }}
		{{ Form::radio('atmosphere', '4', '', array('class'=>'star')) }}
		{{ Form::radio('atmosphere', '5', '', array('class'=>'star')) }}
	</div>
	
	<p>Mat</p>	
	<div class="pub-rating">
		{{ Form::radio('food', '1', '', array('class'=>'star')) }}
		{{ Form::radio('food', '2', '', array('class'=>'star')) }}
		{{ Form::radio('food', '3', '', array('class'=>'star')) }}
		{{ Form::radio('food', '4', '', array('class'=>'star')) }}
		{{ Form::radio('food', '5', '', array('class'=>'star')) }}
	</div>
	
	<p>Lokal</p>	
	<div class="pub-rating">
		{{ Form::radio('place', '1', '', array('class'=>'star')) }}
		{{ Form::radio('place', '2', '', array('class'=>'star')) }}
		{{ Form::radio('place', '3', '', array('class'=>'star')) }}
		{{ Form::radio('place', '4', '', array('class'=>'star')) }}
		{{ Form::radio('place', '5', '', array('class'=>'star')) }}
	</div>

	<p>Utbud</p>
	<div class="pub-rating">
		{{ Form::radio('assortments', '1', '', array('class'=>'star')) }}
		{{ Form::radio('assortments', '2', '', array('class'=>'star')) }}
		{{ Form::radio('assortments', '3', '', array('class'=>'star')) }}
		{{ Form::radio('assortments', '4', '', array('class'=>'star')) }}
		{{ Form::radio('assortments', '5', '', array('class'=>'star')) }}
	</div>


	{{ Form::submit('Skicka') }}
	{{ Form::close() }}

	<i class="icon-undo"></i>{{ HTML::link_to_action("pubs@index", "Ångra och gå tillbaka", array($pub->id))}}

    </section>
</section>
@endsection
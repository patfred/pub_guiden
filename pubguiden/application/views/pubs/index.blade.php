@layout('layouts/main') 
@section('content')
<section class="content">
<dl>
    <dt>{{ $pub->name }} </dt>
	    <dd>{{ $pub->description }} </dd>
	    <dd>Adress: {{ $pub->address}}</dd>
	    <dd>Billigaste öl: {{ $pub->lowest_price }} kr</dd>
	    <dd>Quiz? @if($pub->quiz == 0)
	    			Nej
	    			@else
	    			Ja
	    		@endif</dd>
		<dd>After Work? @if($pub->after_work == 0)
	    			Nej
	    			@else
	    			Ja
	    		@endif</dd>
</dl>
</section>
@endsection
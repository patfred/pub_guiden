@layout('layouts/main')
@section('content')
<section class='content container'>
	
<h2>Sätt betyg på [pubnamn]</h2>


<?php echo Form::open('my/route'); ?>
	
	
	<p>Service</p>
	<div class="pub-rating">
		<?php echo Form::radio('service', '1', '', array('class'=>'star')); ?>
		<?php echo Form::radio('service', '2', '', array('class'=>'star')); ?>		
		<?php echo Form::radio('service', '3', '', array('class'=>'star')); ?>
		<?php echo Form::radio('service', '4', '', array('class'=>'star')); ?>
		<?php echo Form::radio('service', '5', '', array('class'=>'star')); ?>
	</div>

	
	<p>Atmosfär</p>
	<div class="pub-rating">
		<?php echo Form::radio('atmosphere', '1', '', array('class'=>'star')); ?>
		<?php echo Form::radio('atmosphere', '2', '', array('class'=>'star')); ?>
		<?php echo Form::radio('atmosphere', '3', '', array('class'=>'star')); ?>
		<?php echo Form::radio('atmosphere', '4', '', array('class'=>'star')); ?>
		<?php echo Form::radio('atmosphere', '5', '', array('class'=>'star')); ?>
	</div>
	
	<p>Mat</p>	
	<div class="pub-rating">
		<?php echo Form::radio('food', '1', '', array('class'=>'star')); ?>
		<?php echo Form::radio('food', '2', '', array('class'=>'star')); ?>
		<?php echo Form::radio('food', '3', '', array('class'=>'star')); ?>
		<?php echo Form::radio('food', '4', '', array('class'=>'star')); ?>
		<?php echo Form::radio('food', '5', '', array('class'=>'star')); ?>
	</div>
	
	<p>Lokal</p>	
	<div class="pub-rating">
		<?php echo Form::radio('place', '1', '', array('class'=>'star')); ?>
		<?php echo Form::radio('place', '2', '', array('class'=>'star')); ?>
		<?php echo Form::radio('place', '3', '', array('class'=>'star')); ?>
		<?php echo Form::radio('place', '4', '', array('class'=>'star')); ?>
		<?php echo Form::radio('place', '5', '', array('class'=>'star')); ?>
	</div>

	<p>Utbud</p>
	<div class="pub-rating">
		<?php echo Form::radio('range', '1', '', array('class'=>'star')); ?>
		<?php echo Form::radio('range', '2', '', array('class'=>'star')); ?>
		<?php echo Form::radio('range', '3', '', array('class'=>'star')); ?>
		<?php echo Form::radio('range', '4', '', array('class'=>'star')); ?>
		<?php echo Form::radio('range', '5', '', array('class'=>'star')); ?>
	</div>


	<?php echo Form::submit('Skicka');?>
	<?php echo Form::close(); ?>
</section>
@endsection
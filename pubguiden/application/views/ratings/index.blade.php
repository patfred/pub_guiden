@layout('layouts/main')
@section('content')
<section class='content'>
	
<h2>Sätt betyg på [pubnamn]</h2>


<?php echo Form::open('my/route'); ?>
<table>
	<tr>
		<td><?php echo Form::label('service', 'Service'); ?></td>
		<td><?php echo Form::radio('service', '1', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('service', '2', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('service', '3', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('service', '4', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('service', '5', '', array('class'=>'star')); ?></td>
	</tr>
	<tr>
		<td><?php echo Form::label('atmosphere', 'Atmosfär'); ?></td>
		<td><?php echo Form::radio('atmosphere', '1', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('atmosphere', '2', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('atmosphere', '3', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('atmosphere', '4', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('atmosphere', '5', '', array('class'=>'star')); ?></td>
	</tr>
	<tr>
		<td><?php echo Form::label('food', 'Mat'); ?></td>
		<td><?php echo Form::radio('food', '1', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('food', '2', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('food', '3', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('food', '4', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('food', '5', '', array('class'=>'star')); ?></td>
	</tr>
	<tr>
		<td><?php echo Form::label('place', 'Lokal'); ?></td>
		<td><?php echo Form::radio('place', '1', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('place', '2', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('place', '3', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('place', '4', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('place', '5', '', array('class'=>'star')); ?></td>
	</tr>
	<tr>
		<td><?php echo Form::label('range', 'Utbud'); ?></td>
		<td><?php echo Form::radio('range', '1', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('range', '2', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('range', '3', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('range', '4', '', array('class'=>'star')); ?></td>
		<td><?php echo Form::radio('range', '5', '', array('class'=>'star')); ?></td>
	</tr>

</table>


<?php echo Form::submit('Skicka');?>
<?php echo Form::close(); ?>
</section>
@endsection
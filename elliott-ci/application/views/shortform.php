<div class="shorten">
	<?php
	$attributes = array('class' => 'shortform');
	$this->load->helper('form');
	echo form_open(base_url('/shorten/create'),$attributes);
	$data = array(
		'name' => 'url',
		'class' => 'text',
		'value' => '',
		'placeholder' => 'url shortener',
		'autocomplete'=>'off'
	);
	echo form_input($data);
	$data = array(
		'name' => 'shorten_url',
		'class' => 'submit',
		'value' => 'go'
	);
	echo form_submit($data);
	echo form_close();
	?>
</div>
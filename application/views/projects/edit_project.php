<h2>Edit Project.</h2>

<?php $attributes = array( 'id' => 'create_form', 'class' => 'form_horizontal' ); ?>

<?php echo validation_errors("<p class='bg-danger'></p>"); ?>

<?php echo form_open('projects/edit', $attributes);?>

<div class="form-group">

	<?php echo form_label('Project Name');

		$data = array(
			'class' => 'form-control',
			'name' => 'project_name',
			'placeholder' => 'Project Name'
		);

		echo form_input($data); 

	?>

</div>

<div class="form-group">

	<?php echo form_label('Description');

		$data = array(
			'class' => 'form-control',
			'name' => 'project_body',
			'placeholder' => 'Description'
		);

		echo form_textarea($data); 

	?>

</div>

<div class="form-group">

	<?php
		
		$data = array(
			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Update'
		);

		echo form_submit($data); 

	?>

</div>

<?php echo form_close();?>

<div class="row">
    <div class="col-md-9">

        <h1>Project Name: <?php echo $project_data->project_name; ?></h1>
        <p>Created at: <?php echo $project_data->date_created; ?></p>
        <h3>Description</h3>
        <p><?php echo $project_data->project_body; ?></p>

    </div>

    <div class="col-md-3 float-right">

        <ul class="list-group">
            <h4>Project Actions</h4>

            <li class="list-group-item"><a href="<?php echo base_url();?>projects/create" >Create Task</a></li>
            <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit">Edit Projects</a></li>
            <li class="list-group-item"><a href="">Delete Projects</a></li>
        </ul>

    </div>

</div>
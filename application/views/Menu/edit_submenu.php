<div class="container">
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
            <?php
            if (validation_errors() != false) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php
            }
            ?>
            <form method="post" action="<?php echo base_url(); ?>menu/update_submenu">
                <input type="hidden" name="id" id="id" value="<?php echo $submenu->id; ?>" />

                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" value="<?php echo $submenu->title; ?>" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="menu_id">menu_id</label>
                    <input type="text" class="form-control datepicker" id="menu_id" name="menu_id" value="<?php echo $submenu->menu_id; ?>">
                </div>

                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control datepicker" id="url" name="url" value="<?php echo $submenu->url; ?>">
                </div>

                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" class="form-control datepicker" id="icon" name="icon" value="<?php echo $submenu->icon; ?>">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
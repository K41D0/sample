<div class="modal fade" id="addProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Project</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="../modals/addProject.php" method="POST">
            <div class="mb-3">
              <label for="add_project_name" class="col-form-label">Project name</label>
              <input type="text" class="form-control" name="add_project_name" id="add_project_name" required="">
            </div>
            <div class="input-group">
              <span class="input-group-text">Description</span>
              <textarea class="form-control" name="project_description" id="project_description" aria-label="With textarea"></textarea>
            </div>
            <div class="mb-3">
              <label for="start_date" class="col-form-label">Start date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date" value="<?php echo isset($start_date) ? date("Y-m-d",strtotime($start_date)) : '' ?>">
            </div>
            <div class="mb-3">
              <label for="due_date" class="col-form-label">Due date</label>
              <input type="date" class="form-control form-control-sm" autocomplete="off" name="due_date" value="<?php echo isset($due_date) ? date("Y-m-d",strtotime($due_date)) : '' ?>">
            </div>
          
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
  </div>
</div>
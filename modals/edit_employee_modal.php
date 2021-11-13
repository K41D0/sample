<div class="modal fade" id="edit_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" action="edit_employee_process.php">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit user account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="../modals/edit_employee_process.php" method="POST">
            <div class="mb-3">
              <input type="hidden" name="id" id="edit_id">
              <label for="update_firstname" class="col-form-label">First name</label>
              <input type="text" class="form-control" name="update_firstname" id="update_firstname" required="">
            </div>
            <div class="mb-3">
              <label for="update_lastname" class="col-form-label">Last name</label>
              <input type="text" class="form-control" name="update_lastname" id="update_lastname" required="">
            </div>
            <div class="mb-3">
              <label for="update_email" class="col-form-label">Email</label>
              <input type="text" class="form-control" name="update_email" id="update_email" required="">
            </div>
            <div class="mb-3">
              <label for="update_password" class="col-form-label">Password</label>
              <input type="password" class="form-control" name="update_password" id="update_password" required="">
            </div>
      </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="edit_employee">Submit</button>
            </div>
          </form>
    </div>
  </div>
</div>
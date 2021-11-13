<div class="modal fade" id="change_pass_modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="change_pass_modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="change_pass_modal">Change password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../modals/change_pass.php" method="POST">
          <?php 
            if(isset($_GET['error'])){?>
              <p class="error" style="background-color: #F54741;color: white;padding: 10px;width: 100%;">
            <?php echo $_GET['error']; ?></p>
          <?php } ?>
          <div class="mb-3">
            <label for="Current_password" class="col-form-label">Current password</label>
            <input type="password" class="form-control" name="Current_password" id="Current_password" required="">
          </div>
          <div class="mb-3">
            <label for="New_password" class="col-form-label">New password</label>
            <input type="password" class="form-control" name="New_password" id="New_password" required>
          </div>
          <div class="mb-3">
            <label for="Confirm_password" class="col-form-label">Confirm password</label>
            <input type="password" class="form-control" name="Confirm_password" id="Confirm_password" required="">
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

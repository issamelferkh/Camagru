<?php require APPROOT.'/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Modify An Account</h2>
        <p>Please fill out this form to modify your compte</p>
        <form action="<?php echo URLROOT; ?>/users/modify" method="post">
          <div class="form-group">
            <label for="uname">New User Name: </label>
            <input type="text" name="uname" class="form-control form-control-lg <?php echo (!empty($data['uname_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['uname']; ?>">
            <span class="invalid-feedback"><?php echo $data['uname_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="email">New Email: </label>
            <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
            <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
          </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Modify" class="btn btn-info btn-block">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT.'/views/inc/footer.php'; ?>
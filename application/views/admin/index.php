<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin Login</title>
  <?php
        echo link_tag('assets/admin/vendors/mdi/css/materialdesignicons.min.css');
        echo link_tag('assets/admin/vendors/base/vendor.bundle.base.css');
        echo link_tag('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css');
        echo link_tag('assets/admin/css/style.css');
        echo link_tag('assets/admin/images/favicon.png');
    ?>
    <style>
        .error-msg{
            color:red;
            font-size:12px;
        }
    </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="POST" action="" onsubmit="return loginvalidation()">

              <div class="error-msg" id="adminEmailError-msg"><?=form_error('email')?><?=$this->session->tempdata('login')?></div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="adminEmail" placeholder="Username">
                </div>
                <div class="error-msg" id="adminPasswordError-msg"><?=form_error('password')?></div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="adminPassword" placeholder="Password">
                </div>
                
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url('assets/admin/vendors/base/vendor.bundle.base.js')?>"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url('assets/admin/js/off-canvas.js')?>"></script>
  <script src="<?=base_url('assets/admin/js/hoverable-collapse.js')?>"></script>
  <script src="<?=base_url('assets/admin/js/template.js')?>"></script>
  <!-- endinject -->
    <!-- My javascript files -->
    <script src="<?=base_url('assets/admin/js/validation.js')?>"></script>
</body>

</html>

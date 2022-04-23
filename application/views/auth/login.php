<div class="container-fluid">

  <?= $this->session->flashdata('message'); ?>
  
  <!-- /.login-logo -->
  <div class="container mt-5">
    <div class="card-body login-card-body rounded p-0">
      <!-- row -->
      <div class="row">
        <!-- untuk logo -->
        <div class="col image rounded-left">
          <div class="text-center">
            <img src="<?= base_url('assets/images/accessoris/hero.png')?>" class="hero-image" alt="...">
          </div>
        </div>
        <!-- logo end -->

        <!-- untuk login -->
        <div class="col-5 p-5">
          <h5 class="">Hallo !</h5>
          <h5 class="font-weight-bold mb-5">Good Morning</h5>
          <h6 class="login-box-msg font-weight-bold"><span>Login</span> Your account</h6>
          <form action="<?= base_url('auth') ?>" method="post">
            <div class="input-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
            <div class="input-group mt-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <?= form_error('password', '<small class="text-danger pl-1">', '</small>') ?>
            <!-- end form login -->
            <p class="mt-4">
              <a href="<?= base_url('auth/registrasi')?>" class="d-flex justify-content-end"><small>Forgot password ?</small></a>
            </p> 
            <div class="row d-flex justify-content-center">
              <div class="col-10">
                <button type="submit" class="btn sign btn-block">Sign In</button>
              </div>
            </div>
          </form>
          <!-- form end -->
        </div>
      </div>
    </div>
  </div>
</div>

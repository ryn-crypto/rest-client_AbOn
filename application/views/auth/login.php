<div class="container-fluid mt-5">

  <?= $this->session->flashdata('message'); ?>
  
  <!-- /.login-logo -->
  <div class="container mt-5">
    <div class="card-body login-card-body rounded p-0">
      <!-- row -->
      <div class="row">
        <!-- untuk logo -->
        <div class="col image rounded-left">
          <div class="hero-image">
          </div>
        </div>

        <!-- untuk login -->
        <div class="col">
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
            <div class="row mt-3">
              <div class="col-lg">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
            </div>
          </form>

          <hr>
    
          <p class="mb-0">
            <a href="<?= base_url('auth/registrasi')?>" class="text-center"><small>Daftar baru</small></a>
          </p>
          <p class="mb-1">
            <a href="forgot-password.html"><small>Lupa password</small></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

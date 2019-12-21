
  <body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Register</b> Av</a>
  </div>

  <div class="col-lg">
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Create an Account!</p>

      <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name')  ?>">
                 <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email')  ?>">
            <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
 <hr>
          <div class="text-center">
           
          
                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
              </div>
          <!-- /.col -->
        </div>
      </form>

   


    </div>
    
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
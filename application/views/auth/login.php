
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b> Av</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

<?= $this->session-> flashdata('message');?>
      <form class="user" method="post" action="<?= base_url('auth');  ?>">
        <div class="input-group mb-3">
         <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>"> <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
           <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                       <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
           <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          
          </div>
          <hr>
          <!-- /.col -->
         <div class="col-10">
            <div class="icheck-primary">
            <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
            </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

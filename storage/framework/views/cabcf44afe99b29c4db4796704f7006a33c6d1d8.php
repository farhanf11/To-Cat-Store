

<?php $__env->startSection('content'); ?>

<!-- Page Content -->
    <div class="page-content page-auth" id="register">
      <div class="section-store-auth">
        <div class="container" style="justify-content: center;">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-5">
              <h2 class="text-center" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; ">Login Account</h2>
              <form class="login-form" action="<?php echo e(route('login.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Email Address</label>
                  <input
                    name="email"
                    type="text"
                    class="form-control"
                    aria-describedby="emailHelp"
                    v-model="email"
                  />
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div>
                        <?php echo e($message); ?>

                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password"/>
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div>
                        <?php echo e($message); ?>

                    </div>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button class="btn btn-dark btn-block mt-4" style="font-family: Poppins; font-style: normal; font-weight: normal;" type="submit">
                  LOGIN
                </button>
                <div class="text-center m-2">OR</div>
                <a href="<?php echo e(route('google')); ?>" class="btn btn-light btn-block mt-4">
                  <img src="/images/google.png" width="35px" alt="google">
                </a>
            </div>
            <div class="col-lg-2">
            
            </div>
            <div class="col-lg-4 col-4" >
              <h2 class="text-center" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 30px; ">Register Account</h2><br>
              <form class="mt-3">
                <div class="form-group" style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px;">
                 <p>If you don’t have an account, see this option to access the registration form. <br>
                  <br> 
                  When you provide us with details, you will have a fast and pleasant shopping experience with <img src="./images/toketgede.png" alt="logo" style="width: 90px" /></p>
                  
                </div>
               
                <a href="<?php echo e(route('register')); ?>" class="btn btn-dark btn-block mt-4">
                  REGISTER
                </a>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/login.blade.php ENDPATH**/ ?>
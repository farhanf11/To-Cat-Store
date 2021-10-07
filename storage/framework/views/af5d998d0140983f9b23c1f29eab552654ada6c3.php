

<?php $__env->startSection('content'); ?>

<!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth">
        <div class="container">
          <div class="text-center"></div>
          <div class="row align-items-center row-login">
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
              <img src="./images/turkishangora.png" alt="" width="352px" />
            </div>
            <div class="col-lg-5">
              <h2
                style="
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: normal;
                "
              >
                Register Account
              </h2>
              <form action="<?php echo e(route('register.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" class="form-control w-75" name="name"/>
                  <?php $__errorArgs = ['name'];
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
                  <label>Email Address</label>
                  <input
                  type="email"
                  class="form-control w-75"
                  aria-describedby="emailHelp"
                  name="email"
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
                  <input type="password" class="form-control w-75" name="password"/>
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
                
                <div class="form-group">
                  <label>Password Confirmation</label>
                  <input type="password" class="form-control w-75" name="password_confirmation"/>
                  <?php $__errorArgs = ['password_confirmation'];
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
                <button
                class="btn btn-login btn-block w-75 mt-4 btn-dark"
                type="submit"
                >
                REGISTER NOW
              </button>
              <div class="text-center m-2">OR</div>
              <a href="<?php echo e(route('google')); ?>" class="btn btn-light btn-block mt-4">
                  <img src="./images/google.png" width="35px" alt="google">
                </a>
              <p
              style="
                    font-family: Poppins;
                    font-style: normal;
                    font-weight: normal;
                  "
                >
                  Or if you already have an Account
                  <a
                    href="<?php echo e(route('login')); ?>"
                    style="
                      font-family: Poppins;
                      font-style: normal;
                      font-weight: normal;
                    "
                  >
                    <u>Login Now</u>
                  </a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/register.blade.php ENDPATH**/ ?>
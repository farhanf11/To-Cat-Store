

<?php $__env->startPush('styles'); ?>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <link href="<?php echo e(asset('style/main.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <!-- Categories -->
    <section class="store-breadcrumbs"style="margin-top: 100px;">
      <section  data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item ">
                    <a href="<?php echo e(route('landing')); ?>">Home</a>
                  </li>
                    <li class="breadcrumb-item">
                      <?php echo e($product->category->name); ?>

                    </li>
                  </li>
                  
                </ol>
              </nav>
            </div>
          </div>
        </div>
    
    </section>

    <!-- Products -->
    <div class="Container">
      <div class="row">
        <div class="col-lg-1 col-1 col-md-1"></div>
        <div class="col-lg-4 col-9 m-2" style="margin-left:-8.3%;">
          <img src="<?php echo e(asset($product->images[0]->image_path)); ?>" alt="<?php echo e($product->name); ?>" width="100%"/>
        </div>
          
        <div class="col-lg-6">
          <h4 style="margin-left:4%; margin-top:-3%;"><br>
            <?php echo e($product->name); ?>

          </h4>
          <h5 style="margin-left:4%;" class="text-danger">Rp <?php echo e($product->harga); ?></h5>
          <br>
          <h5 style="margin-left:4%;" class="text-black-50">
            Description
          </h5>
          <p style="margin-left:4%;" class="text">
            <?php echo e($product->description); ?>

          </p> <br>
          <form action="<?php echo e(route('products.detail.cart', $product)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-success" style="margin-left:4%;">
              Add to cart
            </button>
          </form>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
     <script src="./vendor/jquery/jquery.slim.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./script/navbar.scroll.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/products-detail.blade.php ENDPATH**/ ?>
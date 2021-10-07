

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
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="breadcrumb-item">
                    <a href="<?php echo e(route("products", [
                      'category'=> $category->name
                    ])); ?>"><?php echo e($category->name); ?></a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ol>
              </nav>
            </div>
          </div>
        </div>
    
    </section>

    <!-- Products -->
    <section class="store-new-products" style="padding-top: 30px;">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h5>Products</h5>
          </div>

          <div class="row">
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="col-6 col-md-4 col-lg-3 mt-3"
                
                    data-aos-delay="100"
                >
                    <a href="<?php echo e(route('products.detail', $product->id)); ?>" class="component-products d-block">
                    <div class="products-thumbnail">
                        <div
                        class="products-image"
                        >
                        <img src="<?php echo e(asset($product->images[0]->image_path)); ?>" style="width: 225px; height: 150px;" alt="" />
                        </div>
                    </div>
                    <div class="products-text text-black-50"><?php echo e($product->name); ?></div>
                    <div class="products-price">Rp <?php echo e($product->harga); ?></div>
                    </a>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/products.blade.php ENDPATH**/ ?>
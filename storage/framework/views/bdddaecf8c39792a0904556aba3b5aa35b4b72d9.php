

<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
        <div class="page-content page-home">
        <!-- Carousel -->
        <section class="store-carousel" data-aos="zoom-in">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div
                    id="storeCarousel"
                    class="carousel slide"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                    <li
                        class="active"
                        data-target="#storeCarousel"
                        data-slide-to="0"
                    ></li>
                    <li data-target="#storeCarousel" data-slide-to="1"></li>
                    <li data-target="#storeCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                        src="./images/topbanner1.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="./images/topbanner2.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                        src="./images/topbanner3.png"
                        alt="bannerImg"
                        class="d-block w-100"
                        />
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Categories -->
        <section class="store-trend-categories">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <h5>Categories</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-3 col-lg-2"></div>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-md-3 col-lg-2">
                        <a href="/products?category=<?php echo e($category->name); ?>" class="component-categories d-block">
                            <div class="categories-image">
                            <img src="<?php echo e(asset($category->image_path)); ?>" alt="<?php echo e($category->name); ?>" class="w-100" />
                            </div>
                            <p class="categories-text"><?php echo e($category->name); ?></p>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="col-6 col-md-3 col-lg-2"></div>
            </div>
            </div>
        </section>

        <section class="store-new-products">
            <div class="container">
            <div class="row">
                <div class="col-12">
                <h5>Products</h5>
                </div>

                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-4 col-lg-3 mt-3" data-aos-delay="200">
                            <a href="<?php echo e(route('products.detail', $product->id)); ?>" class="component-products d-block">
                            <div class="products-thumbnail">
                                <div class="products-image">
                                <img
                                    src="<?php echo e(asset($product->images[0]->image_path)); ?>"
                                    style="width: 225px; height: 150px"
                                    alt=""
                                />
                                </div>
                            </div>
                            <div class="products-text text-black-50">
                                <?php echo e($product->name); ?>

                            </div>
                            <div class="products-price">Rp <?php echo e($product->harga); ?></div>
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            </div>
        </section>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/index.blade.php ENDPATH**/ ?>
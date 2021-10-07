<nav
      class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      "
      data-aos="fade-down"
      style="
        background-color: white;
        box-shadow: 0px 4px 9px rgba(0, 0, 0, 0.25);
      "
    >
      <div class="container">
        <a href="<?php echo e(route('landing')); ?>" class="navbar-brand">
          <img src="<?php echo e(asset('images/toketgede.png')); ?>" alt="logo" style="width: 118px" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul
            class="navbar-nav ml-auto"
            style="background-color: rgb(250, 250, 250)"
          >
            <li class="nav-item">
              <a href="<?php echo e(route('landing')); ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('products')); ?>" class="nav-link">Products</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('contact')); ?>" class="nav-link">Contact Us</a>
            </li>
            <?php if(auth()->guard()->check()): ?>
                <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                >
                  Hi, <?php echo e(auth()->user()->name); ?>

                </a>
                <div class="dropdown-menu">
                  <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="dropdown-item">Logout</button>
                  </form>
                </div>
              </li>

              <li class="nav-item">
                <a href="<?php echo e(route('cart')); ?>" class="nav-link d-inline-block">
                  <img src="./images/cart.svg" alt="" />
                  <div class="card-badge">0</div>
                </a>
              </li>
            </ul>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
              <li class="nav-item">
                <a href="<?php echo e(route('login')); ?>" class="nav-link">Login</a>
              </li>
            <?php endif; ?>
                
          </ul>
        </div>
      </div>
    </nav><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>
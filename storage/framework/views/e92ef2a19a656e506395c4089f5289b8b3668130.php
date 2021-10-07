


<?php $__env->startSection('content'); ?>
    <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav
            class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
            data-aos="fade-down"
          >
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="./images/user.svg"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, Admin
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.html">Back to Store</a>
                    <a class="dropdown-item" href="dashboard-account.html"
                      >Settings</a
                    >
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/">Logout</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block mt-2" href="#">
                    <img src="./images/cart.svg" alt="" />
                    <div class="card-badge">3</div>
                  </a>
                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Hi, Admin </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="#"> Cart </a>
                </li>
              </ul>
            </div>
          </nav>

          <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">Manage it well and get money</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="dashboard-products-create.html"
                      class="btn btn-success"
                      >Add New Product</a
                    >
                  </div>
                </div>
                <div class="row">
              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="100" style="margin-top:15px;"
              >
                <a href="dashboard-products-details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic1.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">Susu kucing premium Breed</div>
                  <div class="products-price">Rp 3000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="200" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic2.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">Meo Creamy treats<br>
                    snack kucing
                  </div>
                  <div class="products-price">Rp 25000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="300" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image">
                      <img src="images/pic6.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">
                    Me-o for Adult 1kg<br>
                    Rasa Tuna
                  </div>
                  <div class="products-price">Rp 42000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="400" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic3.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text text-black-50">Tempat minum dan makan<br>
                    kucing dan anjing</div>
                  <div class="products-price">Rp 360,000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="500" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic4.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">
                    Proplan for kitten (repack) 1kg
                  </div>
                  <div class="products-price">Rp 59,000</div>
                </a>
              </div>

              <div
                class="col-6 col-md-4 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="600" style="margin-top:15px;"
              >
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div
                      class="products-image"
                    >
                      <img src="images/pic5.png" style="width: 225px; height: 150px;" alt="" />
                    </div>
                  </div>
                  <div class="products-text">Me-o for Adult 1kg<br>
                    Rasa Salmon
                  <div class="products-price">Rp 79,000</div>
                </a>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/dashboard-products.blade.php ENDPATH**/ ?>
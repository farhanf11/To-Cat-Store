 <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="./images/logocat.jpeg"
              alt=""
              class="my-4"
              style="width: 118px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="<?php echo e(route('dashboard')); ?>"
              class="list-group-item list-group-item-action active"
              >Dashboard</a
            >
            <a
              href="<?php echo e(route('dashboard.products')); ?>"
              class="list-group-item list-group-item-action"
              >My Products</a
            >
            <a
              href="<?php echo e(route('dashboard.transactions')); ?>"
              class="list-group-item list-group-item-action"
              >Transactions</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper --><?php /**PATH D:\xamppp\htdocs\To-cat-E-commerce\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
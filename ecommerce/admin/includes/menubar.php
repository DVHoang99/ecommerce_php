<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Hoạt động</a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">Quản lý</li>
      <li><a href="sales.php"><i class="fa fa-money"></i> <span>Đã bán</span></a></li>
      <li><a href="users.php"><i class="fa fa-users"></i> <span>Tài khoản</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode"></i>
          <span>Sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
          <li><a href="category.php"><i class="fa fa-circle-o"></i> Loại sản phẩm</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
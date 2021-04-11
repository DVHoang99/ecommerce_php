<header class="main-header">
  <a href="#" class="logo">
    <span class="logo-lg"><b>Kido</b> Quản Lý</span>
  </a>

  <nav class="navbar navbar-static-top">

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $admin['firstname'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['firstname'].' '.$admin['lastname']; ?>
                <small>Thành viên tham gia ngày <?php echo date('D d. M. Y', strtotime($admin['created_on'])); ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Cập Nhật</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Đăng xuất</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>
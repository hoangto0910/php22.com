<?php 
if (!isset($_SESSION['user'])) {
  header("location: /mvc_new/index.php?mod=home&act=error");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Public/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Public/backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="Public/backend/index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="Public/backend/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="Public/backend/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="Public/backend/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a href="/mvc_new/index.php?mod=auth&act=logout" class="btn btn-secondary">
            Log out
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Public/backend/index3.html" class="brand-link">
        <img src="Public/backend/dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="Public/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['user']['name']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="/mvc_new/index.php?mod=home&act=login" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Trang chủ
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <?php if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) { ?>
            <li class="nav-item has-treeview">
              <a href="/mvc_new/index.php?mod=post&act=index" class="nav-link">
                <!-- <i class="nav-icon fas fa-copy"></i> -->
                <i class="nav-icon fas fa fa-book" aria-hidden="true"></i>
                <p>
                  Quản Lý Bài Viết
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                  <a href="/mvc_new/index.php?mod=post&act=index" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quản Lý chức năng</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/mvc_new/index.php?mod=post&act=create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Mới bài Viết</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <li class="nav-item has-treeview">
            <a href="/mvc_new/index.php?mod=post&act=viewPost" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Xem bài viết
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mvc_new/index.php?mod=post&act=viewPost" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách các bài Viết</p>
                </a>
              </li>
            </ul>
          </li>
          <?php if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) { ?>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-copy"></i> -->
                <i class="nav-icon fas fa fa-clipboard" aria-hidden="true"></i>
                <p>
                  Duyệt Bài Viết
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/mvc_new/index.php?mod=post&act=postAccess" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bài Viết đang chờ</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <?php if($_SESSION['user']['role'] == User::ROLE['admin'] || $_SESSION['user']['role'] == User::ROLE['content']) { ?>
            <li class="nav-item">
              <a href="/mvc_new/index.php?mod=category&act=index" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Quản Lý danh mục
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/mvc_new/index.php?mod=category&act=index" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Quản Lý chức năng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/mvc_new/index.php?mod=category&act=create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Mới Danh Mục</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php } ?>
          <?php if ($_SESSION['user']['role'] == User::ROLE['admin']) { ?>

           <li class="nav-item">
            <a href="/mvc_new/index.php?mod=user&act=index" class="nav-link">
              <!-- <i class="nav-icon fas fa-tree"></i> -->
              <i class="nav-icon fa fa-address-book" aria-hidden="true"></i>
              <p>
                Quản Lý Người Dùng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mvc_new/index.php?mod=user&act=index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản Lý chức năng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/mvc_new/index.php?mod=user&act=create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm Mới Người Dùng</p>
                </a>
              </li>
            </ul>
          </li>

        <?php } ?>
        <!-- <li class="nav-header">EXAMPLES</li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
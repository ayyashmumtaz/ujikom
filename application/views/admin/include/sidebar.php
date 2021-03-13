<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?= site_url('admin'); ?>" class="simple-text logo-normal">
          <img height="50px" src="<?= base_url('assets/img/core-img/logo.png');?>">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
              <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/dokter'); ?>">
              <i class="material-icons">assignment</i>
              <p>Laporan Masyarakat</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/product'); ?>">
              <i class="material-icons">article</i>
              <p>Aspirasi Masyarakat</p>
            </a>
          </li>
         <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/order'); ?>">
              <i class="material-icons">feedback</i>
              <p>Informasi Masyarakat</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/order'); ?>">
              <i class="material-icons">supervised_user_circle</i>
              <p>Data Admin & Petugas</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/order'); ?>">
              <i class="material-icons">face</i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/carousel'); ?>">
              <i class="material-icons">build</i>
              <p>Slide Setting</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div> 
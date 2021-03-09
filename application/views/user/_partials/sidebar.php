 <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="<?= site_url('');?>"><img style="background-size: 10px;" src="<?= base_url('img/core-img/logo.jpeg');?>" alt=""></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
         
        </div>
       
        <!-- Navbar Toggler-->

        <div class="suha-navbar-toggler d-flex justify-content-between flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="<?= base_url('img/profile/default.png');?>" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">

<?php
$data['user'] = $this->db->get_where('user', ['username' =>
    $this->session->userdata('nama')])->row_array();





          
                




                    if ($this->session->userdata('status') == "user") {
                      echo "Hey, ";
                      echo $data['user']['nama'];
                    } else {
                      echo "Hey, Tamu!"; 
                    }
                    
                    
                ?></h6>
         
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav">
        <li><a href="<?= site_url('cart'); ?>"><i class="lni-cart"></i>Keranjang Belanja</a></li>
        <li><a href="<?= site_url('product'); ?>"><i class="lni-facebook-messenger"></i>Inbox</a></li>
        <li><a href="<?= site_url('news'); ?>"><i class="lni-book"></i>News & Tips</a></li>
        <li><a href="<?= site_url('login/logout'); ?>"><i class="lni-power-switch"></i>Sign Out</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni-arrow-left"></i></div>
    </div>


<div class="page-content-wrapper">


  <div class="hero-slides owl-carousel">


  <!-- Single Hero Slide-->
  <?php foreach($banner as $pro) : ?>
    <div class="single-hero-slide">
      <div class="slide-img"><?= img([

        'src'   => 'assets/img/bg-img/' . $pro->img,
        
        ])?></div>
        <div class="slide-content h-100 d-flex align-items-center">
          <div class="container">

          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </div>
    </div>
     
</div>
  <!-- Hero Slides-->

 <div class="product-catagories-wrapper" >
<br>  
    <div class="container">
     

      <div class="section-heading d-flex align-items-center justify-content-between">
 <div class="col-4">
            <div class="card mb-3 catagory-card" style="background-color: green;">
              <div class="card-body"><h3 style="color: white;"><?= $jumlah_selesai;?></h3><span style="color: white;">Laporan Telah Selesai</span></div>
            </div>
          </div>

          <div class="col-4">
            <div class="card mb-3 catagory-card" style="background-color: orange;">
              <div class="card-body"><h3 style="color: white;"><?= $jumlah_proses;?></h3><span style="color: white;">Laporan Diproses</span></div>
            </div>
          </div>

          <div class="col-4">
            <div class="card mb-3 catagory-card" style="background-color: silver;">
              <div class="card-body"><h3 style="color: white;"><?= $jumlah_belum_diproses;?></h3><span style="color: white;">Laporan Belum Diproses</span></div>
            </div>
          </div>


      </div>
    </div>
  </div>
  





  <div class="product-catagories-wrapper" >
  
    <div class="container">
      <div class="section-heading d-flex align-items-center justify-content-between">
<h6 class="ml-1">Kategori Pelayanan Publik</h6>
          </div>
      <div class="product-catagory-wrap">
        <div class="row">
          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="<?= site_url('Laporan');?>"><i class="fa fa-warning"></i><span>Laporan</span></a></div>
            </div>
          </div>

          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="<?= site_url('Laporan/aspirasi');?>"><i class="lni-thought"></i><span>Aspirasi</span></a></div>
            </div>
          </div>

          <div class="col-4">
            <div class="card mb-3 catagory-card">
              <div class="card-body"><a href="<?= site_url('Laporan/Informasi');?>"><i class="lni-book"></i><span>Informasi</span></a></div>
            </div>
          </div>
      





        </div>
      </div>
    </div>
  </div>

  <!-- Product Catagories-->

  <!-- Flash Sale Slide-->


    

            
          


  <br>

 
      

     




     




<?php if ($this->session->flashdata('warning')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Anda Sudah Login!',
      text: 'Jika tidak dialihkan ke menu utama, silahkan reload halaman ini',
      showConfirmButton: false,
      timer: 3000
    })
  </script>

<?php endif; ?>

<?php if ($this->session->flashdata('not-login')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Anda Belum Login!',
      text: 'Anda harus login untuk melapor, memberikan aspirasi, ataupun menanyakan informasi!',
      showConfirmButton: true,
      timer: 3000
    })
  </script>

<?php endif; ?>

<?php if ($this->session->flashdata('not-login-room')): ?>
  <script>
    Swal.fire({
      icon: 'warning',
      title: 'Anda Harus Login!',
      text: 'Untuk melihat PaduMas Saya. Login menggunakan NIK, username dan password yang tersedia!',
      showConfirmButton: true,
      timer: 3000
    })
  </script>

<?php endif; ?>



<?php if ($this->session->flashdata('success-login')): ?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil!',
      text: 'Selamat Datang di PaduMas!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>

<?php endif; ?>


<!-- Single Weekly Product Card-->


<!-- Top Products-->




<!-- Cool Facts Area-->


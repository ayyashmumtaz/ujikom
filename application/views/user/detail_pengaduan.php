<body class="bg-light">
<div class="py-5 text-center">
      
        <h2>Detail Pengaduan</h2>
       
      </div>
    <div class="container">
      
       <?php foreach($adu as $adu) : ?>
       
    <center>  Lampiran :</center>
<img class="d-block mx-auto mb-2" src="<?= base_url('assets/img/laporan/'.$adu->foto); ?>" alt="" width="100" height="100">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            
  <form id="payment-form">
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ID Pengaduan</h6>
              
              </div>
              <a class="text" href=""><?= $adu->id_pengaduan?></a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama Pelapor</h6>
        
              </div>
              <span class="text-muted">Ayyash</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Judul Laporan</h6>
        
              </div>
              
              <span class="text-muted"><?= $adu->judul_pengaduan?></li>
                  
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tanggapan</h6>
           <?php foreach($tanggap as $tanggap) : ?>
              </div>
              
              <span class="text-muted"><?= $tanggap->tanggapan?></span>
              <?php endforeach;?>
            </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="my-0">Status</h6>
<?php
switch ($adu->status) {
  case '0':
    echo '<strong><button class="btn btn-sm btn-secondary" disabled="">Belum Diproses</button></strong>';
    break;
  case 'proses':
    echo '<strong><button class="btn btn-sm btn-warning" disabled="">Laporan Dalam Proses</button></strong>';
    break;
  case 'selesai':
    echo '<strong><button class="btn btn-sm btn-success" disabled="">Laporan Selesai</button></strong>';
    break;
}
?>

              
            </li>
          </ul>

        
         
            <hr class="mb-4">
<?php endforeach;?>
            
          </form>
        </div>
   </div>
 </span>
</li>
</ul>
</form>
</h4>
</div>


<body class="bg-light">
  <br>  
<div class="py-5 text-center">
      
        <h2>Detail Permintaan</h2>
        <h2>Informasi</h2>
       
      </div>
    <div class="container">
      
       <?php foreach($adu as $adu) : ?>
       
  
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            
  <form id="payment-form">
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">ID Informasi</h6>
              
              </div>
              <a class="text" href=""><?= $adu->id_informasi?></a>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nama Pelapor</h6>
        
              </div>
              <span class="text-muted">Ayyash</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Pertanyaan</h6>
        
              </div>
              
              <span class="text-muted"><?= $adu->informasi?></li>
                  
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Tanggapan</h6>
           <?php foreach($tanggap as $tanggap) : ?>
              </div>
              
              <span class="text-muted"><?= $tanggap->jawaban?></span>
              <?php endforeach;?>
            </li>
           
            <li class="list-group-item d-flex justify-content-between">
              <h6 class="my-0">Status</h6>
<?php
switch ($adu->status) {
  case '0':
    echo '<strong><button class="btn btn-sm btn-secondary" disabled="">Belum Diproses</button></strong>';
    break;
  case 'selesai':
    echo '<strong><button class="btn btn-sm btn-success" disabled="">Selesai</button></strong>';
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


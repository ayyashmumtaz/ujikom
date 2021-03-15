<div class="page-content-wrapper">   
<div id="accordion">

  <div class="card">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" href="#collapseOne">
       <i class="lni-book"> </i><span>Laporan Saya</span>
      </a>
    </div>
    <div id="collapseOne" class="collapse" data-parent="#accordion">
      <div class="card-body">
           <div class="flash-sale-wrapper pb-3">
        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between">

          </div>

<?php foreach($laporan as $lapor) : ?>

      <div class="col-12 col-md-6">
              <a href="<?= site_url('laporan/detail_laporan/').$lapor->id_pengaduan;?>"><div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="<?= site_url('laporan/detail_laporan/').$lapor->id_pengaduan;?>"></a><a class="product-thumbnail d-block" href="<?= site_url('laporan/detail_laporan/').$lapor->id_pengaduan;?>"><img src="<?= base_url('assets/img/laporan/').$lapor->foto;?>" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?= site_url('laporan/detail_laporan/').$lapor->id_pengaduan;?>"><?= $lapor->judul_pengaduan?></a>
                    <div class="product-rating"><?php switch ($lapor->status) {
                      case '0' :
                        echo '<button class="btn btn-sm btn-danger" disabled>Belum Diproses</button>';
                        break;
                        case 'proses' :
                        echo '<button class="btn btn-sm btn-info" disabled>Sedang Diproses</button>';
                        break;
                        case 'selesai' :
                        echo '<button class="btn btn-sm btn-success" disabled>Selesai</button>';
                        break;
                      
                      default:
                        # code...
                        break;
                    } ?></button></div></a>
                  </div>
                </div>
              </div>
            </div>

<?php endforeach; ?>
        
              </div>
            </div>

</div>
      </div>
    </div>


  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
       <i class="lni-handshake"> </i><span>Aspirasi Saya</span>
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <div class="flash-sale-wrapper pb-3">
        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between">

          </div>

<?php foreach($aspirasi as $aspirasi) : ?>

      <div class="col-12 col-md-6">
              <a href="<?= site_url('laporan/detail_aspirasi/').$aspirasi->id_aspirasi;?>"><div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="<?= site_url('laporan/detail_aspirasi/').$aspirasi->id_aspirasi;?>"></a><a class="product-thumbnail d-block" href="<"><img src="<?= base_url('');?>" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?= site_url('laporan/detail_aspirasi/').$aspirasi->id_aspirasi;?>"><?= $aspirasi->judul_aspirasi;?></a>
                    <div class="product-rating"><small><?= $aspirasi->aspirasi;?></small></div></a>
                  </div>
                </div>
              </div>
            </div>

<?php endforeach; ?>
        
              </div>
            </div>

</div>
      </div>
    </div>
      </div>
 

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
        <i class="lni-information"> </i><span>Permintaan Informasi</span>
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        <div class="flash-sale-wrapper pb-3">
        <div class="container">

          <div class="section-heading d-flex align-items-center justify-content-between">

          </div>

<?php foreach($informasi as $info) : ?>

      <div class="col-12 col-md-6">
              <a href="<?= site_url('laporan/detail_informasi/').$info->id_informasi;?>"><div class="card weekly-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side"><a class="wishlist-btn" href="<?= site_url('laporan/detail_informasi/').$info->id_informasi;?>"></a><a class="product-thumbnail d-block" href="<"><img src="<?= base_url('');?>" alt=""></a></div>
                  <div class="product-description"><a class="product-title d-block" href="<?= site_url('laporan/detail_informasi/').$info->id_informasi;?>"><?= $info->informasi;?></a>
                    <div class="product-rating"><?php switch ($info->status) {
                      case '0' :
                        echo '<button class="btn btn-sm btn-danger" disabled>Belum Diproses</button>';
                        break;
                        case 'proses' :
                        echo '<button class="btn btn-sm btn-info" disabled>Sudah Dijawab</button>';
                        break;
                        case 'selesai' :
                        echo '<button class="btn btn-sm btn-success" disabled>Selesai</button>';
                        break;
                      
                      default:
                        # code...
                        break;
                    } ?></div></a>
                  </div>
                </div>
              </div>
            </div>

<?php endforeach; ?>
        
              </div>
            </div>

</div>
      </div>
    </div>
      </div>
    </div>
  </div>

</div>
</div>
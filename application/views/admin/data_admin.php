 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Pengaduan <a class="btn btn-default" href="<?= site_url('admin/add_admin'); ?>" style="float: right;
    display: block;" >+ ADD</a></h4>
                 

                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success-delete')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('success-delete'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
          
        </div>
        <?php endif; ?>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Username
                        </th>
                        <th>
                          Nama Admin
                        </th>
                        <th>
                         No Telepon
                        </th>
                        <th>
                         Level
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $laporan) : ?>
                        <tr>
                          <td>
                           <?=$laporan->id_petugas?>
                          </td>
                          <td>
                            <?=$laporan->username?>
                          </td>
                          <td>
                            <?=$laporan->nama_petugas?>
                          </td>
                          <td><?=$laporan->telp?></td>
                          <td>
                            <?php switch ($laporan->level) {
                      case 'admin' :
                        echo '<button class="btn btn-sm btn-info" disabled>Administrator</button>';
                        break;
                        case 'petugas' :
                        echo '<button class="btn btn-sm btn-info" disabled>Petugas Validasi</button>';
                        break;
                      
                      default:
                        # code...
                        break;
                    } ?>
                          </td>
                           
                          <td>
                            <a class="btn btn-success" href="<?php echo site_url('admin/validasi/'.$laporan->id_petugas) ?>">Ganti Password</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
                  </div>
                </div>
              </div>
            </div>
 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Pengaduan 
                 

                </div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
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
                          Nama Pelapor
                        </th>
                        <th>
                          Judul Laporan
                        </th>
                     
                        <th>
                         Status
                        </th>
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $laporan) : ?>
                        <tr>
                          <td>
                           <?=$laporan->id_pengaduan?>
                          </td>
                          <td>
                            <?=$laporan->nik?>
                          </td>
                          <td>
                            <?=$laporan->judul_pengaduan?>
                          </td>
                          <td>
                            <?php switch ($laporan->status) {
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
                    } ?>
                          </td>
                           
                          <td>
                            <?php switch ($laporan->status) {
                      case '0' :
                        echo "<a class='btn btn-info' href=".site_url("admin/validasi/".$laporan->id_pengaduan).'>Tanggapi</a>';
                        break;
                        case 'proses' :
                        echo "<a class='btn btn-success' href=".site_url("admin/validasi/".$laporan->id_pengaduan).'>Sudah Ditanggapi</a>';
                        break;
                        case 'selesai' :
                        echo "<a class='btn btn' href=".site_url("admin/validasi/".$laporan->id_pengaduan).' disabled >Selesai</a>';
                        break;
                      
                      default:
                        # code...
                        break;
                    } ?>
                            
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
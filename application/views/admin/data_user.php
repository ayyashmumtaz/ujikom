 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Pengaduan 
                 

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
                          NIK
                        </th>
                        <th>
                          Nama User
                        </th>
                        <th>
                          Username
                        </th>
                     
                         <th>
                         Aksi
                        </th>
                      </thead>
                      <tbody>
                        <?php foreach($data->result() as $laporan) : ?>
                        <tr>
                          <td>
                           <?=$laporan->nik?>
                          </td>
                          <td>
                            <?=$laporan->nama?>
                          </td>
                          <td>
                            <?=$laporan->username?>
                          </td>
                         
                           
                          <td>
                            <a class="btn btn-info" href="<?php echo site_url('admin/validasi/'.$laporan->nik) ?>">Ganti Password</a>
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
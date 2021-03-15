 <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">List Banner Web<a class="btn btn-default" href="<?= site_url('admin/addCarousel'); ?>" style="float: right;
    display: block;" >+ ADD</a></h4>
                 

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        
                        <th>
                          ID
                        </th>
                        <th>
                          Gambar Banner
                        </th>
                        <th>
                         Aksi
                        </th>
                        
                      </thead>
                      <tbody>
                        <?php foreach($banner as $program) : ?>
                        <tr>
                          <td>
                           <?=$program->id?>
                          </td>
                          <td>
                            <?= img([
                  'width' => '200',
        'src'   => 'assets/img/bg-img/' . $program->img,
        
        ])?>
                          </td>
                         
                          <td>
                            
                            <a class="btn btn-danger" href="<?php echo site_url('admin/deleteCarousel/'.$program->id) ?>">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                      <?php endforeach; ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
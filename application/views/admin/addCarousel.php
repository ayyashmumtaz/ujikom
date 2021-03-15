  <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">+ Add Carousel</h4>
                 
                </div>
                <div class="card-body">
                      <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
                   <form action="<?php echo site_url().'/admin/addCarl'?>" method="post" enctype="multipart/form-data">
                    
                    <div class="row">

                      <div class="col-md-3">
                        
                          <label class="bmd-label-floating">Masukan Foto</label>
                          <input type="file" name="img" >
                        
                      </div>





                    </div>

<p></p>

                       
                   
                     <label class="bmd-label-floating"> Dengan menambahkan carousel anda berarti mematuhi seluruh syarat dan ketentuan yang berlaku.</label>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

<div class="page-content-wrapper">   
	<br>	
	<div class="container">	
		<form action="" method="">
<input class=" form-control" type="text" id="keyword" placeholder="Cari aspirasi....">
<button class="btn-block btn-success" id="btn-search">Search</button>
	</form>
</div>

<br>
<br>	
<?php foreach($aspirasi as $lapor) : ?>

      <div class="col-12 col-md-6">
              <div class="card weekly-product-card">
                <center><div class="card-body">
                
                  <div class="product-rating"><small>	<?= $lapor->judul_aspirasi?></small>
                    <div class="product-description"><strong>	<i>"<?= $lapor->aspirasi;?>"</i> </strong></div></center>
                  </div>
                </div>
              </div>
            </div>

<?php endforeach; ?>
        
              </div>
            </div>


</div>
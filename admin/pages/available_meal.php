<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Available Meals</h1>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- information summery -->
<div class="card">
  <div class="card-header">      
      <h3 class="card-title">Meals information summery</h3>
      <div class="card-tools">
        <!-- Collapse Button -->
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      </div>
    </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fa fa-cogs"></i></span>                
          <div class="info-box-content">
            <span class="info-box-text">Meals </span>
            <span class="info-box-number" ><?= count_badges('consumer') ?></span>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Home Cook</span>
            <span class="info-box-number" ><?= count_badges('homecook') ?></span>
          </div>
        </div>
      </div>
    </div>              
  </div>
</div>
<!-- /.information summery -->

<!-- cards -->
<div class="row justify-content-center">
    <?php
        for($i=0; $i<=10 ; $i++){
            ?>
                 <div class="col-md-4">
                    <div class="card " style="cursor : pointer" onclick="console.log('yes')">
                        <div class="card-header">
                            <div class="float-left">
                                <img src="./dist/img/photo1.png" class="" style="border-radius: 50%;" height="50px" width="50px" alt="">
                                <label for="" class="ml-2">Alex Benjamin</label>
                                <!-- <i class="fa fa-location-arrow text-danger" class="ml-2"><small class="text-dark">Baridhara DOHS</small></i> -->
                            </div> 
                            <div class="float-right">
                                <div class="card-footer text-center" style="border-radius: 5% !important; ">
                                    <i class="fas fa-star text-warning"></i> <span>  4.5(33)</span>
                                </div>
                            </div>    
                        </div>
                        <div class="card-body p-0">
                            <img src="./dist/img/photo2.png" class="img-fluid" >
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-between">
                                <i class="fas fa-map-marker-alt text-danger" class="ml-2"><small class="text-dark">Baridhara DOHS</small></i>
                                <i class="fas fa-users text-warning" ><small class="text-dark">15</small></i>
                                <i class="fas fa-calendar text-info" ><small class="text-dark">12-15 Mar</small></i></i>
                                <i class="fas fa-clock text-danger" ><small class="text-dark">12-3 PM</small></i>
                                <i class="fas fa-tags text-primary" aria-hidden="true"><small class="text-dark">430$</small></i>
                            </div>
                            <div class="row mt-2">
                                <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, id?</label>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>
   
</div>
<!-- /.cards -->
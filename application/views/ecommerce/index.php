  <!-- Jumbotron -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          
            <img src="<?= base_url('assets/img/welcome.png'); ?>" class="d-block w-100">
          
        </div>
        <div class="carousel-item">
          
            <img src="<?= base_url('assets/img/banner1.png'); ?>" class="d-block w-100">
         
        </div>
        <div class="carousel-item">
          
            <img src="<?= base_url('assets/img/banner-01.jpg'); ?>" class="d-block w-100">
          
        </div>
      </div>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Start Categories  -->
<div class="categories-shop">
  <div class="container">
    <div class="row ">
      <div class="col-lg-6 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="<?= base_url('assets/')?>img/img-pro-02.jpg" alt="" />
          <!-- <a class="btn hvr-hover" href="">Read More</a> -->
        </div>
      </div>

      <div class="col-lg-6 col-xs-12">
        <div class="shop-cat-box">
          <img class="img-fluid" src="<?= base_url('assets/')?>img/img-pro-01.jpg" alt="" />
          <!-- <a class="btn hvr-hover" href="">Read More</a> -->
        </div>
      </div>
    </div>
  </div>
  <div class="container lg-6">
    <form class="form-inline">

      <a href="<?= base_url('auth')?>" class="custom_dark-btn mr-sm-2">Read More</a>

    </form>
  </div>
</div>
<!-- End Categories -->

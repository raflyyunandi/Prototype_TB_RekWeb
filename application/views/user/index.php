            <?= $this->session->flashdata('message'); ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/img/banner-02.jpg'); height: 950px;">
        <div align = "center" class="cover-slides" style="padding-top: 400px;">
          <h1 >First Slide</h1>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/img/banner-02.jpg'); height: 950px;">
        <div align = "center" class="cover-slides" style="padding-top: 400px;">
          <h1  >Second Slide</h1>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/img/banner-02.jpg'); height: 950px;">
        <div align = "center" class="cover-slides" style="padding-top: 400px;">
          <h1 >Third Slide</h1>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

   <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Read More</a>
                    </div>
                     <div class="why-text">
                            <h4>Nama Makanan</h4>
                            <h5>Aksi</h5>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Read More</a>
                    </div>
                     <div class="why-text">
                            <h4>Nama Makanan</h4>
                            <h5>Aksi</h5>
                            <a href="#"><h5 class=" btn-primary">Aksi</h5></a>
                        </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Read More</a>
                    </div>
                     <div class="why-text">
                            <h4>Nama Makanan</h4>
                            <h5>Aksi</h5>
                        </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->


    <div class="box-add-products">
        <div class="container">

        </div>
    </div>

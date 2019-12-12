

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/img/filamen.jpg'); height: 700px;">
        <div align = "center" class="cover-slides" style="padding-top: 400px;">
          <h1 >First Slide</h1>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/img/fila2.jpg'); height: 700px;">
        <div align = "center" class="cover-slides" style="padding-top: 400px;">
          <h1  >Second Slide</h1>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/img/rawat.png'); height: 700px;">
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
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <h5> $9.79</h5>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Read More</a>
                    </div>
                     <div class="why-text">
                            <h4>Read More sit amet</h4>
                            <h5> $9.79</h5>
                            <a href="#"><h5 class=" btn-primary"> $9.79</h5></a>
                        </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/')?>img/categories_img_01.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Read More</a>
                    </div>
                     <div class="why-text">
                            <h4>Read More sit amet</h4>
                            <h5> $9.79</h5>
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

    <style type="text/css">
        #slides {
  position: relative;
}
#slides .slides-container {
  display: none;
}
#slides .scrollable {
  *zoom: 1;
  position: relative;
  top: 0;
  left: 0;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
  height: 100%;
}
#slides .scrollable:after {
  content: "";
  display: table;
  clear: both;
}

.slides-navigation {
  margin: 0 auto;
  position: absolute;
  z-index: 3;
  top: 46%;
  width: 100%;
}
.slides-navigation a {
  position: absolute;
  display: block;
}
.slides-navigation a.prev {
  left: 0;
}
.slides-navigation a.next {
  right: 0;
}

.slides-pagination {
  position: absolute;
  z-index: 3;
  bottom: 0;
  text-align: center;
  width: 100%;
}
.slides-pagination a {
  border: 2px solid #222;
  border-radius: 0px;
  width: 30px;
  height: 30px;
  display: -moz-inline-stack;
  display: inline-block;
  vertical-align: middle;
  *vertical-align: auto;
  zoom: 1;
  *display: inline;
  background-image: url("");
  margin: 2px;
  overflow: hidden;
  text-indent: -99999px;
  text-align: center;
}
.slides-pagination a.current {
  background: #222;
}

    </style>

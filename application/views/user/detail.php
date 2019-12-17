    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>DETAIL BARANG</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

<div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="<?= base_url('assets/img/barang/')?><?= $data['image']?>" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="<?= base_url('assets/img/barang/')?><?= $data['image']?>" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="<?= base_url('assets/img/barang/')?><?= $data['image']?>" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span> 
                    </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
                        <i class="fa fa-angle-right" aria-hidden="true"></i> 
                        <span class="sr-only">Next</span> 
                    </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?= $data['nama_barang']?></h2>
                        <h5> <del>Rp. 20.000</del> Rp.<?= $data['harga_barang']?>,-</h5>
                        <p class="available-stock"><span> Stock tersisa : <?= $data['stock_barang']?> <!-- / <a href="#">8 sold </a> --></span><p>
                        <h4>Short Description:</h4>
                        <p><?= $data['deskripsi_barang']?> </p>
                        <ul>
                            <li>
                                <div class="form-group quantity-box">
                                    <label class="control-label">Quantity</label>
                                    <input class="form-control" value="0" min="0" max="20" type="number">
                                </div>
                            </li>
                        </ul>

                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">
                                <a class="btn btn-info" data-fancybox-close="" href="#"><i class="fas fa-heart"></i> Add to Cart</a>
                                <a class="btn btn-danger" href="<?= base_url('user') ?>">Kembali</a>
                            </div>
                        </div>

                        <div class="add-to-btn">
                            <div class="add-comp">
                                <!-- <a class="btn btn-danger" href="<?= base_url('user') ?>">Kembali</a> -->
                            </div>
                            <div class="share-bar">
                                <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <br>
        </p>
    </p>
</div>
</div>
</div>
</div>
</div>


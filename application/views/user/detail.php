               
    <div style=" background: #060606; padding: 40px 0px;"><br></div>
        <div class="container">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="row special-list">

             <div class="col-lg-12 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="<?= base_url('assets/')?>img/<?= $data['image']?>" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $10.79</h5>
                    </div>
                </div>

            </div>
            <br>
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                            <a class="btn hvr-hover" href="<?= base_url('user')?>"><h1 style="color: white; padding: 5px;">Kembali</h1></a>
                    </div>
                </div>

        </div>
    </div>
</div>
    </div>

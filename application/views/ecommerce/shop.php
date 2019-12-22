
   <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row ">
                <?php foreach ($barang as $key ) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/img/barang/')?><?= $key['image']?>" alt="" />
                        
                    </div>
                      <div class="why-text">
                        <h3><?= $key['nama_barang']?></h3>
                        <p>Harga Barang</p>
                        <h3>Rp. <?= $key['harga_barang']?> ,-</h3>
                          <a href="<?= base_url('auth')  ?>" name="cart" class="btn btn-secondary btn-block">Buy</a>
                     </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->

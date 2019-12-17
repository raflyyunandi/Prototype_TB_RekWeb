    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY SHOP</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
   <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row ">
                <?php foreach ($barang as $key ) : ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/img/barang/')?><?= $key['image']?>" alt="" />
                        <a class="btn hvr-hover" href="<?= base_url('user/detail')?>/<?=$key['id_barang']?>">Detail</a>
                    </div>
                      <div class="why-text">
                        <h3><?= $key['nama_barang']?></h3>
                        <p>Harga Barang</p>
                        <h3>Rp. <?= $key['harga_barang']?> ,-</h3>
                        <form action="<?= base_url('user/cartadd')?>" method="post">
                          <input type="hidden" class="form-control" name="beli" value="1">
                          <input type="hidden" class="form-control" name="id_barang" value="<?= $key['id_barang'] ?>">
                          <input type="hidden" class="form-control" name="id_user" value="<?= $user['id_user'] ?>">
                        <hr>
                          <button type="submit" name="cart" class="btn btn-secondary btn-block">Add to Cart</button>
                        </form>
                     </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->

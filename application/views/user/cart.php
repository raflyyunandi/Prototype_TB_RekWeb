   
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY CART</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
   <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <form action="<?= base_url('user/updatecart')?>" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Yang Dibeli</th>
                                    <th>Stock Ada</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($b as $key): ?>
                                <input type="hidden" name="id" value="<?= $key['id'] ?>">
                                <tr>
                                    <td>
									<img class="img-fluid" width="100" src="<?= base_url('assets/')?>img/<?= $key['image']?>" alt=""/>
								</a>
                                    </td>
                                    <td class="name-pr">
									<?= $key['nama_barang']?>
                                    </td>
                                    <td class="price-pr">
                                        <p>Rp. <?= $key['harga_barang']?>,-</p>
                                    </td>
                                    <td class="quantity-box"><input name="beli" type="number" size="4" value="<?= $key['beli']?>" min="0" step="1" class="c-input-text qty text"></td>
                                    <td class="total-pr">
                                        <p><?= $key['stock_barang']?></p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="#">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-10 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="update-box" >
                    <input type="hidden" class="form-control" name="id_barang" value="<?= $key['id_barang'] ?>">
                    <input type="hidden" class="form-control" name="id_user" value="<?= $key['id_user'] ?>">
                    <input type="submit" name="updatecart" value="Update Cart">
                    </div>
            </div>
        </form>

      <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Total</h4>
                            <div class="ml-auto font-weight-bold">
                            </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount Coupon</h4>
                            <div class="ml-auto font-weight-bold">0</div>
                        </div>
                        <hr class="my-1">
                </div>
                </div>
                <form method="post" action="<?= base_url('user/checkout')?>">
                <div class="col-12 d-flex shopping-box">
                    <input type="hidden" name="stock_barang" value="<?= $p = $key['stock_barang'] - $a = $key['beli']; ?>">
                    <input type="hidden" name="id_barang" value="<?= $key['id_barang']; ?>">
                    <input type="hidden" name="saldo" value="<?= $key['saldo']; ?>">
                    <input type="hidden" name="harga_barang" value="<?= $key['harga_barang']; ?>">
                    <input type="hidden" name="beli" value="<?= $key['beli']; ?>">
                    <input type="hidden" name="id_user" value="<?= $key['id_user']; ?>">
                    <button class="ml-auto btn hvr-hover" type="submit" name="checkout" >Checkout</button>
                </div>
                </form> 
            </div>

        </div>
    </div>

    <!-- End Cart -->

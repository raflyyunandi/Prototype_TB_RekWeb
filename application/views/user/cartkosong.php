   
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
       <br>
       <form method="post" action="" class="text-center">
         <button class="btn btn-dark" type="submit" name="id_user" value="<?= $get['id_user'] ?> ">TAMPILKAN</button>
       </form>
       <hr>

       <div class="container">
       <?= $this->session->flashdata('message'); ?>
       </div>

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
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Yang Dibeli</th>
                                    <th>Isi Dalam 1 Paket</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                <?php foreach ($bacot as $key ): ?>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                 <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>

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
            </div>
        
      <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Total : </h4>
                            <div class="ml-auto font-weight-bold">0</div>
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
                    <button class="ml-auto btn btn-dark" type="submit" name="checkout" >Checkout</button>
                </div>
                </form> 
            </div>

        </div>
    </div>

    <!-- End Cart -->

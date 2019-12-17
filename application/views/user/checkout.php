<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CHECKOUT</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-right">
                    <form action="<?=base_url()?>user/print" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" placeholder="Lokasi Anda?" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <select id="jenis_barang" name="jenis_barang" class="form-control">
                                    <option selected>Pilih Cara Pengiriman</option>
                                    <option value="">REGULER</option>
                                    <option value="">INSTANT</option>
                                    <option value="">EXPRESS</option>
                                    <option value="">SLOW</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                  <select id="jenis_barang" name="jenis_barang" class="form-control">
                                    <option selected>Pilih Kurir</option>
                                    <option value="">JNE</option>
                                    <option value="">GOJEK</option>
                                    <option value="">JET</option>
                                    <option value="">JET</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="" placeholder="No HP Aktif">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="" placeholder="Kota Tujuan">
                            </div>
                        </div>
          
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="" name="" placeholder="Deskripsi barang" rows="4" data-error="Alamat Tujuan" ></textarea>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn btn-dark" name="print" type="submit" name="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
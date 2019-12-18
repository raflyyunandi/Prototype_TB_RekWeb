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
        <div class="container">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <br>
                        <h1>Lokasi Pengiriman</h1>
                        <p>Harap isikan dengan benar! karena Barang siap diantarkan</p>
                    </div>
                </div>
            </div>
        </div>

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
                                  <select name="cara_pengiriman" class="form-control">
                                    <option value="">Pilih Cara Pengiriman</option>
                                    <option value="REGULER">REGULER</option>
                                    <option value="INSTANT">INSTANT</option>
                                    <option value="EXPRESS">EXPRESS</option>
                                    <option value="SLOW">SLOW</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                  <select name="kurir" class="form-control">
                                    <option value="">Pilih Kurir</option>
                                    <option value="JNE">JNE</option>
                                    <option value="GOJEK">GOJEK</option>
                                    <option value="JET">JET</option>
                                    <option value="NJT">NJT</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No HP Aktif">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="kota_tujuan" name="kota_tujuan" placeholder="Kota Tujuan">
                            </div>
                        </div>
          
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" placeholder="Alamat Lengkap" rows="4" data-error="Alamat Lengkap" ></textarea>
                            </div>
                            <div class="submit-button text-center">
                                <input type="hidden" name="email_user" value="<?= $user['email'] ?>">
                                <button class="btn btn-dark" name="print" type="submit" name="submit" value="Submit">Submit + Print</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
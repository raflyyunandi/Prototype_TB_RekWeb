   
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ISI SALDO</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">popup</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-right">
                    <h2 class="text-center">Isi Saldo</h2>
                    <form action="<?=base_url()?>User/isisaldo" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="saldo" value="<?= $data['saldo'] ?>"  >
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_user" value="<?= $data['id_user'] ?>">
                                    <h1>Saldo saya : <?= $data['saldo']?></h1>
                                    <label>Pilih Jumlah Saldo :</label>
                                    <select name="tambahanS" id="tambahanS" class="form-control">
                                        <option selected>Pilih Saldo</option>
                                        <option value="10000">Rp. 10.000,-</option>
                                        <option value="25000">Rp. 25.000,-</option>
                                        <option value="50000">Rp. 50.000,-</option>
                                        <option value="100000">Rp. 100.000,-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Pilih Metode pembayaran :</label>
                                    <select  class="form-control">
                                        <option selected>Pilih Saldo</option>
                                        <option value="">BRI</option>
                                        <option value="">BCA</option>
                                        <option value="">BJB</option>
                                        <option value="">Mandiri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alasan isi Saldo :</label>
                                    <input class="form-control" type="text" name="">
                                </div>
                            </div>
                            </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-dark" name="isisaldo" type="submit" name="submit" value="Submit">Submit</button>

                                </div>
                             <a href="<?= base_url(); ?>user/profile" class="btn btn-dark" >Back</a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
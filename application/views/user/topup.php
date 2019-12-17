
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
                                    <select name="tambahanS" id="tambahanS" class="form-control">
                                        <option selected>Pilih Jenis barang</option>
                                        <option value="10000">Rp. 10.000,-</option>
                                        <option value="25000">Rp. 25.000,-</option>
                                        <option value="50000">Rp. 50.000,-</option>
                                        <option value="100000">Rp. 100.000,-</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" name="isisaldo" type="submit" name="submit" value="Submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
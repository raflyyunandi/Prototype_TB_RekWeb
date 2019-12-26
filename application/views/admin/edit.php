

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY PROFILE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
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
                    <h5>Silahkan ubah barang jika ada kesalahan dalam penginputan</h5>
                    <form action="<?=base_url()?>Admin/updatedata" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="hidden" class="form-control" name="id_barang" value="<?= $data['id_barang'] ?>">
                                    <input type="text" class="form-control" name="nama_barang" value="<?= $data['nama_barang'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form>
                                    <label>Jenis Barang</label>
                                      <select id="jenis_barang" name="jenis_barang" class="form-control" >
                                        <option selected><?= $data['jenis_barang'] ?></option>
                                        <option value="1">Sayurah</option>
                                        <option value="2">Buah</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Harga Barang</label>
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $data['harga_barang'] ?>" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Stock Barang</label>
                                <input type="number" min="0" step="1" class="c-input-text qty text form-control" id="stock_barang" name="stock_barang" value="<?= $data['stock_barang'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <img src="<?= base_url('assets/img/barang/')?><?= $data['image'] ?>" width="200" height="200" >
                                <input type="file" name="fotopost" for="fotopost">
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Deskripsi Barang</label>
                                    <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" rows="4" data-error="Write your message" ><?= $data['deskripsi_barang'] ?></textarea>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn btn-dark" name="edit" type="submit" name="submit" value="Submit">Submit</button>
                                </div>
                                 <a href="<?= base_url(); ?>admin" class="btn btn-dark" class="submit-button text-left">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
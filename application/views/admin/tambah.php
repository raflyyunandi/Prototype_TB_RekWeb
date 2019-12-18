
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>TAMBAH BARANG</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                    <h2>GET IN TOUCH</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                    <form action="<?=base_url()?>Admin/tambah" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang" >
                                    <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <select id="jenis_barang" name="jenis_barang" class="form-control">
                                    <option selected>Pilih Jenis barang</option>
                                    <option value="Sayuran">Sayuran</option>
                                    <option value="Buah">Buah</option>
                                </select>
                                <?= form_error('jenis_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" placeholder="Harga barang"  >
                                <?= form_error('harga_barang', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" min="0" step="1" class="c-input-text qty text form-control" id="stock_barang" name="stock_barang" placeholder="Isi item /Paket">
                                <?= form_error('stock_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" name="fotopost" for="fotopost">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" placeholder="Deskripsi barang" rows="4" data-error="Write your message" ></textarea>
                                <?= form_error('deskripsi_barang', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="submit-button text-center">
                                <button class="btn btn-dark" name="tambah" type="submit" name="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
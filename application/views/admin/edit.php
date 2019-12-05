

<div style=" 
background: #060606;
padding: 40px 0px;
"><br></div>


<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                    <form action="<?=base_url()?>Admin/updatedata" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_barang" value="<?= $data['nama_barang'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form>
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
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?= $data['harga_barang'] ?>" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" min="0" step="1" class="c-input-text qty text form-control" id="stock_barang" name="stock_barang" value="<?= $data['stock_barang'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <img src="<?= base_url('assets/img/')?><?= $data['image'] ?>" width="200" height="200" >
                                <input type="file" name="fotopost" for="fotopost">
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang" rows="4" data-error="Write your message" ><?= $data['deskripsi_barang'] ?></textarea>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" name="edit" type="submit" name="submit" value="Submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
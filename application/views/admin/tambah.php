

<div style=" background: #060606; padding: 40px 0px;"><br></div>

<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                    <form action="<?=base_url()?>Admin/insertdata" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <form>
                                      <select id="jenis_barang" name="jenis_barang" class="form-control">
                                        <option selected>Pilih Jenis barang</option>
                                        <option value="1">Sayurah</option>
                                        <option value="2">Buah</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="harga_barang" name="harga_barang" placeholder="Harga barang"  >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="number" min="0" step="1" class="c-input-text qty text form-control" id="stock_barang" name="stock_barang" placeholder="Stock barang">
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
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" name="tambah" type="submit" name="submit" value="Submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
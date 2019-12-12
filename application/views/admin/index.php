
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

<div style=" background: #060606; padding: 40px 0px;"><br></div>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY JUGMENT</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item active">Action</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <br>
                        <h1>SELAMAT DATANG MASTER</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                            <a class="btn hvr-hover" href="<?= base_url('admin/tambah')?>"><h1 style="color: white; padding: 5px;">Tambah Barang Baru</h1></a>
                    </div>
                </div>
            </div>
           
            <div class="row">
        <div class="col-md-4" >
            <form action="" method="post">
                <div class="input-group mb-0 ">
                  <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                  <div class="input-group-append">
                  <button class="btn hvr-hover" type="submit"><h1 style="color: white; padding: 0px;">Search</h1></button>
                  </div>
                </div>
            </form>
        </div>
 </div>
    </div>
    <!-- End All Title Box -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama barang</th>
                                    <th>Jenis barang</th>
                                    <th>Harga barang</th>
                                    <th>Stock barang</th>
                                    <th>Image barang</th>
                                    <th>Deskripsi barang</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                <?php foreach ($barang as $key) : ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <?= ++$i; ?>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['nama_barang'] ?></a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?= $key['jenis_barang'] ?></p>
                                    </td>
                                    
                                         <td class="price-pr">
                                        <p><?= $key['harga_barang'] ?></p>
                                    </td>
                                     <td class="price-pr">
                                        <p><?= $key['stock_barang'] ?></p>
                                    </td>
                                        
                                     <td class="price-pr">
                                        <p><?= $key['image'] ?></p>
                                    </td>
                                    <td class="total-pr">
                                        <p><?= $key['deskripsi_barang'] ?></p>
                                    </td>
                                    <td class="remove-pr">
                                    <a href="<?= base_url('admin/edit')?>/<?=$key['id']?>"><i class="fas fa-plus"></i></a>
                                    <a href="<?= base_url('admin/hapus')?>/<?=$key['id']?>"><i class="fas fa-times"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php if(empty($barang) ) : ?>
                <div class="alert alert-danger" role="alert">
                 Data Barang Tidak ditemukan
                </div>
            <?php endif; ?>
        
        </div>
    </div>

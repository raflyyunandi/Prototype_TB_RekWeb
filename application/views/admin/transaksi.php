
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

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
                            <a class="btn btn-dark" href="<?= base_url('admin/tambah')?>">Tambah Barang Baru</a>
                    </div>
                </div>
            </div>
           
            <div class="row">
        <div class="col-md-4" >
            <form action="" method="post">
                <div class="input-group mb-0 ">
                  <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                  <div class="input-group-append">
                  <button class="btn btn-dark" type="submit">Search</button>
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
                                    <th>Id Transaksi</th>
                                    <th>Nama Barang yang terjual</th>
                                    <th>Nama User yang membeli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                <?php foreach ($data as $key) : ?>
                                <tr>
                                    <td class="name-pr">
                                        <?= ++$i; ?>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['id_transaksi'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['id_barang'] ?></a>
                                    </td>
                                     <td class="name-pr">
                                        <a href="#"><?= $key['id_user'] ?></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
    

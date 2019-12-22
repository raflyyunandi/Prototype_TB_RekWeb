
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MY TRANSACTION</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Admin</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
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
                        <h1>RIWAYAT TRANSAKSI</h1>
                        <p>Ini halaman untuk melihat transaksi yang pernah dilakukan user</p>
                    </div>
                </div>
            </div>

            <div class="row">
        <div class="col-md-4" >
            <form action="" method="post">
                <div class="input-group mb-0 ">
                  <input type="text" class="form-control" placeholder="Cari Data User" name="keyword">
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
                                    <th>Email User</th>
                                    <th>Cara Pengiriman</th>
                                    <th>Kurir</th>
                                    <th>No HP Pembeli</th>
                                    <th>Kota Tujuan</th>
                                    <th>Alamat Lengkap</th>
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
                                        <a href="#"><?= $key['email_user'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['cara_pengiriman'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['kurir'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['no_hp'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['kota_tujuan'] ?></a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#"><?= $key['alamat_lengkap'] ?></a>
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
    

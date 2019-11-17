
<div class="container">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
	<?php if($this->session->flashdata('flash')): ?>
<!-- 	<div class="row mt-3">
		<div class="col-md-6">  
			<div class="alert alert-success alert-dismissible fade show" role="alert"> 
				Data mahasiswa <strong>Berhasil</strong> <?=$this->session->flashdata('flash');?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				</div>
		</div>
	</div>
 -->
	<?php endif;?>

	<div class="row mt-3">
		<div class="col-md-12">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Barang ... " name="keyword">
					<div class="input-group-append">
					<button class="btn btn-outline-primary" type="submit" id="cari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div> 


	<div class="row mt-3">
		<div class="col-md-12">
		<h3>Daftar Barang</h3>
			<?php if (empty($mhs)) : ?>
			<div class="alert alert-danger" role="alert"> Data Barang tidak ditemukan ! </div>
			<?php endif; ?>
			
			<?php foreach($mhs as $mhs) : ?>
				<ul class="list-group">
				<div class="card" >
					<div class="row">
            			<div class="col-md-4">
				 <img style="width: 200px;"src="<?= base_url('assets/img/profile/default').$user ?>" class="card-img"  alt="...">
				</div>
					<div class="col-md-6">
	                <div class="card-body">
	                    <h3 class="card-title"><?=$mhs['nama']?></h3>
	                    <p class="card-text ">Rp 50.000,-</p>
						</div>

				<li type="none">
					
					<a  href="<?=base_url('home/pembayaran')?>" class="btn  btn-success col-md-11">Beli Sekarang</a>
					
					<a href="<?=base_url()?>" class=" btn btn-info mt-1 col-md-11">Tambah ke keranjang</a>

					</li>
					</div>
				</div>
			</div>
			<br>
					<?php endforeach;?>
				
			</ul>
		</div>
	</div>
</div>

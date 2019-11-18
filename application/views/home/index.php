
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

	<div class="row mb-3 mt-3">
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


			<?php if (empty($mhs)) : ?>
			<div class="alert alert-danger" role="alert"> Data Barang tidak ditemukan ! </div>
			<?php endif; ?>
		
		<?php foreach($mhs as $mhs) : ?>
			<div class="card mb-3">
		  	<div class="row no-gutters">
		    <div class="col-md-2">
		      <img src="<?= base_url('assets/img/profile/default').$user ?>" class="card-img"  alt="...">
		    </div>
		    <div class="col-md-10">
		      <div class="card-body">
		        <h3 class="card-title"><?=$mhs['nama']?></h3>
		        <h1 class="card-text">Rp 50.000,-</h1>
		        <h5 class="card-text ">Informasi Produk</h5>
		        <p class="card-text"><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small></p>
		      </div>
		    </div>
	                <a  href="<?=base_url('home/pembayaran')?>" class="btn  btn-success col-md-12">Beli Sekarang</a>
					
					<a href="<?=base_url()?>" class=" btn btn-info mt-1 col-md-12">Tambah ke keranjang</a>
		  </div>
		</div>
		<?php endforeach;?>
		
					
		</div>
	</div>
</div>

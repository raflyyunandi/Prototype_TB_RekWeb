
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
					<input type="text" class="form-control" placeholder="Cari Mahasiswa ... " name="keyword">
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
			<div class="alert alert-danger" role="alert"> Data Mahasiswa tidak ditemukan ! </div>
			<?php endif; ?>
			
			<?php foreach($mhs as $mhs) : ?>
				<ul class="list-group">
				<div class="card mb-12" style="max-width: 540px;">
					<div class="row no-gutters">
            			<div class="col-md-4">
				 <img src="<?= base_url('assets/img/profile/default').$user ?>" class="card-img"  alt="...">
				</div>
					<div class="col-md-8">
	                <div class="card-body">
	                    <h3 class="card-title">Nama Barang</h3>
	                    <p class="card-text ">Rp 50.000,-</p>
						</div>
					</div>
				</div>
			</div>

				<li type="none"><?=$mhs['nama']?>
					<a href="<?=base_url()?>mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-pill badge-info float-right ml-1">Detail</a>
					<a href="<?=base_url()?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-pill badge-success float-right ml-1">Ubah</a>
					<a href="<?=base_url()?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-pill badge-danger float-right ml-1 tombol-hapus" >Hapus</a>
					<?php endforeach;?>
				</li>
			</ul>
		</div>
	</div>
</div>

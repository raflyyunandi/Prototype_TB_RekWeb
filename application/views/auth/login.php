
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card o-hidden border-0 shadow-lg my-5">	
				<div class="card-body">
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
					
									<h1 class="h4 text-gray-900 mb-4">Login Page</h1>
									</div>
									<?= $this->session->flashdata('message');
									?>
									<form class="user" method="post" action="<?=base_url('auth')?>">
									<div class="form-group">
									<input type="text" class="form-control" id="email" placeholder="Enter Email Address..."
									name="email" value="<?= set_value('email');?>">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
									</div>
										<div class="form-group">
										<input type="password" class="form-control" id="password" placeholder="Password"
										name="password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
										</div>
										<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</form>
								<hr>
									<div class="text-center">
									<a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
									<a href="<?=base_url('auth/register')?>" class="small">Create an Account!</a>
									</div>
									<div class="text-center">
									<a href="<?=base_url('')?>" class="small">Back to Home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
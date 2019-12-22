
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>GANTI PROFILE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">User</a></li>
                        <li class="breadcrumb-item active">ganti</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
   <!-- Begin Page Content -->
   <br>
   <br>
   
<div class="container">
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <?= form_open_multipart('user/edit'); ?>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                         
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10" class="submit-button text-left">
                    <button type="submit" class="btn btn-primary" >Edit</button>
                    <a href="<?= base_url(); ?>user/profile" class="btn btn-danger" class="submit-button text-left">Back</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
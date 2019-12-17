<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title;?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/')?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/')?>css/bootstrap.css" rel="stylesheet">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <a class="navbar-brand" href="">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link mr-3 " href="<?= base_url('')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('ecommerce/buah')?>">Buah</a>
          <a class="dropdown-item" href="<?= base_url('ecommerce/sayuran')?>">Sayuran</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item mr-3">
          <a class="nav-item nav-link mr-3" href="" data-toggle="modal" data-target="#aboutModal">About</a>
      </li>
      <li>
          <a class="nav-item nav-link" href="" data-toggle="modal" data-target="#contactModal">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="<?= base_url('auth')?>" class="btn btn-outline-success mr-sm-2" type="submit">Sign In</a>
      <a href="<?= base_url('auth/register')?>" class="btn btn-outline-success mr-sm-2" type="submit">Sign Up</a>
    </form>
  </div>
</nav>
<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/')?>js/js.js"></script>

     <!-- Modal -->
  <div class="modal fade" id="aboutModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h1>Contact us</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
   <!-- Modal -->
  <div class="modal fade" id="contactModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h1>Contact us</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
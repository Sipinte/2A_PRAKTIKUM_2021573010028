<?php
if (empty($_SESSION['username_inicafe'])) {
    header('location:login');
}
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_inicafe]'");
$hasil = mysqli_fetch_array($query);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Si Clean · Aplikasi Jasa Laundry</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <!-- Custom styles for this template -->
    <link href="assets/css/profile.css" rel="stylesheet">

</head>


<div class="container">
    <div class="main-body">


        <div class="row gutters-sm py-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            
                            <img src="assets/img/<?php echo $hasil['foto']; ?>" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4><?php echo $hasil['nama']; ?></h4>
                                <p class="text-secondary mb-1"><?php echo $hasil['username']; ?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $hasil['nama']; ?>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $hasil['username']; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $hasil['nohp']; ?>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $hasil['alamat']; ?>

                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-sm-10">
                                
                                <a class="dropdown-item" href="reset" data-bs-toggle="modal" data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah Password</a>
                            </div>


                            <div class="col-sm-2">
                                <a class="btn btn-danger " target="__blank" href="home">Back</a>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
<nav class="navbar navbar-expand-lg bg-light  " style="background: linear-gradient(to left, #009EFF, #0ed2f7);">
    <div class="container-sm">
        <a class="navbar-brand" href="."> <img src="assets/img/Logo_Header.png" width="140px"></a>
        
        <div class="navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <i> <?php echo $hasil['username']; ?></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="profile"><i class="bi bi-person-badge"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal ubah password  -->

<div class="modal fade" id="ModalUbahPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="username" value="<?php echo $_SESSION['username_inicafe'] ?>">
                                <label for="floatingInput">Username</label>
                                <div class="invalid-feedback">
                                    Masukkan username.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" required name="passwordlama">
                                <label for="floatingInput">Password Lama</label>
                                <div class="invalid-feedback">
                                    Masukkan password lama.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" required name="passwordbaru">
                                <label for="floatingInput">Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukkan password baru.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" required name="repasswordbaru">
                                <label for="floatingInput">Ulangi Password Baru</label>
                                <div class="invalid-feedback">
                                    Masukkan Ulangi Password Baru
                                </div>
                            </div>
                        </div>
                    </div>





            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="abc">Save
                    changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Akhir Modal ubah password  -->


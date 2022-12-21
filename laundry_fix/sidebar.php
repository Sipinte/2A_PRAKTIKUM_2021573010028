<style type="text/css">
.navbar .navbar-nav .nav-link {
    color: #fff;
    font-size: 1.1em;

}

.navbar .navbar-nav .nav-link:hover {
    color: #ffff;
}

.navbar .navbar-nav>li>a {
    color: #FFF;
}
</style>
</head>

<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2"
        style="background: linear-gradient(to right, #b2fefa, #0ed2f7);">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Si Clean</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x']==='home') || !isset($_GET['x']))  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                aria-current="page" href="home"><i class="bi bi-house"></i> Dashboard</a>
                        </li>

                        <?php if($hasil['level']!=1 && $hasil['level']!=4){?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x']==='menucustomer') || !isset($_GET['x']))  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                aria-current="page" href="menucustomer"><i class="bi bi-list"></i></i> Paket Laundry
                            </a>
                        </li><?php } ?>

                        <?php if($hasil['level']==1){?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x']==='menu') || !isset($_GET['x']))  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                aria-current="page" href="menu"><i class="bi bi-list"></i></i> Paket Laundry
                                (Operator)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='order')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="order"><i class="bi bi-cart4"></i> Order</a>
                        </li>

                        <?php if($hasil['level']==1){?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='user')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="user"><i class="bi bi-card-checklist"></i>
                                User</a>
                        </li>
                        <!-- <li class="nav-item">
                                <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='report')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="report"><i class="bi bi-file-earmark-bar-graph"></i>
                                Report</a>
                            </li> -->
                        <?php } ?>
                        <?php } ?>
                        <?php if($hasil['level']==4){?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='order')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="order"><i class="bi bi-cart4"></i> Order</a>
                        </li>
                        <?php } ?>

                        <?php if($hasil['level']==5){?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='order')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="order"><i class="bi bi-cart4"></i> My Order</a>
                        </li>
                        <?php } ?>

                        <li class="nav-item">
                            <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']==='about')  ? 'active link-light' : 'link-dark' ; ?>  ps-2"
                                href="about"><i class="bi bi-info-circle"></i>
                                About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
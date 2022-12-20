<div class="col-lg-3">
    <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pilihan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo ((isset ($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x']))?'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-fill"></i> Dasboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='menu')?'active link-light' : 'link-dark'; ?>" href="menu"><i class="bi bi-cart4"></i> Daftar Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='katmenu')?'active link-light' : 'link-dark'; ?>" href="katmenu"><i class="bi bi-tags"></i> Kategori Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='order')?'active link-light' : 'link-dark'; ?>" href="order"><i class="bi bi-cart4"></i> Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='customer')?'active link-light' : 'link-dark'; ?>" href="customer"><i class="bi bi-person-fill"></i> Customer</a>
                        </li>
                        <?php if($hasil['level']==1){ ?>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='user')?'active link-light' : 'link-dark'; ?>" href="user"><i class="bi bi-table"></i> User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2 <?php echo (isset ($_GET['x']) && $_GET['x']=='report')?'active link-light' : 'link-dark'; ?>" href="report"><i class="bi bi-clipboard2-fill"></i> Report</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
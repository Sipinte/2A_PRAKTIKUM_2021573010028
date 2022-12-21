<body style="background-color: #B4CDE6;">

<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_paket");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<div class="col-lg-9 mt-2">

    <?php
            if (empty($result)) {
                echo "Data Menu Makanan atau Minuman tidak ada";
            } else {
            foreach ($result as $row) {
            
            ?>

    <?php
            }
            ?>

    <!-- Card -->
    <div class="card"style="background: linear-gradient(to left, #82C3EC, #97DECE);">
        <div class="card-header">
        <h2><b>Paket Laundry</b> </h2>
        </div>
        <!-- Card Row -->
        <div class="row d-flex justify-content-around py-4">
            <?php
            function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,0,',','.')."/kg";
                return $hasil_rupiah;
             
            }
                $no = 1;
                foreach ($result as $row) {
             ?>
            <div class="col-sm-3">
                <div class="card-group">
                    <div class="card" style="background: linear-gradient(to right, #EFF5F5, #97DECE);">
                        <img src="assets/img/<?php echo $row['foto'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mp-header&#95;_welcome-hero"><b><?php echo $row['nama_paket'] ?></b></h5>
                            <h6 class="card-subtitle mb-2"><?php echo rupiah(intval($row['harga'])) ?></h6>
                            <p class="card-text"><?php echo $row['keterangan'] ?></p>
                                <a href="https://api.whatsapp.com/send?phone=+6281381618561&text=Halo+saya+mau+laundry" class="btn btn-primary" style=" display: inline-block; background-color: #88FFF7; color: black; padding: 5px 20px; margin-left: 3px; border-radius: 50px;"> Order &#8594;</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <!-- Card Row End -->
    </div>
    <!-- Card End -->
    <?php
            }
            ?>
</div>
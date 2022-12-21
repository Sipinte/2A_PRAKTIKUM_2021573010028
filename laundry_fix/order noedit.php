<body style="background-color: #B4CDE6;">

<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT o.id, o.total_price, o.qty, o.notes, o.status, u.username, u.level, u.nama, u.nohp, u.alamat, d.nama_paket, d.keterangan, d.harga from tb_order o, tb_user u, tb_daftar_paket d WHERE o.user_id = u.id_user AND o.packet_id = d.id_paket;");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_user = mysqli_query($conn, "SELECT id_user, username, nama, nohp, alamat FROM tb_user");
$select_service = mysqli_query($conn, "SELECT id_paket, nama_paket, harga FROM tb_daftar_paket");


?>
<div class="col-lg-9 mt-2">
<div class="card"style="background-color: #B9FFF8;">
        <div class="card-header">
        <h2><b>Order</b> </h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah
                        Order</button>
                </div>
            </div>

            <!-- Modal Tambah menu baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_order.php"
                                method="post" enctype="multipart/form-data">
                                <div class="mb-1"><b>Informasi Customer</b></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="user"
                                                required>
                                                <option selected hidden value="">Pilih Customer</option>
                                                <?php
                                            foreach($select_user as $value){
                                                echo "<option value=".$value['id_user'].">$value[nama]</option>";
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">Nama Customer</label>
                                            <div class="invalid-feedback">
                                                Pilih Customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="email" name="email" required>
                                            <label for="floatingInput">Email</label>
                                            <div class="invalid-feedback">
                                                Masukkan Email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="nohp" name="nohp" required>
                                            <label for="floatingInput">No Hp</label>
                                            <div class="invalid-feedback">
                                                Masukkan No Hp
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="alamat" style="height: 100px;"
                                                name="alamat"></textarea>
                                            <label for="floatingInput">Alamat</label>
                                            <div class="invalid-feedback">
                                                Masukkan Alamat
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-1"><b>Informasi Pesanan</b></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example"
                                                name="layanan" required>
                                                <option selected hidden value="">Pilih Layanan</option>
                                                <?php
                                            foreach($select_service as $value){
                                                echo "<option value=".$value['id_paket'].">$value[nama_paket]</option>";
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">Nama Layanan</label>
                                            <div class="invalid-feedback">
                                                Pilih Layanan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="harga" placeholder="harga"
                                                name="harga" required>
                                            <label for="floatingInput">Harga / Kg</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Kg
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="qty" placeholder="qty"
                                                name="qty" required value=0>
                                            <label for="floatingInput">Jumlah</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jumlah
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="" style="height: 100px;"
                                                name="notes"></textarea>
                                            <label for="floatingInput">Catatan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Catatan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1"><b>Estimasi Harga</b></div>
                                <div class="col-8 justify-content-end" id='rincian'>
                                    <b>
                                        <h6>Rincian:</h6>
                                    </b>
                                </div>
                                <div class="col-8 justify-content-end" id='totalPrice' name="totalPrice">
                                    <b>
                                        <h4>Total Harga: 0</h4>
                                    </b>
                                </div>
                                <input type="hidden" name="harga">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_order_validate"
                                        value="12345">Save changes</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Akhir Modal Tambah Menu baru-->
            <?php
             function rupiah($angka){
	
                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                return $hasil_rupiah;
             
            }
            if (empty($result)) {
                echo "Data Menu Makanan atau Minuman tidak ada";
            } else {
            foreach ($result as $row) {
            ?>
            <!--Modal View-->
            <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php"
                                method="post" enctype="multipart/form-data">
                                <div class="mb-1"><b>Informasi Customer</b></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nama'] ?>">
                                            <label for="floatingInput">Nama Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['username'] ?>">
                                            <label for="floatingInput">Email Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan Email Customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nohp'] ?>">
                                            <label for="floatingInput">No Hp Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan No Hp Customer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['alamat'] ?>">
                                            <label for="floatingPassword">Alamat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1"><b>Informasi Pesanan</b></div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nama_paket'] ?>">
                                            <label for="floatingInput">Layanan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Layanan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput"
                                                value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">Harga / Kg</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga/Kg
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['notes'] ?>">
                                            <label for="floatingInput">Catatan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Catatan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['qty'] ?>">
                                            <label for="floatingInput">Jumlah</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jumlah
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <b>
                                            <h6>Rincian: <?php echo $row['qty'] ?> Kg x
                                                <?php echo rupiah($row['harga']) ?></h6>
                                        </b>
                                        <b>
                                            <h4>Total Harga: <?php echo rupiah($row['total_price']) ?></h4>
                                        </b>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>

                                </div>


                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <!--Akhir Modal View-->

            <!--Modal Edit-->
            <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Lihat Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_order.php"
                                method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="mb-1"><b>Informasi Customer</b></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nama'] ?>">
                                            <label for="floatingInput">Nama Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['username'] ?>">
                                            <label for="floatingInput">Email Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan Email Customer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nohp'] ?>">
                                            <label for="floatingInput">No Hp Customer</label>
                                            <div class="invalid-feedback">
                                                Masukkan No Hp Customer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['alamat'] ?>">
                                            <label for="floatingPassword">Alamat</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-1"><b>Informasi Pesanan</b></div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['nama_paket'] ?>">
                                            <label for="floatingInput">Layanan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Layanan
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput"
                                                value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">Harga / Kg</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga/Kg
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['notes'] ?>">
                                            <label for="floatingInput">Catatan</label>
                                            <div class="invalid-feedback">
                                                Masukkan Catatan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput"
                                                value="<?php echo $row['qty'] ?>">
                                            <label for="floatingInput">Jumlah</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jumlah
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <b>
                                            <h6>Rincian: <?php echo $row['qty'] ?> Kg x
                                                <?php echo rupiah($row['harga']) ?></h6>
                                        </b>
                                        <b>
                                            <h4>Total Harga: <?php echo rupiah($row['total_price']) ?></h4>
                                        </b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example"
                                                name="status">
                                                <option selected hidden value="">Pilih Status</option>
                                                <option value=0>Baru</option>
                                                <option value=1>Diproses</option>
                                                <option value=2>Selesai</option>
                                            </select>
                                            <label for="floatingInput">Pilih Status</label>
                                            <div class="invalid-feedback">
                                                Pilih Status
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="edit_order_validate"
                                        value="12345">Save changes</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Akhir Modal Edit-->

            <!--Modal Delete-->
            <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_delete_order.php"
                                method="post">
                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                <div class="col-lg-12">
                                    Apakah anda ingin menghapus order atas nama <b><?php echo $row['nama'] ?> ? </b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger" name="input_user_validate"
                                        value="12345">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Akhir Modal Delete-->

            <?php
            }
            
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-nowrap">
                            <th scope="col">No</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Layanan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Catatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($result as $row) {
                            ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td>
                                <?php echo $row['nama'] ?>
                                <br>
                                <?php echo $row['username'] ?>
                                <br>
                                <?php echo $row['nohp'] ?>
                                <br>
                                <?php echo $row['alamat'] ?>
                            </td>
                            <td><?php echo $row['nama_paket'] ?></td>
                            <td><?php echo $row['qty'] ?></td>
                            <td><?php echo $row['total_price'] ?></td>
                            <td><?php echo $row['notes'] ?></td>

                            <td>
                                <?php if($row['status'] == 0) : ?>
                                <span class="badge rounded-pill text-bg-primary">Baru</span>
                                <?php elseif($row['status'] == 1) : ?>
                                <span class="badge rounded-pill text-bg-warning">Diproses</span>
                                <?php elseif($row['status'] == 2) : ?>
                                <span class="badge rounded-pill text-bg-success">Selesai</span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalView<?php echo $row['id'] ?>"><i
                                            class="bi bi-eye"></i></button>
                                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                        data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i
                                            class="bi bi-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
function showUser(str, type) {
    if (str == "") {
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                const getDataUser = JSON.parse(xmlhttp.response);
                if (type === 'user') {
                    $('input[name=email]').val(getDataUser[0].username);
                    $('input[name=nohp]').val(getDataUser[0].nohp);
                    document.getElementById("alamat").value = getDataUser[0].alamat;
                } else if (type === 'layanan') {
                    $('input[name=harga]').val(getDataUser[0].harga);
                    //$('input[name=type]').val(getDataUser[0].nohp);
                }

            }
        }
        const getUrl = type === 'user' ? "proses/get_user.php?q=" : "proses/get_service.php?q="
        xmlhttp.open("GET", getUrl + str, true);
        xmlhttp.send();
    }
}

$(document).ready(function() {
    $('select[name=user]').on('change', function() {
        var id = $(this).val();
        showUser(id, 'user')
    });
    $('select[name=layanan]').on('change', function() {
        var id = $(this).val();
        showUser(id, 'layanan')
    });
});

$("#qty").change(function() {
    var qtyValue = document.getElementById('qty').value;
    var priceValue = document.getElementById('harga').value;
    var totalPrice = qtyValue * priceValue;


    document.getElementById("rincian").innerHTML =
        `<b><h6>Rincian: ${qtyValue} Kg x ${priceValue}</h6></b>`;

    document.getElementById("totalPrice").innerHTML =
        ` <b><h4>Total Harga: ${totalPrice}</h4></b>`;

    $('input[name=harga]').val(totalPrice);

});
</script>
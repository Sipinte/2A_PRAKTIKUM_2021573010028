<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Si Clean - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="assets/css/profile.css" rel="stylesheet">
</head>



<body>
    <H2 style="text-align:center; margin-top:50px;"> Ubah Password </H2>
    <form class="needs-validation" novalidate action="proses/proses_ubah_password.php" method="POST">

    <div class="row">
        <div class="col-sm-4">
            
        </div>
    
    <div class="col-xl-4 mb-12">
                <div class="card" style="margin: 0 auto;">
                    <div class="card-body">
                        
                        <!-- Modal ubah password  -->
        <table align="center" style="margin-top:25px;">
            <tr>
                <td class="Name px-2"> <b> Username</b></td>
                <td> <input disabled type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required name="username" value="<?php echo $_SESSION['username_inicafe'] ?>"></td>
            </tr>

            <tr>
                <td class="username_register px-2"> <b> Masukkan Password Lama </b></td>
                <td><input type="password" class="form-control" id="floatingPassword" required name="passwordlama">
                    
                </td>
            </tr>

            <tr>
                <td class="password_register px-2"> <b> Masukkan Password Baru </b></td>
                <td><input type="password" class="form-control" id="floatingInput" required name="passwordbaru">
                    
                </td>
            </tr>

            <tr>
                <td class="password_register px-2"> <b> Ulangi Masukkan Password Baru </b></td>
                <td><input type="password" class="form-control" id="floatingPassword" required name="repasswordbaru">
                </td>
            </tr>

            <tr>
                <td>
                    <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="abc">Save
                        changes</button>
                        <a class="btn btn-danger " target="__blank" href="profile">Back</a>
                                </div>
                </td>
            </tr>


        </table>
        
        <div class="col-xxl-4">
            
        </div>
    </form>
    <!-- Akhir Modal ubah password  -->
                    </div>
                </div>
            </div>
        

</body>
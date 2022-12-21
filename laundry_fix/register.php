<body style="background-color: #B4CDE6;">
    <?php
    session_start();
    if (!empty($_SESSION['username_inicafe'])) {
        header("location:login.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Si Clean - Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>

    <body>
        <img src="assets/img/Logo.png"
            style="height: 200px ; display: block; margin-left: auto; margin-right: auto; margin-top:150px;">
        <H2 style="text-align:center; margin-top:50px;"> Register </H2>
        <form action="proses/proses_register.php" method="POST" enctype="multipart/form-data">
            <table align="center" style="margin-top:25px;">
                <tr>
                    <td class="Name px-2"> <b> Name</b></td>
                    <td><input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama"
                            required></td>
                </tr>
                <tr>
                    <td class="username_register px-2"> <b> Username </b></td>
                    <td><input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="username" required>
                </tr>
                <tr>
                    <td class="password_register px-2"> <b> Password </b></td>
                    <td><input type="password" class="form-control" id="floatingInput" placeholder="Password"
                            name="password" required></td>
                </tr>
                <tr hidden>
                    <td>Level</td>
                    <td><input type="text" class="form-control" id="floatingInput" placeholder="password" name="level">
                    </td>
                </tr>
                <tr>
                    <td class="NO.HP px-2"> <b> Number Phone </b></td>
                    <td><input type="number" class="form-control" id="floatingInput" placeholder="No HP" name="nohp"
                            required>
                    </td>
                </tr>
                <tr>
                    <td class="address px-2"> <b> Address </b></td>
                    <td><input type="text" class="form-control" id="floatingInput" placeholder="Address" name="alamat"
                            required></td>
                </tr>
                <tr>
                    <td class="address px-2"> <b> Masukkan Foto Profile </b></td>
                    <td>
                        <input type="file" class="form-control py-3" id="upload_foto" placeholder="Your Name"
                            name="foto">
                    </td>
                </tr>

        </form>


        <td><button style="margin-top:30px; " type="submit" class="btn btn-primary" name="input_register_validate"
                value="1234">Daftar</button></td>

    </body>

    </html>
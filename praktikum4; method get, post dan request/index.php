<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FORM GET</title>
</head>
<body>
    <form action="proses.php" method="get">
        <table border="0">
            <tr>
                <td> Nama </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td> No HP </td>
                <td><input type="number" name="no_hp"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="checkbox" name="hobi1">Olah Raga</td>
                <td><input type="checkbox" name="hobi2">Ngoding</td>
                <td><input type="checkbox" name="hobi3">Gosip</td>
            </tr>
            <tr>
            <td>Range</td>
            <td><input type="range" name="range"></td>
            <tr>
                <td><input type="submit" value="Kirim"></td>
            </tr>
        </table>
                    <input type="color">
                    <input type="date">
                    <input type="datetime-local">
                    <br>
                    <input type="email">
                    <input type="hidden">
                    <input type="month">
                    <br>
                    <input type="number">
                    <input type="password">
                    <input type="radio">
                    <br>
                    <input type="range">
                    <input type="reset">
                    <input type="search">
                    <br>
                    <input type="tel">
                    <input type="text">
                    <input type="time">
                    <br>
                    <input type="url">
                    <input type="week">
    </form>
</body>
</html>
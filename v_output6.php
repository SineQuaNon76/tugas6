<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
</head>
<style>
    table {
        background-color: slategray;
    }
</style>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Hasil Transaksi
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Pembeli</th>
                <th>:</th>
                <td>
                    <?= $pembeli; ?>
                </td>
            </tr>
            <tr>
                <th>No Handphone</th>
                <th>:</th>
                <td>
                    <?= $hp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>
            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <?= $ukur; ?>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <hr>
                    <a href="<?= base_url('tugas6'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
</head>

<style>
    select {
        width: 80%;
    }

    table {
        background-color: slategray;
    }
</style>

<body>
    <center>
        <form method="POST">
            <table>
                <tr>
                    <th colspan="3">
                        Toko Sepatu
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
                        <input type="text" name="pembeli" id="pembeli" placeholder="Masukan Nama">
                        <?= form_error('pembeli', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>No Handphone</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="hp" id="hp" placeholder="Masukan No Hp">
                        <?= form_error('hp', '<br><span style="color:red;">', '</span>'); ?>
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk">
                            <option>PILIHAN</option>
                            <?php foreach ($merk as $me) : ?>
                                <option value="<?= $me; ?>"><?= $me; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <td>:</td>
                    <td>
                        <select name="ukur" id="ukur">
                            <option>PILIHAN</option>
                            <?php for ($u = 32; $u <= 44; $u++) : ?>
                                <option value="<?= $u; ?>"><?= $u; ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
<center>
        <form action=" <?= base_url('siswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3"> 
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3"> 
                    <hr>
                </td>
            </tr>
            <tr>
               <th>Nama Siswa</th>
                <td>:</td>
                <td>
                    <input required type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input required type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input required type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input required type="text" name="tgl_lahir" id="tgl_lahir">
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input required type="text" name="tempat_lahir" id="tempat_lahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input required type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" id="Laki_Laki" value="Laki-Laki" name="jenis_kelamin">
                    <label for="laki">Laki-Laki</label>
                    <input type="radio" id="Perempuan" value="Perempuan" name="jenis_kelamin">
                    <label for="laki">Perempuan</label>
                </td>
                
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="0">Pilih Agama</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Islam">Islam</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type= "submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>
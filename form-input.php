<!DOCTYPE html>
<html>
<head>
    <title>Membuat Form Inputan Data</title>
    <script>
        function isi_otomatis() {
            // fungsi JS opsional, bisa diisi sesuai kebutuhan
        }
    </script>
</head>
<body>

<h2>Form Input Data Mahasiswa</h2>

<form method="post" action="simpan.php">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td>
                <select name="jurusan">
                    <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                    <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                    <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
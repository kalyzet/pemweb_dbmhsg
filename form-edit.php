<?php
include 'koneksi.php';

$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);

// Membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA', 'TEKNIK ELEKTRO', 'REKAMEDIS');

// Function untuk set radio button aktif
function active_radio_button($value, $input) {
    return $value == $input ? 'checked' : '';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Digital Talent</title>
</head>
<body>
    <form method="post" action="edit.php">
        <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs']; ?>">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $row['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="l" <?php echo active_radio_button('l', $row['jenis_kelamin']); ?>>Laki Laki
                    <input type="radio" name="jenis_kelamin" value="p" <?php echo active_radio_button('p', $row['jenis_kelamin']); ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            $selected = $j == $row['jurusan'] ? 'selected' : '';
                            echo "<option value='$j' $selected>$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Simpan Perubahan"></td>
            </tr>
            <tr>
                <td colspan="2"><a href="index.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
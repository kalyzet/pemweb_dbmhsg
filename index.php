<!DOCTYPE html>
<html>
<head>
    <title>Digital Talent</title>
    <link rel="stylesheet" href="data_mhs.css">
</head>
<body>
    <h2><u>Data Mahasiswa Politeknik Hasnur</u></h2>
    <form action="form-input.php" method="get" style="margin-bottom: 10px;">
    <button type="submit">+ Tambah Mahasiswa</button>
</form>

    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>ACTION</th>
            <th>ALAMAT</th>
        </tr>
        <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa");
        $no = 1;
        foreach ($mahasiswa as $row) {
            $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
            echo "<tr>
                    <td>$no</td>
                    <td>" . $row['nim'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>$jenis_kelamin</td>
                    <td>" . $row['jurusan'] . "</td>
                    <td>
                        <a href='form-edit.php?id_mhs=" . $row['id_mhs'] . "'>Edit</a>
                        <a href='delete.php?id_mhs=" . $row['id_mhs'] . "'>Delete</a>
                    </td>
                    <td>" . $row['alamat'] . "</td>
                  </tr>";
            $no++;
        }
        
        ?>
    </table>
</body>
</html>
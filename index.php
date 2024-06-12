<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "Arial Black", arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Sekolah_Sejahtera</h1></center>
    <h3>Tabel detail_pembayaran</h3>
    <table>
        <thead>
            <tr>
                <th>ID_pembayaran</th>
                <th>Bulan</th>
                <th>Tahun</th>
				<th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM detail_pembayaran';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_pembayaran'] ?></td>
                    <td><?php echo $row['Bulan'] ?></td>
                    <td><?php echo $row['Tahun'] ?></td>
					<td><?php echo $row['Jumlah'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel extrakulikuler</h3>
    <table>
        <thead>
            <tr>
                <th>ID_extrakulikuler</th>
                <th>Nama_kegiatan</th>
                <th>ID_Siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM extrakulikuler';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_extrakulikuler'] ?></td>
                    <td><?php echo $row['Nama_kegiatan'] ?></td>
                    <td><?php echo $row['ID_Siswa'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel guru</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Guru</th>
				<th>Nama</th>
                <th>Mata_Pelajaran</th>
                <th>Nomor_Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM guru';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Guru'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Mata_Pelajaran'] ?></td>
                    <td><?php echo $row['Nomor_Telepon'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel kelas</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Kelas</th>
                <th>Nama_Kelas</th>
                <th>ID_Guru</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Kelas';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Kelas'] ?></td>
                    <td><?php echo $row['Nama_Kelas'] ?></td>
                    <td><?php echo $row['ID_Guru'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel pembayaran</h3>
    <table>
        <thead>
            <tr>
                <th>ID_pembayaran</th>
                <th>ID_siswa</th>
                <th>TGl_pembayaran</th>
                <th>Jumlah_pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pembayaran';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_pembayaran'] ?></td>
                    <td><?php echo $row['ID_siswa'] ?></td>
                    <td><?php echo $row['TGl_pembayaran'] ?></td>
                    <td><?php echo $row['Jumlah_pembayaran'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

	<h3>Tabel siswa</h3>
    <table>
        <thead>
            <tr>
                <th>ID_Siswa</th>
                <th>NAMA</th>
                <th>Alamat</th>
                <th>Tanggal_lahir</th>
				<th>Nomor_Telepon</th>
				<th>Nama_Extrakulikuler</th>
				<th>Tanggal_Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM siswa';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Siswa'] ?></td>
                    <td><?php echo $row['NAMA'] ?></td>
                    <td><?php echo $row['Alamat'] ?></td>
                    <td><?php echo $row['Tanggal_lahir'] ?></td>
					<td><?php echo $row['Nomor_Telepon'] ?></td>
					<td><?php echo $row['Nama_Extrakulikuler'] ?></td>
					<td><?php echo $row['Tanggal_Bergabung'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>

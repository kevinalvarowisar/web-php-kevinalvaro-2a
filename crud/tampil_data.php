
<?php
// Memanggil koneksi database
require_once __DIR__ . '/config/koneksi.php';

// Mengambil data dari tabel pengurus
$query = "SELECT * FROM pengurus ORDER BY id ASC";

$data = mysqli_query($conn, $query);

// Memeriksa query
if (!$data) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Pengurus</title>
</head>
<body>

<h1>Data Pengurus</h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td><?php echo htmlspecialchars($row['nama']); ?></td>
        <td><?php echo htmlspecialchars($row['alamat']); ?></td>
        <td><?php echo htmlspecialchars($row['gender']); ?></td>
        <td><?php echo htmlspecialchars($row['gaji']); ?></td>
    </tr>
    <?php } ?>

</table>
<hr>
 
<h1>Input Data</h1>
 
<form method="post" action="simpan_data.php">
    <p>ID <input type="text" name="id" required="required"> </p>
    <p>Nama <input type="text" name="nama"> </p>
    <p>Alamat <textarea name="alamat"></textarea> </p>
    <p>Gender <input type="radio" name="gender" value="L"> Laki-laki 
    <input type="radio" name="gender" value="P"> Perempuan
    </p>
    <p>Gaji <input type="number" name="gaji"></p>
    <p>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </p>
</form>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <!-- <th>Aksi</th> -->
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['gaji']; ?></td>
        <td>
 <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> 
        </td>
    </tr>
<?php 
 }
?>
</table>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
<?php
 while($row=mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['gaji']; ?></td>
        <td>
            <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a> | 
            <a href="hapus_data.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin nih?')">Delete</a>
 
        </td>
    </tr>
<?php 
 }
?>
</table>
</body>
</html>

<?php
mysqli_free_result($data);
?>
